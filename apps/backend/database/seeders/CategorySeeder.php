<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            'Bundles',
            'Cockpits',
            'Bases Direct Drive',
            'Volantes',
            'Pedales',
            'Shifters',
            'Frenos de Mano',
            'Asientos',
            'Realidad Virtual',
            'Sistemas de Movimiento',
            'Soportes de Monitor',
            'Dashboards',
            'Botoneras',
            'Quick Releases',
            'Bass Shakers',
            'Sistemas de Viento Dinámico',
            'Accesorios para Cockpits',
            'Accesorios para Volantes',
            'Accesorios para Pedales',
            'PC Gaming',
        ];

        foreach ($categories as $name) {
            Category::create([
                'name' => $name,
                'slug' => Str::slug($name),
            ]);
        }
    }
}
