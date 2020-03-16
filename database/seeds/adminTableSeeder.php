<?php

use Illuminate\Database\Seeder;

class adminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'admin_name' => 'jahangir',
            'admin_email' =>'jahangir@gmail.com',
            'admin_pass' => Hash::make('password'),
        ]);
    }
}
