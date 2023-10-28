<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            'title' => 'Mariposa',
            'author' => 'Luluk Hf',
            'year' => '2018',
            'publisher' => 'Penerbit Buku',
            'city' => 'Jakarta',
            'cover' => 'Cover.jpg',
            'bookshelf_id' => 1, 
            'category_id' => 1,
        ]);
    }
}
