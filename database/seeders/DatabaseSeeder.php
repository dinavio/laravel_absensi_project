<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Guru;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;

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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        Guru::create([
            'nip'=>'1234890',
            'name'=>'Kasturi',
            'email'=>'kasti@gmail.com',
            'username'=>'kastu',
            'jk'=>'Laki-laki',
            'alamat'=>'Baureno',
            'kode_guru'=>'14'
        ]);

        Guru::factory(3)->create();
    }   
}
