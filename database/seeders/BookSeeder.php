<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;
use App\Models\Book;
use Illuminate\Support\Str;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $responce = Http::get('https://openlibrary.org/search.json?q=web');

        // $books = $responce->json()['docs'];
        // foreach($books as $book){
        //     $book = (object) $book;
        //     Book::insert([
        //         'title' => $book->title,
        //         'slug' => Str::slug('$book->title'.rand(0,100).'-'.rand(100,200)),
        //         'author' => isset($book->author_name[0])?$book->author_name[0]:'tasnimul hasan',
        //         'category' => $book->type,
        //         'language' => isset($book->language[0])?$book->language[0]:'bangla',
        //         'country' => isset($book->contributor[0])?$book->contributor[0]:'bangladesh',
        //         'edition' => isset($book->edition_key[0])?$book->edition_key[0]:'1343',
        //         'pages' => $book->ratings_count,
        //         'summary' =>isset($book->printdisabled_s)?$book->printdisabled_s:'spmething to do nothin',
        //         'image' => `covers.openlibrary.org/b/id/`.(isset($book->cover_i)?$book->cover_i:8461797) .`-M.jpg`,
        //         'quantity' => $book->ratings_count_3,
        //         'taka' => $book->readinglog_count,
        //         'status' => rand(0,1),
        //     ]);

        // }

        Book::insert([
            'title' =>"tasnimul hasan one thing is dsk",
            'slug' => "tasnimul-hasan",
            'author' => "hasan",
            'category' => "test",
            'language' =>"bangla",
            'country' =>"bangladesh",
            'edition' =>"1st",
            'pages' =>300,
            'summary' =>"tasnimul hasan one thing is dsk tasnimul hasan one thing is dsk tasnimul hasan one thing is dsk tasnimul hasan one thing is dsk",
            'image' =>'default.png',
            'quantity' =>3,
            'taka' =>350,
            'status' =>0,
        ]);
    }
}

