<?php

use Illuminate\Database\Seeder;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        // let's truncate our existing records to start from scratch
        // Article::truncate();

        $faker = \Faker\Factory::create();

        //add now, let's create a few article in our database
        for ($i = 0; $i < 50; $i++){
            Article::create([
                'title' => $faker->sentence,
                'body' => $faker->paragraph
            ]);
        }


    }
}
