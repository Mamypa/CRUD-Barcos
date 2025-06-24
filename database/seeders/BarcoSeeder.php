<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Barco;

class BarcoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Barco::create([
            'nome' => 'Barco Veloz',
            'tipo' => 'Lancha',
            'capacidade' => 10,
        ]);

        Barco::create([
            'nome' => 'Pescador Fiel',
            'tipo' => 'Barco de Pesca',
            'capacidade' => 6,
        ]);

        Barco::create([
            'nome' => 'Titanic Junior',
            'tipo' => 'Navio de Passeio',
            'capacidade' => 150,
        ]);
    }
}
