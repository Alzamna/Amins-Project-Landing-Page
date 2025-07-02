<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Create admin user
        User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
            'is_active' => true,
        ]);

        // Create categories
        $categories = [
            ['name' => 'Komputer', 'icon' => 'fas fa-desktop', 'color' => '#3B82F6'],
            ['name' => 'Laptop', 'icon' => 'fas fa-laptop', 'color' => '#F97316'],
            ['name' => 'Printer', 'icon' => 'fas fa-print', 'color' => '#EAB308'],
            ['name' => 'Elektronik', 'icon' => 'fas fa-mobile-alt', 'color' => '#10B981'],
            ['name' => 'Software', 'icon' => 'fas fa-code', 'color' => '#8B5CF6'],
            ['name' => 'Hardware', 'icon' => 'fas fa-microchip', 'color' => '#6366F1'],
            ['name' => 'Kabel', 'icon' => 'fas fa-ethernet', 'color' => '#EF4444'],
            ['name' => 'Storage', 'icon' => 'fas fa-hdd', 'color' => '#14B8A6'],
            ['name' => 'Network', 'icon' => 'fas fa-wifi', 'color' => '#06B6D4'],
            ['name' => 'Aksesoris', 'icon' => 'fas fa-mouse', 'color' => '#EC4899'],
            ['name' => 'Teknik', 'icon' => 'fas fa-tools', 'color' => '#F59E0B'],
            ['name' => 'Jasa', 'icon' => 'fas fa-users', 'color' => '#059669'],
        ];

        foreach ($categories as $index => $categoryData) {
            Category::create([
                'name' => $categoryData['name'],
                'icon' => $categoryData['icon'],
                'color' => $categoryData['color'],
                'description' => 'Kategori ' . $categoryData['name'],
                'is_active' => true,
                'sort_order' => $index + 1,
            ]);
        }

        // Create sample products
        $products = [
            [
                'name' => 'Desktop Computer Gaming',
                'description' => 'High-performance desktop computer untuk kebutuhan gaming dan profesional dengan spesifikasi terdepan.',
                'short_description' => 'Desktop gaming dengan performa tinggi',
                'price' => 15000000,
                'sale_price' => 12000000,
                'sku' => 'DESK-001',
                'stock_quantity' => 10,
                'category_id' => 1,
                'is_featured' => true,
            ],
            [
                'name' => 'Gaming Laptop ROG',
                'description' => 'Laptop gaming dengan processor Intel Core i7 dan VGA RTX 3060 untuk pengalaman gaming terbaik.',
                'short_description' => 'Laptop gaming dengan RTX 3060',
                'price' => 18000000,
                'sku' => 'LAP-001',
                'stock_quantity' => 5,
                'category_id' => 2,
                'is_featured' => true,
            ],
            [
                'name' => 'Laser Printer HP',
                'description' => 'Printer laser berkualitas tinggi untuk kebutuhan office dengan kecepatan cetak yang optimal.',
                'short_description' => 'Printer laser untuk office',
                'price' => 3200000,
                'sku' => 'PRT-001',
                'stock_quantity' => 15,
                'category_id' => 3,
                'is_featured' => true,
            ],
            [
                'name' => 'Software License Windows 11 Pro',
                'description' => 'Lisensi software Windows 11 Professional original untuk kebutuhan bisnis dan personal.',
                'short_description' => 'Lisensi Windows 11 Pro original',
                'price' => 2500000,
                'sku' => 'SW-001',
                'stock_quantity' => 50,
                'category_id' => 5,
                'is_featured' => true,
            ],
        ];

        foreach ($products as $productData) {
            Product::create($productData);
        }
    }
}
