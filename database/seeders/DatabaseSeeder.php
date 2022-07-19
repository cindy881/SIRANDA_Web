<?php

namespace Database\Seeders;

use App\Models\Desakel;
use App\Models\Kecamatan;
use App\Models\User;
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
        // \App\Models\User::factory(10)->create();
        $user = [
            [
                'name' => 'Admin',
                'email' => 'admin@cindy.com',
                'is_admin' => '1',
                'password' => bcrypt('11111111'),
            ],
            [
                'name' => 'User',
                'email' => 'user@cindy.com',
                'is_admin' => '0',
                'password' => bcrypt('11111111'),
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }

        $kecamatan = [
            [
                'nama_kec' => 'Tuban'
            ],
            [
                'nama_kec' => 'Palang'
            ]
        ];

        foreach ($kecamatan as $key => $value) {
            Kecamatan::create($value);
        }

        $desakel = [
            [
                'nama_desakel' => 'Kutorejo',
                'fk_kec' => 1
            ],
            [
                'nama_desakel' => 'Sukolilo',
                'fk_kec' => 1
            ],
            [
                'nama_desakel' => 'Baturetno',
                'fk_kec' => 1
            ],
            [
                'nama_desakel' => 'Ronggomulyo',
                'fk_kec' => 1
            ],
            [
                'nama_desakel' => 'Doromukti',
                'fk_kec' => 1
            ],
            [
                'nama_desakel' => 'Semanding',
                'fk_kec' => 1
            ],
            [
                'nama_desakel' => 'Palang',
                'fk_kec' => 2
            ],
            [
                'nama_desakel' => 'Glodog',
                'fk_kec' => 2
            ],
            [
                'nama_desakel' => 'Tasikmadu',
                'fk_kec' => 2
            ],
            [
                'nama_desakel' => 'Panyuran',
                'fk_kec' => 2
            ],
            [
                'nama_desakel' => 'Kradenan',
                'fk_kec' => 2
            ],
            [
                'nama_desakel' => 'Karangagung',
                'fk_kec' => 2
            ],
        ];

        foreach ($desakel as $key => $value) {
            Desakel::create($value);
        }
    }
}
