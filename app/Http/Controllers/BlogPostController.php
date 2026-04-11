<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;

class BlogPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('welcome', ['posts' => BlogPost::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blog-post.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validate
        $request->validate([
            'title' => ['required', 'string', 'min:4'],
            'description' => ['required', 'string', 'min:4'],
            'body' => ['required', 'string', 'min:4'],
        ]);

        // get auth user

        BlogPost::create([
            'user_id' => 1,
            'title' => $request->title,
            'description' => $request->description,
            'body' => $request->body,
        ]);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(BlogPost $blogPost): void
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BlogPost $blogPost): void
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BlogPost $blogPost): void
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BlogPost $blogPost): void
    {
        //
    }
}
