<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('alumnos')->insert([
            [
                'name' => 'Mateo',
                'lastname' => 'Primero',
                'email' => 'mateo@gmail.com',
                'state' => 'Paid',
                'peruvian' => true,
                'assistance' => false,
                'phone' => 71111111,
                'empresa_id' => 1,
            ],
            [
                'name' => 'Marcos',
                'lastname' => 'Segundo',
                'email' => 'marcos@gmail.com',
                'state' => 'Pending',
                'peruvian' => false,
                'assistance' => true,
                'phone' => 72222222,
                'empresa_id' => 2,
            ],
            [
                'name' => 'Juan',
                'lastname' => 'Tercero',
                'email' => 'juan@gmail.com',
                'state' => 'Paid',
                'peruvian' => true,
                'assistance' => false,
                'phone' => 73333333,
                'empresa_id' => 3,
            ],
        ]);
    }
}
