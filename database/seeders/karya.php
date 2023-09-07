<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class karya extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('karya')->insert([
            'deskripsi' => 'Tulisan yang menggambarkan suatu objek berdasarkan hasil pengamatan, perasaan, dan pengalaman penulisnya',
            'dokumentasi' => '-',
            'link_karya' => 'https://www.youtube.com/watch?v=aC6MJgsxgrk&t=1189s',
            'nama' => 'anisa',
            'id_karya' => '41', 
            'bidang' => 'Web', 
            'nim' => '36215539', 
            'id_dosen' => '21', 
            'id_admin' => '11', 
        ]) ;

        DB::table('karya')->insert([
            'deskripsi' => 'Tulisan yang menggambarkan suatu objek berdasarkan hasil pengamatan, perasaan, dan pengalaman penulisnya',
            'dokumentasi' => '-',
            'link_karya' => 'https://www.youtube.com/watch?v=aC6MJgsxgrk&t=1189s',
            'nama' => 'vincen',
            'id_karya' => '42', 
            'bidang' => 'network', 
            'nim' => '36215540', 
            'id_dosen' => '22', 
            'id_admin' => '12', 
        ]) ;
    }
}
