<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class BlogPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        //
        $posts = Post::query()->get()->all();
        return view('client.blog_home',['posts' => $posts]);
    }
    public function search(Request $request){
        $search_text = $request['query'];
//        $searched_post = Post::query()->where('title','=' , $search_text )->get()->all();
//        $searched_post = Post::query()->where('title' ,'LIKE', '%' , $search_text , '%')->get()->all();
        $searched_post = Post::query()->when(request('query'),function($query){
            $query->where('title','LIKE','%'.request('query').'%')
            ->orWhere('content','LIKE','%'.request('query').'%');
        })->paginate();
        return view('client.blog_post-search',['searched_post' => $searched_post]);
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
    public function show(string $id)
    {
        //
        $post = Post::query()->findOrFail($id);
        return view('client.blog_post',['post' => $post]);
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
