<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\NewsComment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('layout.admin.news');
    }

    public function loadLimit(Request $request)
    {
        $news = News::loadLimit($request->limit, $request->id);
        if (count($news) > 0) {
            $status = 200;
            $response = ['message' => 'Successfully Loaded News data', 'data' => $news];
        } else {
            $status = 404;
            $response = ['message' => 'Failed Loaded News data', 'data' => $news];
        }
        return response()->json($response, $status);
    }

    public function assetUpload(Request $request)
    {
        $photo = Storage::disk('public_asset')->put('/media/news/temp/asset/' . (intval($request->rand) > 1000 ? 'update/' : '') . $request->rand, $request->file('file'));
        return response()->json(array('location' => asset('assets/' . $photo)));
    }
    public function thumbnailUpload(Request $request)
    {
        $photo = Storage::disk('public_asset')->put('/media/news/temp/thumbnail/' . (intval($request->header('X-RAND-TOKEN')) > 1000 ? 'update/' : '') . $request->header('X-RAND-TOKEN'), $request->file('file'));
        return response()->json(array('location' => asset('assets/' . $photo)));
    }

    public function comment($slug, Request $request)
    {
        $request->validate(['comment' => 'required']);
        DB::beginTransaction();
        try {
            $data = $request->except('_token');
            $data['user_id'] = Auth::user()->id;
            NewsComment::Comment($slug, $data);
            $status = 200;
            $response = ['message' => 'komen berhasil di tambahkan'];
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            $status = 422;
            $response = ['message' => 'komen gagal di tambahkan, coba beberapa saat lagi'];
        }
        return response()->json($response, $status);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layout.admin.news-create', ['rand' => rand(0, 1000)]);
    }
    public function cancelThumbnail(Request $request)
    {
        if (Storage::disk('public_asset')->deleteDirectory('/media/news/temp/thumbnail/' . $request->rand)) {
            $response = ['message' => 'thumbnail berhasil di batalkan'];
            $status = 200;
        } else {
            $response = ['message' => 'thumbnail gagal di batalkan'];
            $status = 422;
        }
        return response()->json($response, $status);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $request->validate([
                'title' => 'required|unique:news,title',
                'content' => 'required',
                'type' => 'required|in:pu_news,pu_announcement,pr_news,pr_announcement',
            ]);
            $data = $request->except('_token', 'rand');
            $data['slug'] = Str::of($data['title'])->slug('-');
            $data['content'] = implode($data['slug'] . $request->rand, explode($request->rand, implode(env('APP_URL') . '/', explode('../', implode('/', explode('/temp/', $data['content']))))));
            $data['user_id'] = auth()->user()->id;
            $data['regency_id'] = 1;
            if (Storage::disk('public_asset')->exists('/media/news/temp/thumbnail/' . $request->rand)) {
                Storage::disk('public_asset')->move('/media/news/temp/thumbnail/' . $request->rand, '/media/news/thumbnail/' . $data['slug'] . $request->rand);
                Storage::disk('public_asset')->deleteDirectory('/media/news/temp/thumbnail/' . $request->rand);
            }
            if (Storage::disk('public_asset')->exists('/media/news/temp/asset/' . $request->rand)) {
                preg_match_all('/\/+[\w]+\/+[\w]+\/+[\w]+[.]+[\w]+\"{1}/', $data['content'], $unUsePhoto);
                foreach (Storage::disk('public_asset')->allFiles('/media/news/temp/asset/' . $request->rand) as $index => $photo) {
                    if (array_search(implode('', explode('media/news/temp', $photo)) . '"', $unUsePhoto[0]) === false) {
                        Storage::disk('public_asset')->delete('/' . $photo);
                    }
                }
                Storage::disk('public_asset')->move('/media/news/temp/asset/' . $request->rand, '/media/news/asset/' . $data['slug'] . $request->rand);
                Storage::disk('public_asset')->deleteDirectory('/media/news/temp/asset/' . $request->rand);
            }
            $data['photo'] = Storage::disk('public_asset')->allFiles('/media/news/thumbnail/' . $data['slug'] . $request->rand)[0];
            News::create($data);
            $response = ['message' => 'berita / pengumuman berhasil di buat'];
            $status = 200;
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            $response = ['message' => $th->getMessage() ?? 'berita / pengumuman gagal di buat'];
            $status = 422;
        }
        return response()->json($response, $status);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        $news = News::with(['user', 'comment'])->where('slug', $slug)->first();
        return view('layout.admin.news-show', compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $slug)
    {
        $news = News::with(['user', 'comment'])->where('slug', $slug)->first();
        $news->size = Storage::disk('public_asset')->exists(implode('', explode('assets', $news->photo))) ? Storage::disk('public_asset')->size(implode('', explode('assets', $news->photo))) : 0;
        $rand = rand(1001, 2000);
        return view('layout.admin.news-edit', compact('news', 'rand'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        dd($id);
    }
}
