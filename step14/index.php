<?php 

require 'functions.php';

class Post {
    public $title;
    public $author;
    public $published;

    public function __construct($title, $author, $published)
    {
        $this->title = $title;
        $this->author = $author;
        $this->published = $published;
    }   
}

$posts = [
    new Post('My first post', 'Mihai g' ,true),
    new Post('My second post', 'Mihai g',true),
    new Post('My third post', 'Mihai f',true),
    new Post('My fourth post', 'Mihai d',true),
    new Post('My fifth post', 'Mihai s',false)
];



// $unpublishedPost = array_filter($posts, function($post){
//     return !$post->published;
// });


// $publishedPost = array_filter($posts, function($post){
//     return $post->published;
// });

// $modified = array_map( function($post) {
//     $post->published = true;

//     return $post;
// }, $posts);

// foreach($posts as $post) {
//     $post->published = true;
// }

// $modified = array_map( function($post) {
//     return (array) $post;
// }, $posts);

// $modified = array_map( function($post) {
//     return ['title'=>$post->title];
// }, $posts);

// $titles = array_map(function($post){
//     return $post->title;
// }, $posts);

$titles = array_column($posts, 'author', 'title');


dd($titles);

