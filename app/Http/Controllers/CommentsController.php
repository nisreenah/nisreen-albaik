<?php

namespace App\Http\Controllers;

use App\Models\Comment;

class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comments = Comment::all();
        return view('admin.comments.index', compact('comments'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Comment $comment)
    {
        return view('admin.comments.show', compact('comment'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment)
    {
        $comment->delete();
        return redirect()->route('comments.index')->with($this->notification('Comment has been deleted'));
    }

    public function activate(Comment $comment)
    {
        $comment->update(['status' => 'accepted']);
        return redirect()->route('comments.index')->with($this->notification('Comment has been accepted'));
    }

    public function deactivate(Comment $comment)
    {
        $comment->update(['status' => 'rejected']);
        return redirect()->route('comments.index')->with($this->notification('Comment has been rejected'));
    }

}
