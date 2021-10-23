<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\Hash;

use Illuminate\Database\Seeder;
use App\Models\Santri;
use App\Models\Pengurus;
use App\Models\Buku;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Santri::factory(10)->create();

        $password = Hash::make("pengurus123");
        Pengurus::create([
            "nama_pengurus"=>"admin",
            "gender"=>"Laki-Laki",
            "hp"=>"08231457897",
            "email"=>"admin@gmail.com",
            "password"=>$password,
            "aktif"=>"Aktif"

        ]);
        Buku::factory(20)->create();

    }
}
