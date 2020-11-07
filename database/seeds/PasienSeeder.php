<?php

use App\Models\Registrasi\Pasien;
use Illuminate\Database\Seeder;

class PasienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Pasien::class, 50)->create();
    }
}
