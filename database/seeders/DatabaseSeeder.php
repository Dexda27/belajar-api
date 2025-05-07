<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use App\Models\matakuliah;
use App\Models\nilai;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Mahasiswa::factory(100)->create();
        matakuliah::create([
            'idmk' => '1',
            'mk' => 'sistem informasi pariwisata'
        ]);

        $data = Mahasiswa::all();
        foreach ($data as $mahasiswa) {
            nilai::create([
                'nim' => $mahasiswa->nim,
                'idmk' => 1,
                'nilai' => rand(60, 100)
            ]);

        }
    }
}
