<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class dosen extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dosen')->insert([
            'id_dosen' => '21', 
            'nama' => 'fauzan', 
            'password' => '123456', 
            'nip' => '333489', 
        ]) ;

        DB::table('dosen')->insert([
            'id_dosen' => '22', 
            'nama' => 'helwin', 
            'password' => '123456', 
            'nip' => '333488', 
        ]) ;
    }
}
