<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Coffee;
class CoffeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Coffee::Factory(500)-> Create();
    }
}
