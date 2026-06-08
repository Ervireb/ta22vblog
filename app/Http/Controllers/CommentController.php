<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use App\Http\Requests\StoreCommentRequest;
use App\Http\Requests\UpdateCommentRequest;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoreCommentRequest $request, Post $post)
    {
        $post->comments()->create([
            'body' => $request->body,
            'user_id' => auth()->id(),
            'post_id' => $post->id,
        ]);

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comment $comment)
    {
        abort_unless($comment->user_id === auth()->id(), 403);

        return view('comments.edit', compact('comment'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCommentRequest $request, Comment $comment)
    {
        abort_unless($comment->user_id === auth()->id(), 403);

        $comment->update([
            'body' => $request->body,
        ]);

        return redirect()->route('post', $comment->post);
        }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment)
    {
        abort_unless(
            $comment->user_id === auth()->id(),
            403
        );

        $comment->delete();

        return back();
    }
}
