<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class CommentsController extends Controller
{
    protected $comment;

    public function __construct(Comment $comment)
    {
        $this->comment = $comment;
    }

    public function getIndex()
    {
        $comments = $this->comment->all();
        return view('show.index', compact('comments'));
    }
}
