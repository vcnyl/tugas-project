<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class biodata extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('biodata')->insert([
            'id_biodata' => '31',
            'nim' => '36215539',
            'pengalaman_kerja' => '-', 
            'foto_profile' => '-', 
            'profile_singkat' => 'riwayat hidup seseorang baik berupa tokoh pahlawan, artis atau yang lainnya, yang ditulis secara singkat oleh orang lain', 
            'skill' => 'dapat membuat Web', 
            'riwayat_pendidikan' => 'SMK', 
        ]) ;

        DB::table('biodata')->insert([
            'id_biodata' => '32',
            'nim' => '36215540',
            'pengalaman_kerja' => '-', 
            'foto_profile' => '-', 
            'profile_singkat' => 'yang ditulis secara singkat oleh orang lain', 
            'skill' => 'jaringan', 
            'riwayat_pendidikan' => 'SMK', 
        ]) ;
    }
}
