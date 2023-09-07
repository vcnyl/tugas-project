<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class admin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admin')->insert([
            'id_admin' => '11', 
            'nama' => 'syafa', 
            'password' => '123456', 
            'nip' => '333456', 
        ]) ;

        DB::table('admin')->insert([
            'id_admin' => '12', 
            'nama' => 'firbita', 
            'password' => '123456', 
            'nip' => '333467', 
        ]) ;
    }
}
