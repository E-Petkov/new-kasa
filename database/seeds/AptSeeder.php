<?php

use App\Apt;
use Illuminate\Database\Seeder;

class AptSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Apt::class, 21)->create();

    }
}
