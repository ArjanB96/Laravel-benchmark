<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;

class CommentController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    public function index()
    {
        $comments = Comment::all();

        return response()->json($comments);
    }
}
