<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    //

    public function home()
    {
        $articles = Article::with('writer')->latest()->take(2)->get();
        return view('home')->with('articles', $articles);
    }

    public function showDataScienceArticles()
    {
        $articles = Article::where('category', 'Data Science')->with('writer')->get();
        return view('article.data_science')->with('articles', $articles);
    }

    public function showNetworkSecurityArticles()
    {
        $articles = Article::where('category', 'Network Security')->with('writer')->get();
        return view('article.network_security')->with('articles', $articles);
    }

    public function showArticleDetail($id)
    {
        $article = Article::with('writer')->findOrFail($id);
        return view('article.article_detail')->with('article', $article);
    }

    public function showWriterArticles($id)
    {
        $articles = Article::where('writer_id', $id)->with('writer')->get();
        return view('article.writer_article')->with('articles', $articles);
    }

    public function showPopularArticles()
    {
        $articles = Article::with('writer')->paginate(3);
        return view('other.popular')->with('articles', $articles);
    }
}
