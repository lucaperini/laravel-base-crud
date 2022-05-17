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
        for ($i=0; $i < 50; $i++) {

        $comic = new Comic();
        $comic->title = $faker->word();
        $comic->description = $faker->paragraph(10);
        $comic->thumb = $faker->imageUrl(360, 360, 'animals', true, 'dogs');
        $comic->price = $faker->randomFloat(2);
        $comic->series =$faker->word();
        $comic->sale_date =$faker->date();
        $comic->type =$faker->word();
        $comic->save();
        }


    }
}

