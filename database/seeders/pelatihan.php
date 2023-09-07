<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class pelatihan extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pelatihan')->insert([
            'id_pelatihan' => '51',
            'bidang' => 'web',
            'deskripsi' => 'penjelasan yang melibatkan seluruh panca indera, penglihatan, pendengaran, penciuman, sampai perabaan.',
            'nama' => 'anisa',
            'tahun_pelaksanaan' => '2023',  
            'nim' => '36215539',
            'id_admin' => '12', 
            'id_dosen' => '22', 
            'sertifikat' => 'vsga jwd', 
        ]) ;

        DB::table('pelatihan')->insert([
            'id_pelatihan' => '52',
            'bidang' => 'network',
            'deskripsi' => 'penjelasan yang melibatkan seluruh panca indera, penglihatan, pendengaran, penciuman, sampai perabaan.',
            'nama' => 'vincen',
            'tahun_pelaksanaan' => '2023',  
            'nim' => '36215540',
            'id_admin' => '12', 
            'id_dosen' => '22', 
            'sertifikat' => 'vsga jna', 
        ]) ;
    }
}
