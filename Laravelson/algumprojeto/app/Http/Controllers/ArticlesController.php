<?php

namespace App\Http\Controllers;

use App\Article;
use App\Tag;

class ArticlesController extends Controller
{
    //Renderizar uma lista de recursos
    public function index()
    {
        if (request('tag')) {
            $articles = Tag::where('name', request('tag'))->firstOrFail()->articles();
        } else {
            $articles = Article::latest();
        }

        $articles = $articles->paginate(4);

        return view('articles.index', ['articles' => $articles]);
    }

    //Mostra um único recurso
    public function show(Article $article)
    {
        return view('articles.show', ['article' => $article]);
    }

    //Mostra uma view para criar um novo recurso
    public function create()
    {
        return view('articles.create', [
            'tags' => Tag::all(),
        ]);
    }

    //Persistir o recurso
    public function store()
    {
        $this->validateArticle();

        $article = new Article(request(['title', 'excerpt','body']));
        $article->user_id = 1;
        $article->save();

        $article->tags()->attach(request('tags'));

        return redirect(route('articles.index'));
    }

    //Mostra uma view para editar o recurso existente
    public function edit(Article $article)
    {
        return view('articles.edit', compact('article'));
    }

    //Persiste o recurso editado
    public function update(Article $article)
    {
        //Poderia ter feito como no de cima mas deixei de exemplo
        $validatedArticle = $this->validateArticle();

        $article->update($validatedArticle);

        return redirect($article->path());
    }

    protected function validateArticle()
    {
        return request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required',
            'tags' => 'exists:tags,id'
        ]);
    }

    //Deleta o recurso
    public function destroy()
    {
        //
    }
}
