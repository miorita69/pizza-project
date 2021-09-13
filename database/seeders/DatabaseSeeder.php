<?php

namespace Database\Seeders;

use App\Models\Blog\Author;
use App\Models\Blog\Article;
use App\Models\Blog\Category;
use Illuminate\Database\Seeder;
use Illuminate\Filesystem\Filesystem;

class DatabaseSeeder extends Seeder
{
    private $filesystem;
    public function __construct(Filesystem $filesystem)
    {
        $this->filesystem = $filesystem;
    }


    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->filesystem->cleanDirectory('storage/app/public');

        $categories = Category::factory()->count(2)->create();
        foreach ($categories as $category) {
            $authors = Author::factory()->count(2)->create();
            foreach ($authors as $author) {
                Article::factory(2)->create(['category_id'=>$category->id, 'author_id'=>$author->id]);
            }
        }
    }
}
