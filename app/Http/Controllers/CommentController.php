<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request)
    {
       $validated = $request->validate([
            'comment' => 'required'
       ]);


       $created = Comment::create([
            'comment' => $validated['comment'],
            'event_id' => $request->input('event_id')
       ]);

       return back();
    }

    public function destroy($id)
    {
        $comment = Comment::findOrFail($id);
        $comment->delete();
        return back();
    }
}
