<?php

namespace Database\Seeders;

use App\Models\Categories;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        Categories::truncate();
        Schema::enableForeignKeyConstraints();

        $data = [
            'mistery', 'romance', 'action', 'fantasy',
        ];

        foreach ($data as $d) {
            Categories::insert([
                'name' => $d,
            ]);
        }
    }
}
