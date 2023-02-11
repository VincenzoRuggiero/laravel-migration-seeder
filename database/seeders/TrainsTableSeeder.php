<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 50; $i++){
            $newTrain = new Train();
            $newTrain->company_name = $faker->word();
            $newTrain->departure_station = $faker->words(3, true);
            $newTrain->arrival_station = $faker->words(3, true);
            $newTrain->departure_time = $faker->dateTimeThisMonth('+14 days');
            $newTrain->arrival_time = $faker->dateTimeThisMonth('+14 days');
            $newTrain->train_number = $faker->bothify('??-####');
            $newTrain->number_of_cabs = $faker->randomNumber(1, true);
            $newTrain->in_time = $faker->boolean();
            $newTrain->cancelled = $faker->boolean();
            $newTrain->save();
        }
    }
}
