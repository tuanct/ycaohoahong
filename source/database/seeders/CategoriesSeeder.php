<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->truncate();
        DB::table('categories')->insert([
            [
                'name' => Category::TYPE_POST,
                'key' => Category::TYPE_POST,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => Category::TYPE_BANNER,
                'key' => Category::TYPE_BANNER,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => Category::TYPE_NEWS,
                'key' => Category::TYPE_NEWS,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
