<?php


namespace App\Http\Controllers;


use App\Article;

class ArticlesController extends Controller
{
    //Renderizar uma lista de recursos
    public function index()
    {
        $articles = Article::latest()->paginate(4);

        return view('articles/index', ['articles' => $articles]);
    }

    //Mostra um único recurso
    public function show($id)
    {
        $article = Article::find($id);

        return view('articles/show', ['article' => $article]);
    }

    //Mostra uma view para criar um novo recurso
    public function create()
    {
        return view('articles/create');
    }

    //Persistir o recurso
    public function store()
    {
        $article = new Article();

        $article->tittle = request('tittle');
        $article->excerpt = request('excerpt');
        $article->body = request('body');

        $article->save();

        return redirect('/articles');
    }

    //Mostra uma view para editar o recurso existente
    public function edit()
    {

    }

    //Persiste o recurso editado
    public function update()
    {

    }

    //Deleta o recurso
    public function destroy()
    {

    }
}
