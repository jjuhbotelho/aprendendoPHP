<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;
use App\Post;

class PostController extends Controller
{
    public function show($slug)
    {
        return view('post', [
            'post' => Post::where('slug', $slug)->firstOrFail()
        ]);
    }
}
