<?php

namespace App\Http\Controllers;



use App\Blog;
use App\Comment;
use App\Model\Comentario;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use SebastianBergmann\Environment\Console;

class BlogsController extends Controller
{
    /**
     * Display the list of travel blogs.
     *
     */
    //TODO create a services that brings the blogs then call that service in the show method and change blogs.blade to include service instead of controller
    public function getBlogs()
    {
        //se debe colocar una condicion dummy en el where para poder usar el order by
        return Blog::where('created_at', '!=', null)->orderBy('created_at', 'desc')->get();
    }

    public function blog(Blog $blog){
        return view('blog', compact('blog'));
    }

    public function commentBlog(Blog $blog): RedirectResponse
    {
        $comment = new Comment();
        $comment->blog_id = $blog->id;
        $comment->comment = request()->comment;
        $comment->name = request()->name;
        $comment->email = request()->email;
        $comment->save();
        return back();
    }

    public function replyComment(Comment $comment): RedirectResponse
    {
        $reply = new Comment();
        $reply->blog_id = $comment->blog_id;
        $reply->reply_id = $comment->id;
        $reply->comment = request()->comment;
        $reply->name = request()->name;
        $reply->email = request()->email;
        $reply->save();
        return back();
    }

/**
* BLOG ONLINE EDITOR
*/


    /**
     * @return mixed
     *
     *
     */public function editBlog(){
        $blog = Blog::find(request()->blogID);
        $blog->content = request()->input('main-content');
        $blog->save();
        return $blog->id;
    }

    public function uploadImage(): JsonResponse
    {
        $image = request()->img;
        $image->storeAs('img/blogs', $image->hashName(), 'uploads');//TODO LUEGO DE ARREGLAR EL ALAMCENAMIENTO EN HEROKU QUITAR EL UPLOADS DE filesystem.php
        return response()->json([
            'size' => '100',
            'url' => '../img/blogs/'.$image->hashName()
        ]);
    }

    public function insertImage(){
        return response()->json([
            'size' =>[600,600],
            'url' => request()->url,
            'alt' => 'alt',
        ]);
    }

/**
* END BLOG ONLINE EDITOR
*/

}
