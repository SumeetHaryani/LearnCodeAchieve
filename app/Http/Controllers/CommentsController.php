<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;

class CommentsController extends Controller
{
    public function store(Request $request,$post_id){
     
     //$post->addcomment(request('body'));
     
    //     Comment::create([
    //        'body' => request('body'),
    //        'post_id' => $post->id
    //    ]);
    //   $comment = new Comment;
    //   $comment->body = $request->input('body');
    //   $comment->post_id = $post->id;  
    //   $comment->save();
     // return back();
      $this->validate($request, [
        'body' => 'required',
    ]);
            // Create comment
    $comment = new Comment;
    $comment->body = $request->input('body');
    $comment->post_id = $post_id;
    $comment->user_id = auth()->user()->id;
    $comment->save();
    return redirect('posts/'.$post_id)->with('success', 'Comment Added Successfully');
    }
}
