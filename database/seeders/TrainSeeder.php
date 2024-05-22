<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Factory as Faker;

class TrainSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; i < 50; $i++) {
            Train::create([
                'azienda' => $faker->company,
                'stazione_partenza' => $faker->city,
                'stazione_arrivo' => $faker->city,
                'orario_partenza' => $faker->dateTimeBetween('now', '+1 week'),
                'orario_arrivo' => $faker->dateTimeBetween('+1 week', '+2 weeks'),
                'codice_treno' => $faker->unique()->numerify('TR###'),
                'numero_carrozze' => $faker->numberBetween(3, 12),
                'in_orario' => $faker->boolean,
                'cancellato' => $faker->boolean,
            ]);
        }
    }
}
