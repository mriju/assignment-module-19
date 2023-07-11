<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;

class BlogPostController extends Controller
{
    public function index()
    {
        $blogPosts = BlogPost::all();
        return view('blog-posts', ['blogPosts' => $blogPosts]);        
        // return response()->json($blogPosts);
    }

    public function show($id)
    {
        $blogPost = BlogPost::findOrFail($id);
        return view('blog-post', ['blogPost' => $blogPost]);
        // return response()->json($blogPost);
    }
}