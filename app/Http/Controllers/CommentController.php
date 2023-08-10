<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate(['comment' => 'required']);

        $created = Comment::create([
            'comment' => $validated['comment'],
            'user_id' => auth()->user()->id,
            'post_id' => $request->input('post_id')
        ]);

        if ($created) {
            return back();
        } else {
            return back()->with('error_create_comment', 'Ocorreu um erro ao cadastrar seu comentário, por favor tente novamente.');
        }


    }

    public function destroy($id)
    {
        $comment = Comment::find($id);
        $deleted = $comment->delete();

        if ($deleted) {
            return back();
        } else {
            return back()->with('error_delete_comment', 'Ocorreu um erro inesperado, por favor tente novamente após alguns instantes.');
        }
    }
}
