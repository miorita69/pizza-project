<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog\Article;

class BlogController extends Controller
{
    public function index()
    {
        $articles = Article::orderBy('created_at','DESC')->paginate(6);
        return view ('pages/blog-list',['articles'=>$articles]);      
    }

    public function show(int $articleId)
    {
        $article = Article::findOrFail($articleId);

        return view('pages/blog-article', ['article' => $article]);
    }

}
