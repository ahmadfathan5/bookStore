<?php

namespace Database\Seeders;

use App\Models\Metode;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class MetodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        Metode::truncate();
        Schema::enableForeignKeyConstraints();

        $data = [
            'BRI', 'BSI', 'Mandiri',
        ];

        foreach ($data as $d) {
            Metode::insert([
                'name' => $d,
            ]);
        }
    }
}
