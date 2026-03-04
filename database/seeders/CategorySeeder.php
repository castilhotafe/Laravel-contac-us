<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $seedCategories = [
            [
                'id' => 1,
                'name' => 'unknown',
                'description' => 'default category for any contact not allocated a category by the user',
                'code' => 'UNK'
            ],
            [
                'id'=>1000,
                'name' => 'work',
                'description' => 'work colleagues',
                'code' => 'WRK'
            ],
            [
                'name' => 'friends',
                'description' => 'People who are mates',
                'code' => 'FRND'
            ],
            [
                'name' => 'soccer',
                'description' => 'soccer teams',
                'code' => 'SCR'
            ],
            [
                'name' => 'family',
                'description' => 'family members',
                'code' => 'FML'
            ],
            [
                'name' => 'blocked',
                'description' => 'blocked contacts',
                'code' => 'BLCK'
            ],
        ];

        foreach ($seedCategories as $category) {
            Category::create($category);
        }
    }
}
