<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class CommentController extends Controller
{
    public function postComment(Request $request){
    	$input = $request->all();

   		$comment = new Comment;
   		$comment->user_id = auth()->user()->id;
   		$comment->film_id = $input['movie-id'];
   		$comment->comment = $input['movie-comment'];

   
   		if($comment->save()){
   			return redirect('films/'. $input['movie-slug'])->with("success", "Posted!");
   		}



    }
}
