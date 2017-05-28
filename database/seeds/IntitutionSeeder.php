<?php

use Illuminate\Database\Seeder;

class IntitutionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Intitution::class, 15)->create();
    }
}
