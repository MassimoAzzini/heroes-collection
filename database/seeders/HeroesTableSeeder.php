<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Hero;
use App\Models\Race;
use Faker\Generator as Faker;
use Illuminate\Support\Str;


class HeroesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)

    {
        for ($i = 0; $i < 100; $i++) {
            $hero = new Hero();
            $hero->name = $faker->words(3, true);
            $hero->race_id = Race::inRandomOrder()->first()->id;
            $hero->slug = $this->generateSlug($hero->name);
            $hero->height = $faker->randomFloat(2, 0, 999);
            $hero->weight = $faker->randomFloat(2, 0, 9999);
            $hero->background = $faker->paragraph();
            $hero->image = 'https://miro.medium.com/v2/resize:fit:1024/1*Xe_nttm4GmNuNASsxKG3gg.png';
            $hero->armor_class = $faker->numberBetween(10, 20);
            $hero->strength = $faker->numberBetween(3, 18);
            $hero->dexterity = $faker->numberBetween(3, 18);
            $hero->constitution = $faker->numberBetween(3, 18);
            $hero->intelligence = $faker->numberBetween(3, 18);
            $hero->wisdom = $faker->numberBetween(3, 18);
            $hero->charism = $faker->numberBetween(3, 18);
            // dump($hero);
            $hero->save();
        }
    }

    private function generateSlug($name)
    {
        $slug = Str::slug($name, '-');
        $original_slug = $slug;
        $exist = Hero::where('slug', $slug)->first();
        $c = 1;
        while ($exist) {
            $slug = $original_slug . '-' . $c;
            $exist = Hero::where('slug', $slug)->first();
            $c++;
        }
        return $slug;
    }
}
