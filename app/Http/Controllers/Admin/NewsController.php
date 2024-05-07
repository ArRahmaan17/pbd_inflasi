<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\NewsComment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
        return view('layout.admin.news-create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit(string $id)
    {
        //
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
    }
}
