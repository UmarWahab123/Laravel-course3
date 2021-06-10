<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;

class PostController extends Controller
{
    //create a function to add the post in the databse
    public function addPost()
    {

        $post = new Post();
        $post->title = "Ramadan";
        $post->body = "Ramadan is a bless month for all human being";
        $post->save();
        return "Post has been created successfully!";
    }
    //create a function to add the comment in the database
    public function addComment($id)
    {
        $post = Post::find($id);
        $comment = new Comment();
        $comment->comment = "yes ofcours";
        $post->comments()->save($comment);
        return "comment has been posted";

    }
    //create a method to fetch the comment by post
    public function getCommentByPost($id)
    {
        $comments = Post::find($id)->comments;
        return $comments;
    }
}
