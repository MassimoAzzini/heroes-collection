<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $datas = [
            [
                'name' => 'Athletics',
                'peculiar_skill' => 'FOR'
            ],
            [
                'name' => 'Acrobatics',
                'peculiar_skill' => 'DES'
            ],
            [
                'name' => 'Sleight of Hand',
                'peculiar_skill' => 'DES'
            ],
            [
                'name' => 'Stealth',
                'peculiar_skill' => 'DES'
            ],
            [
                'name' => 'Arcana',
                'peculiar_skill' => 'INT'
            ],
            [
                'name' => 'History',
                'peculiar_skill' => 'INT'
            ],
            [
                'name' => 'Insight',
                'peculiar_skill' => 'SAG'
            ],
            [
                'name' => 'Perception',
                'peculiar_skill' => 'SAG'
            ],
            [
                'name' => 'Deception',
                'peculiar_skill' => 'CAR'
            ],
            [
                'name' => 'Intimidation',
                'peculiar_skill' => 'CAR'
            ],
            [
                'name' => 'Concentration',
                'peculiar_skill' => 'COS'
            ]
        ];

        foreach ($datas as $skill) {
            $new_skill = new Skill();

            $new_skill->name = $skill['name'];
            $new_skill->slug = Skill::generateSlug($new_skill->name);
            $new_skill->description = $faker->paragraph();
            $new_skill->peculiar_skill = $skill['peculiar_skill'];

            $new_skill->save();
        }
    }
}
