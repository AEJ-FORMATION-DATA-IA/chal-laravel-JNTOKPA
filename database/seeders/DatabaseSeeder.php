<?php

namespace Database\Seeders;

use App\Models\Apprenant;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Apprenant::factory(10)->create();
        //$this->call(FormationsTableSeeder::class);
    }
}
