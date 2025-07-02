<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $category = Category::inRandomOrder()->first();

        $name = 'Producto genérico';
        $image = $this->faker->imageUrl(640, 480, 'technics');
        $description = $this->faker->paragraph();

        switch ($category?->name) {
            case 'Volantes':
                $name = 'Volante ' . $this->faker->word();
                $image = 'https://simufy.com/cdn/shop/files/volante-simagic-gt-neo-simufy_4_280x.png?v=1703342677';
                break;
            case 'Cockpits':
                $name = 'Cockpit ' . $this->faker->word();
                $image = 'https://simufy.com/cdn/shop/files/P1X-Pro-Sim-Racing-Cockpit-simlab-simufy_3_280x.jpg?v=1718914012';
                break;
            case 'Bases Direct Drive':
                $name = 'Base DD ' . $this->faker->word();
                $image = 'https://simufy.com/cdn/shop/files/R12_3_280x.png?v=1683797761';
                break;
            case 'Pedales':
                $name = 'Pedales ' . $this->faker->word();
                $image = 'https://simufy.com/cdn/shop/files/Pedales-CRP2-MOZA-Simufy_1_280x.png?v=1724271198';
                break;
            case 'Realidad Virtual':
                $name = 'Gafas VR ' . $this->faker->word();
                $image = 'https://simufy.com/cdn/shop/files/Gafas-Realidad-Virtual-PIMAX-Crystal-Super-simufy-vr-glasses_9_280x.png?v=1746124730';
                break;
            case 'PC Gaming':
                $name = 'PC Gaming ' . $this->faker->word();
                $image = 'https://simufy.com/cdn/shop/files/pc-gaming-simufy-ultra-9-trigger-intel-core-ultra-9-285k-64-gb-ram-ddr-5-2tb-ssd-rtx-5080-windows-11-pro_1_280x.png?v=1746110708';
                break;
            default:
                $name = $category?->name . ' ' . $this->faker->word();
                $image = 'https://simufy.com/cdn/shop/files/PACKDDSIMAGICALPHAMINI-GTNEOP10003MECANICO_280x.png?v=1714408130';
                break;
        }

        return [
            'name' => $name,
            'description' => $description,
            'price' => $this->faker->randomFloat(2, 50, 1500),
            'image' => $image,
            'stock' => $this->faker->numberBetween(0, 100),
            'category_id' => $category?->id ?? 1,
        ];
    }
}
