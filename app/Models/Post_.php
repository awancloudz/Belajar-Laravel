<?php

namespace App\Models;

class Post 
{
    private static $blog_post = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Awan A",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel deleniti culpa dolore deserunt numquam molestias corrupti iure consequuntur rerum tempora! Unde, modi molestiae. Ullam quis neque eaque, quos impedit corrupti tempore, a ipsa voluptates laborum nemo doloremque iste, saepe at voluptatem doloribus nulla odio pariatur cum temporibus explicabo eum autem."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Gibran J",
            "body" => "a ipsa voluptates laborum nemo doloremque iste, saepe at voluptatem doloribus nulla odio pariatur cum temporibus explicabo eum autem.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel deleniti culpa dolore deserunt numquam molestias corrupti iure consequuntur rerum tempora! Unde, modi molestiae. Ullam quis neque eaque, quos impedit corrupti tempore"
        ]
    ];

    public static function all(){
        return collect(self::$blog_post);
    }

    public static function find($slug){
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
