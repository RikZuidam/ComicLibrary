<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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

        // User Create
        $user = DB::table('user')->insert([
            'name' => 'admin',
            'email' => 'admin@admin.admin',
            'password' => Hash::make('admin'),
            'role' => 2
        ]);

        $user = DB::table('user')->insert([
            'name' => 'user',
            'email' => 'user@user.user',
            'password' => Hash::make('user'),
            'role' => 0
        ]);

        $user = DB::table('user')->insert([
            'name' => 'seller',
            'email' => 'seller@seller.seller',
            'password' => Hash::make('seller'),
            'role' => 1
        ]);

        // Product Create
        $product = DB::table('product')->insert([
            'name' => 'product',
            'pdf_file' => '14764484345677.jpg',
            'info' => 'info for product',
            'image' => '456789876543.jpg',
            'author' => 'Zayro',
            'price' => 23.43,
            'stock' => 21,
            'sales' => 10,
            'user_id' => 3
        ]);

        $purchased = DB::table('purchased')->insert([
            'user_id' => 2,
            'product_id' => 1
        ]);

        $category = DB::table('category')->insert([
            'name' => 'pietsnot'
        ]);
    }
}
