<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests;
use Carbon\Carbon;
use Request;

class ArticlesController extends Controller
{
    public function index() {

        $articles = Article::latest('published_at')->get();


        return view('articles.index', compact('articles'));
    }

    public function show($id) {

        $article = Article::findOrFail($id);

        return view('articles.show', compact('article'));
    }

    public function create() {

        return view('articles.create');
    }

    public function store() {

        $input = Request::all();

        $article = new Article();
        $article->title = $input['title'];
        $article->body = $input['body'];
        $article->published_at = Carbon::now();

        $article->save();

        return redirect('articles');
    }
}
