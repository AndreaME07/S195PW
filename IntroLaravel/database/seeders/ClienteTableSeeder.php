<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClienteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('clientes')->insert([
            [
                'nombre'=>'Ivan',
                'apellido'=>'Guerra',
                'correo'=>'iiguerra@gmail.com',
                'telefono'=>'1234567897',
            ],
            [
                'nombre'=>'Isay',
                'apellido'=>'Lopez',
                'correo'=>'iilopez@gmail.com',
                'telefono'=>'987654321',
            ],
            [
                'nombre'=>'Andrea',
                'apellido'=>'Medina',
                'correo'=>'andymedina@gmail.com',
                'telefono'=>'567891234',
            ]
        ]);
    }
}
