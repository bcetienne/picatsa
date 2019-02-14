<?php

use Illuminate\Database\Seeder;

class VignettesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Vignettes::class, 10)->create();
    }
}
