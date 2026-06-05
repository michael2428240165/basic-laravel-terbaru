<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Fakultas;

class FakultasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fakultas = [
            [
                'nama_fakultas' => 'Fakultas Teknik',
                'nama_dekan'    => 'Lmao',
            ],
            [
                'nama_fakultas' => 'Fakultas Teknik2',
                'nama_dekan'    => 'Lmao2',
            ],
            [
                'nama_fakultas' => 'Fakultas Teknik3',
                'nama_dekan'    => 'Lmao3',
            ],
        ];

        foreach ($fakultas as $data) {
            Fakultas::create($data);
        }
    }
}   