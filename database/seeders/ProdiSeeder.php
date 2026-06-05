<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Fakultas;
use App\Models\Prodi;

class ProdiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $prodis = [
            [
                'nama_prodi'   => 'Pendidikan',
                'alias_prodi'  => 'Lmao',
                'nama_kaprodi' => 'Cihuy',
            ],
            [
                'nama_prodi'   => 'Pendidikan2',
                'alias_prodi'  => 'Lmao2',
                'nama_kaprodi' => 'Cihuy2',
            ],
            [
                'nama_prodi'   => 'Pendidikan3',
                'alias_prodi'  => 'Lmao3',
                'nama_kaprodi' => 'Cihuy3',
            ],
        ];

        foreach ($prodis as $prodi) {
            $prodi['fakultas_id'] = Fakultas::inRandomOrder()->first()->id;

            Prodi::create($prodi);
        }
    }
}