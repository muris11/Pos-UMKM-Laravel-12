<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            // Makanan
            ['category_id' => 1, 'sku' => 'FD001', 'name' => 'Indomie Goreng', 'buy_price' => 2500, 'sell_price' => 3000, 'stock' => 50],
            ['category_id' => 1, 'sku' => 'FD002', 'name' => 'Indomie Rebus', 'buy_price' => 2500, 'sell_price' => 3000, 'stock' => 45],
            ['category_id' => 1, 'sku' => 'FD003', 'name' => 'Mie Sedap Goreng', 'buy_price' => 2400, 'sell_price' => 2900, 'stock' => 30],
            ['category_id' => 1, 'sku' => 'FD004', 'name' => 'Sarimi Goreng', 'buy_price' => 2300, 'sell_price' => 2800, 'stock' => 25],
            
            // Minuman
            ['category_id' => 2, 'sku' => 'DR001', 'name' => 'Aqua Botol 600ml', 'buy_price' => 3000, 'sell_price' => 3500, 'stock' => 100],
            ['category_id' => 2, 'sku' => 'DR002', 'name' => 'Coca Cola 390ml', 'buy_price' => 5500, 'sell_price' => 6500, 'stock' => 40],
            ['category_id' => 2, 'sku' => 'DR003', 'name' => 'Fanta 390ml', 'buy_price' => 5500, 'sell_price' => 6500, 'stock' => 35],
            ['category_id' => 2, 'sku' => 'DR004', 'name' => 'Teh Botol Sosro', 'buy_price' => 4500, 'sell_price' => 5500, 'stock' => 60],
            
            // Snack
            ['category_id' => 3, 'sku' => 'SN001', 'name' => 'Chitato BBQ', 'buy_price' => 8500, 'sell_price' => 10000, 'stock' => 20],
            ['category_id' => 3, 'sku' => 'SN002', 'name' => 'Lays Classic', 'buy_price' => 8000, 'sell_price' => 9500, 'stock' => 25],
            ['category_id' => 3, 'sku' => 'SN003', 'name' => 'Qtela 500g', 'buy_price' => 12000, 'sell_price' => 14000, 'stock' => 15],
            
            // Rokok
            ['category_id' => 4, 'sku' => 'RK001', 'name' => 'Sampoerna Mild', 'buy_price' => 20000, 'sell_price' => 23000, 'stock' => 30],
            ['category_id' => 4, 'sku' => 'RK002', 'name' => 'Dji Sam Soe', 'buy_price' => 18000, 'sell_price' => 21000, 'stock' => 25],
            ['category_id' => 4, 'sku' => 'RK003', 'name' => 'Gudang Garam Surya', 'buy_price' => 17000, 'sell_price' => 20000, 'stock' => 28],
            
            // Kebutuhan Rumah Tangga
            ['category_id' => 5, 'sku' => 'RT001', 'name' => 'Sabun Mandi Lifebuoy', 'buy_price' => 8000, 'sell_price' => 10000, 'stock' => 40],
            ['category_id' => 5, 'sku' => 'RT002', 'name' => 'Pasta Gigi Pepsodent', 'buy_price' => 9000, 'sell_price' => 11000, 'stock' => 35],
            ['category_id' => 5, 'sku' => 'RT003', 'name' => 'Shampoo Pantene', 'buy_price' => 15000, 'sell_price' => 18000, 'stock' => 20],
            
            // Elektronik
            ['category_id' => 6, 'sku' => 'EL001', 'name' => 'Baterai ABC AA', 'buy_price' => 5000, 'sell_price' => 7000, 'stock' => 50],
            ['category_id' => 6, 'sku' => 'EL002', 'name' => 'Lampu LED 5W', 'buy_price' => 12000, 'sell_price' => 15000, 'stock' => 25],
            
            // Pakaian
            ['category_id' => 7, 'sku' => 'PK001', 'name' => 'Kaos Kaos', 'buy_price' => 35000, 'sell_price' => 50000, 'stock' => 15],
            ['category_id' => 7, 'sku' => 'PK002', 'name' => 'Celana Pendek', 'buy_price' => 40000, 'sell_price' => 60000, 'stock' => 10],
            
            // Obat-obatan
            ['category_id' => 8, 'sku' => 'OB001', 'name' => 'Paracetamol 500mg', 'buy_price' => 2000, 'sell_price' => 3000, 'stock' => 100],
            ['category_id' => 8, 'sku' => 'OB002', 'name' => 'Betadine 30ml', 'buy_price' => 15000, 'sell_price' => 20000, 'stock' => 30],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}