<?php

// ArticleController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\ArticleCollection;
use App\Article;

class ArticleController extends Controller
{
    public function store(Request $request)
    {
      $article = new Article([
        'name' => $request->get('name'),
        'description' => $request->get('description'),
        'price' => $request->get('price'),
      ]);

      $article->save();

      return response()->json('successfully added');
    }

    public function index()
    {
      return new ArticleCollection(Article::all());
    }

    public function edit($id)
    {
      $article = Article::find($id);
      return response()->json($article);
    }

    public function update($id, Request $request)
    {
      $article = Article::find($id);

      $article->update($request->all());

      return response()->json('successfully updated');
    }

    public function delete($id)
    {
      $article = Article::find($id);

      $article->delete();

      return response()->json('successfully deleted');
    }
}