<?php

class Post
{

    public $title;
    public $published;
    public $author;

    public function __construct($title, $author, $published)
    {
        $this->title = $title;
        $this->published = $published;
        $this->author = $author;
    }
}

$posts = [
    new Post('My First Post', 'Chico',true),
    new Post('My Second Post', 'Chumarrento' ,true),
    new Post('My Third Post', 'Edu Kowalski' ,true),
    new Post('My Fourth Post', 'Edu Hiromeiro' ,false),
];

//$unpublishedPosts = array_filter($posts, function ($post) {
//
//    return ! $post->published;
//});
//
//$publishedPosts = array_filter($posts, function ($post) {
//
//    return $post->published;
//});


//Duas formas de trazer o título do elemento da Array com array_map
//$modified = array_map(function ($post) {
//
//    return ['tittle' => $post->title];
//
//}, $posts);
//
//$title = array_map(function($post){
//    return $post->title;
//}, $posts);

//Outra forma de trazer o título usando outro método
//$titles = array_column($posts, 'title');

//foreach ($posts as $index=>$post) {
//
//    $posts[$index] = (array) $post;
//
//}

$author = array_column($posts, 'author', 'title');

var_dump($author);