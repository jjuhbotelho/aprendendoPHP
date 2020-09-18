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
    public function show(Article $article)
    {
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
        Article::create($this->validateArticle());

        return redirect(route('articles.index'));
    }

    //Mostra uma view para editar o recurso existente
    public function edit(Article $article)
    {
        return view('articles/edit', compact('article'));
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
            'body' => 'required'
        ]);
    }

    //Deleta o recurso
    public function destroy()
    {

    }
}
