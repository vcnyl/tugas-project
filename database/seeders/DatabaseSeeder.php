<?php

namespace Database\Seeders;

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
        $this->call(admin::class);
        $this->call(mahasiswa::class);
        $this->call(dosen::class);
        $this->call(biodata::class);
        $this->call(karya::class);
        $this->call(prestasi::class);
        $this->call(pelatihan::class);
        
    }
}
