<?php

namespace Database\Seeders;

use App\Models\Race;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;


class RacesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $data = [
            'Elves',
            'Human',
            'Orc',
            'Draconid',
            'Halfling',
            'Dwarf',
            'Half-elves'
        ];

        foreach ($data as $race) {
            $new_race = new Race();

            $new_race->name = $race;
            $new_race->slug = Race::generateSlug($new_race->name);
            $new_race->description = $faker->paragraph();
            $new_race->mod_for = random_int(-3, 3);
            $new_race->mod_des = random_int(-3, 3);
            $new_race->mod_cos = random_int(-3, 3);
            $new_race->mod_int = random_int(-3, 3);
            $new_race->mod_sag = random_int(-3, 3);
            $new_race->mod_car = random_int(-3, 3);

            $new_race->save();
        }
    }
}
