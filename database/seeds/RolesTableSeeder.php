<?php

use Illuminate\Database\Seeder;
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
        DB::table('roles')->insert([
            ['name' => 'Super Admin'],
            ['name' => 'Admin'],
            ['name' => 'Super Manager'],
            ['name' => 'Manager'],
            ['name' => 'User']
        ]);
    }
}