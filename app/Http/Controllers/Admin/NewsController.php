<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

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

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
        $news = News::with('user')->where('slug', $slug)->first();
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
