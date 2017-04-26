<?php

use Illuminate\Database\Seeder;
// use furbook\BreedsTableSeeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Eloquent::unguard();
        // $this->call(UsersTableSeeder::class);
        $this->call(BreedsTableSeeder::class);
    }
}
