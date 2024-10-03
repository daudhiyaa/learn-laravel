<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Web Development',
            'slug' => 'web-development',
            'color' => 'red'
        ]);
        Category::create([
            'name' => 'Mobile Development',
            'slug' => 'mobile-development',
            'color' => 'blue'
        ]);
        Category::create([
            'name' => 'Graphic Design',
            'slug' => 'graphic-design',
            'color' => 'green'
        ]);
        Category::create([
            'name' => 'Data Science',
            'slug' => 'data-science',
            'color' => 'yellow'
        ]);
        Category::create([
            'name' => 'Cybersecurity',
            'slug' => 'cybersecurity',
            'color' => 'aqua'
        ]);
        Category::create([
            'name' => 'Machine Learning',
            'slug' => 'machine-learning',
            'color' => 'purple'
        ]);
        Category::create([
            'name' => 'Artificial Intelligence',
            'slug' => 'artificial-intelligence',
            'color' => 'pink'
        ]);
        Category::create([
            'name' => 'Digital Marketing',
            'slug' => 'digital-marketing',
            'color' => 'emerald'
        ]);
        Category::create([
            'name' => 'Blockchain Technology',
            'slug' => 'blockchain-technology',
            'color' => 'orange'
        ]);
        Category::create([
            'name' => 'Cloud Computing',
            'slug' => 'cloud-computing',
            'color' => 'rose'
        ]);
    }
}
