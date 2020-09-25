<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $guarded = [];

    public function path()
    {
        return route('articles.show', $this);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    //    protected $fillable = ['title', 'excerpt', 'body'];

    //  Para situações em que eu não quero que busque apenas pelo Id e sim talvez pelo Slug
    //    public function getRouteKeyName()
    //    {
    //        return 'slug';//Article::where('slug', $article)->first()
    //    }
}
