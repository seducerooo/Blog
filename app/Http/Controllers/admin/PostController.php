<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $user = User::query()->findOrFail(Auth::id());
        $posts = Post::query()->get()->all();
        return view('admin.post.index',['posts' => $posts,'user' => $user]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.post.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        //


        auth()->user()->posts()->create([
            'user_id' => Auth::id(),
            'post_image' => request('post_image')->store('images'),
            'title' => $request['title'],
            'content' => $request['content']
        ]);
//        Post::query()->create([
//            'user_id' => auth()->id(),
//            'post_image' => $request->image->storeAs('images', $imageName),
//            'title' => $request['title'],
//            'content' => $request['content']
//        ]);
        return to_route('post.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $user = User::query()->findOrFail(Auth::id());
        $posts = Post::query()->where('id',$id)->get()->all();
        return view('admin.post.show',['posts' => $posts,'user' => $user]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $posts = Post::query()->where('id',$id)->get()->all();
        return view('admin.post.edit',['posts' => $posts]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, string $id)
    {
        //
        auth()->user()->posts()->update([
            'post_image' => request('post_image')->store('images'),
            'title' => $request['title'],
            'content' => $request['content']
        ]);
        return to_route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
        $post->delete();
        return back();
    }
}
