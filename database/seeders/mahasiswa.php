<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class mahasiswa extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mahasiswa')->insert([
            'nim' => '36215539', 
            'email' => 'anisa@gmail.com', 
            'password' => '123456', 
            'no_telp' => '08576152', 
            'nama' => 'anisa', 
            'alamat' => 'banyuwangi', 
        ]) ;

        DB::table('mahasiswa')->insert([
            'nim' => '36215540', 
            'email' => 'vincen@gmail.com', 
            'password' => '123456', 
            'no_telp' => '085763421', 
            'nama' => 'vincen', 
            'alamat' => 'tegaldlimo', 
        ]) ;
    }
}
