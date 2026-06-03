<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            ['name' => 'Green Herbal Tea', 'description' => '100% Organic Green Tea', 'price' => 299, 'image' => 'herbal tea.png', 'category' => 'tea'],
            ['name' => 'Aloe Vera Juice', 'description' => 'Pure Aloe Vera Drink', 'price' => 249, 'image' => 'aloevera.png', 'category' => 'juice'],
            ['name' => 'Sandalwood Cream', 'description' => 'Brightens & Refreshes Skin', 'price' => 249, 'image' => 'sandalcream.png', 'category' => 'skincare'],
            ['name' => 'Lavender Oil', 'description' => 'Pure Lavender Essential Oil', 'price' => 349, 'image' => 'lavenderr.png', 'category' => 'oil'],
            ['name' => 'Amla Juice', 'description' => 'Rich in Vitamin C', 'price' => 199, 'image' => 'amlajuice.png', 'category' => 'juice'],
            ['name' => 'Coconut Herbal Oil', 'description' => 'Cold Pressed Coconut Oil', 'price' => 299, 'image' => 'cocaoil.png', 'category' => 'oil'],
            ['name' => 'Chamomile Tea', 'description' => 'Relaxing Herbal Infusion', 'price' => 149, 'image' => 'chamoletea.png', 'category' => 'tea'],
            ['name' => 'Neem Herbal Cream', 'description' => 'Natural Skin Protection', 'price' => 149, 'image' => 'neemcream.png', 'category' => 'skincare'],
            ['name' => 'Almond Oil', 'description' => 'Rich in Vitamin E', 'price' => 349, 'image' => 'almondoil.png', 'category' => 'oil'],
            ['name' => 'Aloe Vera Gel Cream', 'description' => 'Pure Aloe Vera Extract', 'price' => 199, 'image' => 'herbalcream.png', 'category' => 'skincare'],
            ['name' => 'Herbal Juice', 'description' => 'Fresh Herbal Juice', 'price' => 149, 'image' => 'herbaljuice.png', 'category' => 'juice'],
            ['name' => 'Tulsi Ginger Tea', 'description' => 'Immunity Booster Tea', 'price' => 199, 'image' => 'tulsi.png', 'category' => 'tea'],
            ['name' => 'Rose Herbal Cream', 'description' => 'Hydrates & Softens Skin', 'price' => 249, 'image' => 'rosecream.png', 'category' => 'skincare'],
            ['name' => 'Jojoba Oil', 'description' => 'Moisturizing & Balancing', 'price' => 349, 'image' => 'jojobaoil.png', 'category' => 'oil'],
            ['name' => 'Tulsi Juice', 'description' => 'Boosts Immunity Naturally', 'price' => 179, 'image' => 'tulsijuice.png', 'category' => 'juice'],
            ['name' => 'Mint Herbal Tea', 'description' => 'Refreshing Herbal Mint Blend', 'price' => 229, 'image' => 'minttea.png', 'category' => 'tea'],
            ['name' => 'Neem Juice', 'description' => 'Detox & Purify', 'price' => 189, 'image' => 'neemjuice.png', 'category' => 'juice'],
            ['name' => 'Lemon Herbal Tea', 'description' => 'Zesty Citrus Infusion', 'price' => 249, 'image' => 'lemontea.png', 'category' => 'tea'],
            ['name' => 'Castor Oil', 'description' => 'Strengthens Hair & Skin', 'price' => 299, 'image' => 'castoroil.png', 'category' => 'oil'],
            ['name' => 'Turmeric Herbal Cream', 'description' => 'Brightens & Heals Skin', 'price' => 229, 'image' => 'turmercream.png', 'category' => 'skincare'],
            ['name' => 'Argan Oil', 'description' => 'Nourishes Hair & Skin', 'price' => 399, 'image' => 'arganoil.png', 'category' => 'oil'],
            ['name' => 'Basil Herbal Cream', 'description' => 'Natural Skin Protection', 'price' => 199, 'image' => 'basilcream.png', 'category' => 'skincare'],
            ['name' => 'Hibiscus Herbal Tea', 'description' => 'Rich in Antioxidants', 'price' => 199, 'image' => 'hibitea.png', 'category' => 'tea'],
            ['name' => 'Wheatgrass Juice', 'description' => 'Energy & Detox Support', 'price' => 259, 'image' => 'wheatgjuice.png', 'category' => 'juice'],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
