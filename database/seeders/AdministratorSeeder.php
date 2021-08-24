<?php

namespace Database\Seeders;

use App\Models\administrator;
use Illuminate\Database\Seeder;

class AdministratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        administrator::factory(1)->create();
    }
}
