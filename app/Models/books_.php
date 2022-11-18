<?php

namespace App\Models;


class books
{
    private static $books = [
        [
            "id" => 1,
            "judul" => "Sesuk",
            "halaman" => 329,
            "penulis" => "Tere Liye",
            "sinopsis" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet nostrum enim, provident, consequatur facere harum ad, quas quia eos reiciendis dicta soluta non."

        ],
        [
            "id" => 2,
            "judul" => "Suluh Rindu",
            "halaman" => 594,
            "penulis" => "Habiburrahman El Shirazy",
            "sinopsis" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit reprehenderit alias voluptatem facilis? Iste ad earum sed rem officiis perferendis ratione provident, necessitatibus illo, aspernatur nesciunt molestiae saepe, minima laudantium."
        ]
    ];

    public static function getBooks()
    {
        return collect(self::$books);
    }

    public static function getBook($id)
    {
        $books = static::getBooks();

        return $books->firstWhere('id', $id);
    }
}
