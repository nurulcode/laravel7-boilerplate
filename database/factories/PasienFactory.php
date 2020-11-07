<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(App\Models\Registrasi\Pasien::class, function (Faker $faker) {
    return [
        'nomor_identitas'    => $faker->unique()->swiftBicNumber,
        'tanggal_registrasi' => $faker->date,
        'nama'               => $faker->name,
        'tempat_lahir'       => $faker->city,
        'tanggal_lahir'      => $faker->date,
        'alamat'            => $faker->address,
        'telepon'           => $faker->phoneNumber,
        'nama_ayah'         => $faker->name('male'),
        'nama_ibu'          => $faker->name('female'),
        'alamat_keluarga'   => $faker->address,
        'telepon_keluarga'  => $faker->phoneNumber,
        'nama_pasangan'     => $faker->name,
        'created_by'        => 1
    ];
});
