<?php

namespace Database\Seeders;

use App\Models\crypto;
use Illuminate\Database\Seeder;

class CryptoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        crypto::factory(300)->create();
    }
}
