<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	'name' => 'Loyd Tafireyi',
        	'email' => 'admin@admin.com',
        	'admin' => 1,
        	'password' => bcrypt('admin123'),
        ]);
    }
}
