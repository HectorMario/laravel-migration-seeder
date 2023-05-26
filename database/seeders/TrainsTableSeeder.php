<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Train;
class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $train = new Train();
            $train->azienda = $faker->company;
            $train->stazione_di_partenza = $faker->city;
            $train->stazione_di_arrivo = $faker->city;
            $train->numero_carroze = $faker->numberBetween(1, 10);
            $train->in_orario = $faker->dateTimeBetween('now', '+7 days');
            $train->cancellato = $faker->boolean;
            $train->save();
        }
    }
}

