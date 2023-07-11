<?php
namespace App\Http\Controllers;

use App\Models\BlogPost;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class CommentController extends Controller
{
    public function index($id)
    {
        $blogPost = BlogPost::findOrFail($id);
        return view('comments', ['blogPost' => $blogPost]);

        // $comments = Comment::all();
        // $comm = Comment::findOrFail($id);
        // return view('comments', ['comments' => $comment]); 
        // return view('comments', ['comm' => $comm]);
    }

    public function store(Request $request, $id)
    {
        $validatedData = $request->validate([
            'content' => 'required',
        ]);

        $blogPost = BlogPost::findOrFail($id);

        $comment = new Comment();
        $comment->content = $validatedData['content'];

        // Associate the comment with the blog post
        $comment->blog_post_id = $blogPost->id;

        $comment->save();

        return Redirect::to('/blog-posts/' . $blogPost->id);
    }
}