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
                'name' => Category::CATEGORY_ARRAY[Category::CATEGORY_POLYCLINIC],
                'key' => Category::CATEGORY_POLYCLINIC,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => Category::CATEGORY_ARRAY[Category::CATEGORY_DENTOMAXILLOFACIAL],
                'key' => Category::CATEGORY_DENTOMAXILLOFACIAL,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => Category::CATEGORY_ARRAY[Category::CATEGORY_DERMATOLOGY],
                'key' => Category::CATEGORY_DERMATOLOGY,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => Category::CATEGORY_ARRAY[Category::CATEGORY_VACCINATION],
                'key' => Category::CATEGORY_VACCINATION,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
