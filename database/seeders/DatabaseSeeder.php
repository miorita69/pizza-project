<?php

namespace Database\Seeders;

use App\Models\Blog\Author;
use App\Models\Blog\Article;
use App\Models\Blog\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $categories = Category::factory()->count(10)->create();
        foreach ($categories as $category) {
             $authors = Author::factory()->count(2)->create();
             foreach ($authors as $author) {
                     Article::factory(10)->create(['category_id'=>$category->id, 'author_id'=>$author->id]);
             }
         }
    }
}
