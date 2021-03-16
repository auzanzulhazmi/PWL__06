<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnggotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('anggotas')->insert([
            'nim' => '1941720009',
            'nama' => 'Dandi Agung S.',
            'absen' => '04',
            'foto' => 'dandi.jfif'
        ]);

        DB::table('anggotas')->insert([
            'nim' => '1941720110',
            'nama' => 'Auzan Ihtifazuddin',
            'absen' => '03',
            'foto' => 'auzan.jfif'
        ]);
    }
}
