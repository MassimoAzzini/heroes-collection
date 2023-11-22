<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Character;
use Faker\Generator as Faker;
use Illuminate\Support\Str;


class CharactersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)

    {
        for ($i=0; $i < 100; $i++){
            $character = new Character();
            $character->name = $faker->words(3, true);
            $character->slug = $this->generateSlug($character->name);
            $character->height = $faker->randomFloat(2,0,999);
            $character->weight = $faker->randomFloat(2,0,9999);
            $character->background = $faker->paragraph();
            $character->image = 'https://miro.medium.com/v2/resize:fit:1024/1*Xe_nttm4GmNuNASsxKG3gg.png';
            $character->armor_class = $faker->numberBetween(10,20);
            $character->strength = $faker->numberBetween(3,18);
            $character->dexterity = $faker->numberBetween(3,18);
            $character->constitution = $faker->numberBetween(3,18);
            $character->intelligence = $faker->numberBetween(3,18);
            $character->wisdom = $faker->numberBetween(3,18);
            $character->charism = $faker->numberBetween(3,18);
            $character->save();


        }
    }

    private function generateSlug($name){
        $slug = Str::slug($name, '-');
        $original_slug = $slug;
        $exist = Character::where('slug', $slug)->first();
        $c = 1;
        while($exist){
            $slug = $original_slug. '-'. $c;
            $exist = Character::where('slug', $slug)->first();
            $c++;
        }
        return $slug;
    }

}
