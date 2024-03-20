<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->insert([ // Inserción de un libro
            'title' => 'The Catcher in the Rye', // Título del libro
            'published_year' => 1951, // Año de publicación del libro
        ]);
        DB::table('books')->insert([
            'title' => 'To Kill a Mockingbird',
            'published_year' => 1960,
        ]);
        DB::table('books')->insert([
            'title' => '1984',
            'published_year' => 1949,
        ]);
    }
}
