<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{

    public function index()
    {
        $posts = Post::all();
        $active = "home";
        return view('home', compact('posts', 'active'));
    }

    public function create()
    {
        $active = "create";
        return view('posts.create', compact('active'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'desc' => 'required',
            'location' => 'required',
            'image' => 'required|image',
        ]);

        $data = $request->except("_token", "image", "user_id");

        $data['user_id'] = auth()->user()->id;

        // Save Image
        if ($request->hasFile('image')) {
            $data['image'] = $this->upload($request->image, "posts/images");
        }

        Post::create($data);
        return redirect()->back()->with('success', __("Post has been added successfully"));
    }


    public function edit(Post $post){
        $active = "S";
        return view('posts.update', compact('post', 'active'));
    }

    public function update(Request $request, Post $post){
        $request->validate([
            'title' => 'required',
            'desc' => 'required',
            'location' => 'required',
            'image' => 'image',
        ]);

        $data = $request->except("_token", "image", "user_id");

        // Save Image
        if ($request->hasFile('image')) {
            $data['image'] = $this->upload($request->image, "posts/images");
        }

        $post->update($data);
        return redirect()->back()->with('success', __("Post has been added successfully"));
    }


    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->back()->with('success', __("Post has been deleted successfully"));
    }

    public function myposts()
    {
        $active = "myposts";
        $user = auth()->user();
        $posts = $user->posts;
        return view('posts.myposts', compact('posts', 'active'));
    }

    public function feeds()
    {
        $active = "feeds";
        $user = auth()->user();
        $posts = $user->posts;
        return view('posts.feeds', compact('posts', 'active'));
    }

    function upload($file, $folder)
    {
        $profile_img = Image::make($file)->encode('jpg');
        $img = $file->hashName();
        Storage::disk('local')->put('public/images/' . $folder . '/' . $img, (string)$profile_img, 'public');
        return $img;
    }
}
