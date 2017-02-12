<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

class BasicCommentController extends Controller
{

  public function add(Request $request)
  {
    $comment = new Comment();
    $comment->commentId = 0;
    $comment->comment = $request['text'];
    $comment->projectId = $request['projectId'];
    $comment->save();
    return 'successfully added a comment';
  }

  public function delete(Request $request)
  {
    $comment = Comment::where('commentId', '=', $request['id'])->firstOrFail();
    $comment->delete();
    return 'successfully removed a comment';
  }

}
