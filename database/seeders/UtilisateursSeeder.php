<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Utilisateurs;

class UtilisateursSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Utilisateurs::factory()->count(10)->create();
    }
}
