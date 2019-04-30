<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\ArticleResource as ArticleResource;
use App\Article;

class ArticleController extends Controller
{
    public function index()
    {
        $articles=Article::all();
        return ArticleResource::collection($articles);
        //return view('article',compact('articles'));
    }

    public function create()
    {
        $articles = Article::all();
        return view('create',compact('articles'));
    }

    public function store(Request $request)
    {
        $articles = Article::create([
            'title' => $request->title,
            'description' => $request->description,
            'writer' => $request->writer,
            'image' => 'image1',
        ]);
        //return new ArticleResource($articles);
        return redirect()->route('index');
    }

    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('edit',compact('article'));
    }

    public function update(Request $request,$id)
    {
        $article = Article::findOrFail($id);
        $article->fill([
            'title' => $request->title,
            'description' => $request->description,
            'writer' => $request->writer,
            'image' => 'image1',
        ]);
        $article->save();
        //return new ArticleResource($article);
        return redirect()->route('index');
    }

    public function destroy(Request $request,$id)
    {
        $article = Article::findOrFail($id);
        $article->delete();
        return redirect()->route('index');
       //return new ArticleResource($article);
    }
}
