<?php

namespace Database\Seeders;

use App\Models\Empresa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
        DB::table('users')->insert(
            [
                'name' => 'Nicolas Colque Orellana',
                'email' => 'nicolas@gmail.com',
                'password' => Hash::make('123'),
            ]
        );

        $this->call([
            EmpresaSeeder::class,
            PrecioSeeder::class,
            AlumnoSeeder::class,
            PagoSeeder::class,
        ]);
    }
}
