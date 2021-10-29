<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FormationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("formations")->insert([
            ["libelle" => "DATA-IA"],
            ["libelle" => "WEB-MOBILE"],
            ["libelle" => "REF-DIGITAL"],
        ]);
    }
}
