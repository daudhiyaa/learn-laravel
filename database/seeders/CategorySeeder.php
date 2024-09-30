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
        // Category::factory(10)->create();

        Category::create(['name' => 'Web Development', 'slug' => 'web-development']);
        Category::create(['name' => 'Mobile Development', 'slug' => 'mobile-development']);
        Category::create(['name' => 'Graphic Design', 'slug' => 'graphic-design']);
        Category::create(['name' => 'Data Science', 'slug' => 'data-science']);
        Category::create(['name' => 'Cybersecurity', 'slug' => 'cybersecurity']);
        Category::create(['name' => 'Machine Learning', 'slug' => 'machine-learning']);
        Category::create(['name' => 'Artificial Intelligence', 'slug' => 'artificial-intelligence']);
        Category::create(['name' => 'Digital Marketing', 'slug' => 'digital-marketing']);
        Category::create(['name' => 'Blockchain Technology', 'slug' => 'blockchain-technology']);
        Category::create(['name' => 'Cloud Computing', 'slug' => 'cloud-computing']);
    }
}
