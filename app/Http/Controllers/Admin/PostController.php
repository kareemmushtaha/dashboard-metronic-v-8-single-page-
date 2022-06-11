<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use Inertia\Response;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(): Response
    {
        $posts = Post::query()
            ->when(
                request('search'),
                fn ($query) => $query->where('name', 'LIKE', '%' . request('search') . '%')
            )
            ->latest()
            ->paginate(5);

        return Inertia::render('Admin/Posts/Index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(): Response
    {
        return Inertia::render('Admin/Posts/Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param PostRequest $request
     * @return RedirectResponse
     */
    public function store(PostRequest $request): RedirectResponse
    {
        Post::create($request->validated());

        return redirect()
            ->route('admin.posts.index')
            ->with('message', trans('alert.added_successfully'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Post $post
     * @return Response
     */
    public function edit(Post $post): Response
    {
        return Inertia::render('Admin/Posts/Edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param PostRequest $request
     * @param Post $post
     * @return RedirectResponse
     */
    public function update(PostRequest $request, Post $post): RedirectResponse
    {
        $post->update($request->validated());

        return redirect()
            ->route('admin.posts.index')
            ->with('message', trans('alert.updated_successfully'));
    }

    /**
     *
     * Remove the specified resource from storage.
     *
     * @param Post $post
     * @return RedirectResponse
     *
     */

    public function destroy(Post $post): RedirectResponse
    {
        $post->delete();

        return redirect()
            ->route('admin.posts.index')
            ->with('message', trans('alert.deleted_successfully'));
    }
}
