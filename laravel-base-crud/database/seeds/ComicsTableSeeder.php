<?php

use Illuminate\Database\Seeder;
use App\Comic;
use Faker\Generator as Faker;


class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 200; $i++) {

        $newComic = new Comic();
        $newComic->title = $faker->word();
        $newComic->description = $faker->paragraph(10);
        $newComic->thumb = $faker->imageUrl(360, 360, 'animals', true, 'dogs');
        $newComic->price = $faker->randomFloat(1, 20, 30);
        $newComic->series =$faker->word();
        $newComic->sale_date =$faker->date();
        $newComic->type =$faker->word();
        $newComic->save();
        }


    }
}

