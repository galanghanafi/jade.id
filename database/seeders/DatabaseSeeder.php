<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Product;
use Illuminate\Database\Seeder;

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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $products = [
            [
                'product' => 'Desain Logo dan Branding',
                'desc' => 'Untuk kamu yang sedang membutuhkan desain logo untuk kegiatan usaha atau kebutuhan acara.',
                'price' => 30.000,
                'logo' => 'fa fa-crown',
            ],
            [
                'product' => 'Desain Konten Promosi',
                'desc' => 'Untuk kamu yang sedang membutuhkan desain logo untuk kegiatan usaha atau kebutuhan acara.',
                'price' => 30.000,
                'logo' => 'fa fa-laptop-mobile',

            ],
            [
                'product' => 'Desain CV',
                'desc' => 'Untuk kamu yang sedang membutuhkan desain logo untuk kegiatan usaha atau kebutuhan acara.',
                'price' => 30.000,
                'logo' => 'fa fa-crown',
            ],
            [
                'product' => 'Desain Website',
                'desc' => 'Untuk kamu yang sedang membutuhkan desain logo untuk kegiatan usaha atau kebutuhan acara.',
                'price' => 30.000,
                'logo' => 'fa fa-file-code',
            ],
        ];
        Product::insert($products);
    }
}
