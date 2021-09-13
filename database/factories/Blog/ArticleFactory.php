<?php

namespace Database\Factories\Blog;

use App\Models\Blog\Article;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Blog\Author;
use App\Models\Blog\Category;



class ArticleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Article::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=>$this->faker->sentence,
            'body'=>$this->faker->paragraph(15, false),
            'description'=>$this->faker->paragraph(),
            'published_at'=>$this->faker->dateTimeBetween('-30 years','+30 years'),
            'image'=>$this->faker->image('storage/app/public', 640, 480, null, false),
            'author_id'=>Author::factory(),
            'category_id'=>Category::factory(),
            'created_at' => now(),
        ];
    }
}
