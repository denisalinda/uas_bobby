<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\DosenModel;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $in['nama_dosen'] = 'Pak Andri';
        $in['nip'] = '14.1.11';
        $in['foto_dosen'] = 'foto';
        DosenModel::create($in);
    }
}
