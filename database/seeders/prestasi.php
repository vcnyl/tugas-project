<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class prestasi extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prestasi')->insert([
            'sertifikat' => 'vsga jwd',
            'bidang' => 'web',
            'tahun_diperoleh' => '2023',
            'nim' => '36215539',
            'id_prestasi' => '61',
            'nama' => 'anisa',
            'id_dosen' => '21', 
            'id_admin' => '11',
        ]) ;
            
        DB::table('prestasi')->insert([
            'sertifikat' => 'vsga jna',
            'bidang' => 'network',
            'tahun_diperoleh' => '2023',
            'nim' => '36215540',
            'id_prestasi' => '62',
            'nama' => 'vincen',
            'id_dosen' => '22', 
            'id_admin' => '12',
        ]) ;
    }
}
