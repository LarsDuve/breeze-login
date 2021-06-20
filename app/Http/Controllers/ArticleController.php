<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $article=Article::latest('updated_at')->get();
        return view('articles.index', [
            'articles' => $article
        ]);
    }
    public function create()
    {
        return view('articles.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required',
        ]);

        Article::create([
            'title' => request('title'),
            'excerpt' => request('excerpt'),
            'body' => request('body'),
        ]);

        return redirect(route('articles.index'));
    }
    public function show(Article $article)
    {
        return view('articles.show', ['article' => $article]);
    }
    public function edit(Article $article)
    {
        return view('articles.edit', ['article' => $article]);
    }
    public function update(Request $request, Article $article)
    {
        $request->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required',
        ]);

        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->body = request('body');
        $article->save();

        return redirect($article->path());
    }
    public function destroy(Article $article)
    {
        $article->delete();

        return redirect(route('articles.index'));
    }
}
