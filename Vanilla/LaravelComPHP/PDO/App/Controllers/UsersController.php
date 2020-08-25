<?php

namespace App\Controllers;

use App\Core\App;

class UsersController
{

    public function index()
    {
        $users = App::get('database')->selectAll('users');
        return view('users', compact('users'));
    }

    public function store()
    {
        //Inserir o usuário associado com a request.
        /** @var $app */
        App::get('database')->insert('users', [
            'name' => $_POST['name']
        ]);

        //Redirecionar para todos os usuários.
        return redirect('users');
   }
}