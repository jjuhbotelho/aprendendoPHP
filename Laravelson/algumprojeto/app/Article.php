<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $guarded = [];
//    protected $fillable = ['tittle', 'excerpt', 'body'];

//  Para situações em que eu não quero que busque apenas pelo Id e sim talvez pelo Slug
//    public function getRouteKeyName()
//    {
//        return 'slug';//Article::where('slug', $article)->first()
//    }
}
