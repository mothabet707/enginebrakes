<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Comment;
use App\Models\Workshop;
use Illuminate\Http\Request;
use App\Http\Requests\CommentRequest;
use App\Http\Requests\DeleteCommentRequest;

class CommentController extends Controller
{
    public function create(CommentRequest $request){
        $commenable_type = $request->commentable_type;

        $model = $commenable_type == 'Workshop'? Workshop::class : Item::class;
        $model::findOrFail($request->commentable_id);

        $comment = new Comment();
        $comment->commentable_type = "App\Models\\$commenable_type";
        $comment->commentable_id = $request->commentable_id;
        $comment->comment = $request->comment;
        $comment->user_id = auth()->user()->id;
        $comment->parent_id = $request->parent_id;
        $comment->save();
        return $comment;
    }

    public function delete(DeleteCommentRequest $request){
        $comment = Comment::where('user_id', auth()->user()->id)->where('id', $request->comment_id)->first();
        if($comment){
            $comment->delete();
            return response(['msg'=>'deleted']);
        }
        else{
            return response(['msg'=>'Not found.'], 404);
        }
    }
}
