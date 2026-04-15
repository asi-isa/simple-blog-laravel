<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userPosts = Auth::user()->blogPosts()->get();

        return view('blog-post.index', ['posts' => $userPosts]);
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
        $validated = $request->validate([
            'title' => ['required', 'string', 'min:4'],
            'description' => ['required', 'string', 'min:4'],
            'body' => ['required', 'string', 'min:4'],
        ]);

        Auth::user()->blogPosts()->create($validated);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(BlogPost $blogPost)
    {
        return view('blog-post.show', ['blogPost' => $blogPost]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BlogPost $blogPost)
    {
        if (Auth::user()->id !== $blogPost->user->id) {
            return abort(403);
        }

        return view('blog-post.edit', ['blogPost' => $blogPost]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BlogPost $blogPost)
    {
        if (Auth::user()->id !== $blogPost->user->id) {
            return abort(403);
        }

        $validated = $request->validate([
            'title' => ['required', 'string', 'min:4'],
            'description' => ['required', 'string', 'min:4'],
            'body' => ['required', 'string', 'min:4'],
        ]);

        $blogPost->update($validated);

        return redirect()->route('blogPost.show', [$blogPost]);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BlogPost $blogPost)
    {
        $blogPost->delete();

        return redirect('/');
    }
}
