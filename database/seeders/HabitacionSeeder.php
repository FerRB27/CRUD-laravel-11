<?php

namespace Database\Seeders;

use App\Models\Habitacion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HabitacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Habitacion::create([
            'codigo_habitacion' => 'dor001'
        ]);
        Habitacion::create([
            'codigo_habitacion' => 'dor002'
        ]);
        Habitacion::create([
            'codigo_habitacion' => 'dor003'
        ]);
        Habitacion::create([
            'codigo_habitacion' => 'dor004'
        ]);
        Habitacion::create([
            'codigo_habitacion' => 'dor005'
        ]);
    }
}
