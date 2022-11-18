<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Author;
use Illuminate\Database\Seeder;
use App\Models\Book;
use App\Models\Jenjang;
use App\Models\Pendidikan;
use App\Models\Pengalaman;
use Faker\Provider\Lorem;
use GuzzleHttp\Promise\Create;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        for ($i = 1; $i <= 6; $i++) {
            Jenjang::factory()->create([
                'nama_jenjang' => "Jenjang $i"
            ]);
        }

        Pendidikan::factory()->create([
            'nama_pendidikan' => 'Pendidikan Dasar',
            'id_jenjang' => 1
        ]);

        Pendidikan::factory()->create([
            'nama_pendidikan' => 'Non Pendidikan ( Dengan PBK )',
            'id_jenjang' => 1
        ]);

        Pendidikan::factory()->create([
            'nama_pendidikan' => 'SMK',
            'id_jenjang' => 2
        ]);

        Pendidikan::factory()->create([
            'nama_pendidikan' => 'SMA',
            'id_jenjang' => 2
        ]);

        Pendidikan::factory()->create([
            'nama_pendidikan' => 'Pendidikan Dasar',
            'id_jenjang' => 2
        ]);

        Pendidikan::factory()->create([
            'nama_pendidikan' => 'D1 / SMK PLUS',
            'id_jenjang' => 3
        ]);

        Pendidikan::factory()->create([
            'nama_pendidikan' => 'SMK',
            'id_jenjang' => 3
        ]);

        Pendidikan::factory()->create([
            'nama_pendidikan' => 'SMA',
            'id_jenjang' => 3
        ]);

        Pendidikan::factory()->create([
            'nama_pendidikan' => 'Pendidikan Dasar',
            'id_jenjang' => 3
        ]);

        Pendidikan::factory()->create([
            'nama_pendidikan' => 'SMA',
            'id_jenjang' => 4
        ]);

        Pendidikan::factory()->create([
            'nama_pendidikan' => 'SMK',
            'id_jenjang' => 4
        ]);

        Pendidikan::factory()->create([
            'nama_pendidikan' => 'D1 / SMK PLUS',
            'id_jenjang' => 4
        ]);


        Pendidikan::factory()->create([
            'nama_pendidikan' => 'D2',
            'id_jenjang' => 4
        ]);


        Pendidikan::factory()->create([
            'nama_pendidikan' => 'SMA',
            'id_jenjang' => 5
        ]);

        Pendidikan::factory()->create([
            'nama_pendidikan' => 'SMK',
            'id_jenjang' => 5
        ]);


        Pendidikan::factory()->create([
            'nama_pendidikan' => 'D1 / SMK PLUS',
            'id_jenjang' => 5
        ]);


        Pendidikan::factory()->create([
            'nama_pendidikan' => 'D2 MINIMAL',
            'id_jenjang' => 5
        ]);


        Pendidikan::factory()->create([
            'nama_pendidikan' => 'D3 MINIMAL',
            'id_jenjang' => 5
        ]);


        Pendidikan::factory()->create([
            'nama_pendidikan' => 'D1 SIPIL',
            'id_jenjang' => 6
        ]);


        Pendidikan::factory()->create([
            'nama_pendidikan' => 'D2 SIPIL',
            'id_jenjang' => 6
        ]);


        Pendidikan::factory()->create([
            'nama_pendidikan' => 'D3 SIPIL',
            'id_jenjang' => 6
        ]);


        Pendidikan::factory()->create([
            'nama_pendidikan' => 'S1 UMUM',
            'id_jenjang' => 6
        ]);


        Pendidikan::factory()->create([
            'nama_pendidikan' => 'S1 SIPIL / S1 TERAPAN / D4 TERAPAN',
            'id_jenjang' => 6
        ]);

        Pengalaman::factory()->create([
            'nama_pengalaman' => 'Pendidikan Dasar Minimal 0 Tahun',
            'id_jenjang' => 1,
            'id_pendidikan' => 1
        ]);


        Pengalaman::factory()->create([
            'nama_pengalaman' => 'Non Pendidikan ( Dengan  PBK ) Minimal 2 Tahun',
            'id_jenjang' => 1,
            'id_pendidikan' => 2
        ]);


        Pengalaman::factory()->create([
            'nama_pengalaman' => 'SMK Minimal 0 Tahun',
            'id_jenjang' => 2,
            'id_pendidikan' => 3
        ]);

        Pengalaman::factory()->create([
            'nama_pengalaman' => 'SMA Minimal 0 Tahun',
            'id_jenjang' => 2,
            'id_pendidikan' => 4
        ]);


        Pengalaman::factory()->create([
            'nama_pengalaman' => 'Pendidikan Dasar Minimal 2 Tahun',
            'id_jenjang' => 2,
            'id_pendidikan' => 5
        ]);


        Pengalaman::factory()->create([
            'nama_pengalaman' => 'D1 / SMK Plus Minimal 0 Tahun',
            'id_jenjang' => 3,
            'id_pendidikan' => 6
        ]);

        Pengalaman::factory()->create([
            'nama_pengalaman' => 'SMK Minimal 3 Tahun',
            'id_jenjang' => 3,
            'id_pendidikan' => 7
        ]);

        Pengalaman::factory()->create([
            'nama_pengalaman' => 'SMA Minimal 4 Tahun',
            'id_jenjang' => 3,
            'id_pendidikan' => 8
        ]);

        Pengalaman::factory()->create([
            'nama_pengalaman' => 'Pendidikan Dasar Minimal 5 Tahun',
            'id_jenjang' => 3,
            'id_pendidikan' => 9
        ]);

        Pengalaman::factory()->create([
            'nama_pengalaman' => 'SMA Minimal 6 Tahun',
            'id_jenjang' => 4,
            'id_pendidikan' => 10
        ]);

        Pengalaman::factory()->create([
            'nama_pengalaman' => 'SMK Minimal 4 Tahun',
            'id_jenjang' => 4,
            'id_pendidikan' => 11
        ]);

        Pengalaman::factory()->create([
            'nama_pengalaman' => 'D1 / SMK Plus Minimal 2 Tahun',
            'id_jenjang' => 4,
            'id_pendidikan' => 12
        ]);

        Pengalaman::factory()->create([
            'nama_pengalaman' => 'D2 Minimal 0 Tahun',
            'id_jenjang' => 4,
            'id_pendidikan' => 13
        ]);

        Pengalaman::factory()->create([
            'nama_pengalaman' => 'SMA Minimal 12 Tahun',
            'id_jenjang' => 5,
            'id_pendidikan' => 14
        ]);

        Pengalaman::factory()->create([
            'nama_pengalaman' => 'SMK Minimal 10 Tahun',
            'id_jenjang' => 5,
            'id_pendidikan' => 15
        ]);

        Pengalaman::factory()->create([
            'nama_pengalaman' => 'D1 / SMK Plus Minimal 8 Tahun',
            'id_jenjang' => 5,
            'id_pendidikan' => 16
        ]);

        Pengalaman::factory()->create([
            'nama_pengalaman' => 'D2 Minimal 4 Tahun',
            'id_jenjang' => 5,
            'id_pendidikan' => 17
        ]);

        Pengalaman::factory()->create([
            'nama_pengalaman' => 'D3 Minimal 0 Tahun',
            'id_jenjang' => 5,
            'id_pendidikan' => 18
        ]);

        Pengalaman::factory()->create([
            'nama_pengalaman' => 'D1 SIPIL Minimal 12 Tahun',
            'id_jenjang' => 6,
            'id_pendidikan' => 19
        ]);

        Pengalaman::factory()->create([
            'nama_pengalaman' => 'D2 SIPIL Minimal 8 Tahun',
            'id_jenjang' => 6,
            'id_pendidikan' => 20
        ]);

        Pengalaman::factory()->create([
            'nama_pengalaman' => 'D3 SIPIL Minimal 4 Tahun',
            'id_jenjang' => 6,
            'id_pendidikan' => 21
        ]);

        Pengalaman::factory()->create([
            'nama_pengalaman' => 'S1 UMUM Minimal 1 Tahun',
            'id_jenjang' => 6,
            'id_pendidikan' => 22
        ]);

        Pengalaman::factory()->create([
            'nama_pengalaman' => 'S1 SIPIL / S1 TERAPAN / D4 TERAPAN Minimal 0 Tahun',
            'id_jenjang' => 6,
            'id_pendidikan' => 23
        ]);
    }
}