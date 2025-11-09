<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Makanan'],
            ['name' => 'Minuman'],
            ['name' => 'Snack'],
            ['name' => 'Rokok'],
            ['name' => 'Kebutuhan Rumah Tangga'],
            ['name' => 'Elektronik'],
            ['name' => 'Pakaian'],
            ['name' => 'Obat-obatan'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}