<?php

use App\Ym;
use Illuminate\Database\Seeder;

class YmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Ym::class, 1)->create();

    }
}
