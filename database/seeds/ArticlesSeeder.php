<?php

use Illuminate\Database\Seeder;

use Faker\Generator as Faker;
use App\Article;

class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++){
        $newArticle = new Article();
        $newArticle->author = $faker->lastname();
        $newArticle->title = $faker->sentence();
        $newArticle->body = $faker->paragraphs();
        $newArticle->save();
        }
    }
}