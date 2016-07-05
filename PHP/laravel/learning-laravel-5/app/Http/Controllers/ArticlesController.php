<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests;

class ArticlesController extends Controller
{
    public function index() {

        $articles = Article::all();


        return view('articles.index', compact('articles'));
    }

    public function show($id) {

        $article = Article::findOrFail($id);

        return view('articles.show', compact('article'));
    }

    public function create() {

        return view('articles.create');
    }
}
