<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategoryProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Data kategori yang ingin Anda tambahkan
        $categories = [
            ['name' => 'Hosting'],
            ['name' => 'VPS'],
            ['name' => 'Cloud'],
            ['name' => 'Domain'],
        ];

        // Masukkan data ke dalam tabel categories
        DB::table('category_products')->insert($categories);
    }
}