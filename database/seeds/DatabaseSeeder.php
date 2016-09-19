<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(RolesTableSeeder::class);
        DB::table('roles')->insert([
            ['name' => 'Super Admin'],
            ['name' => 'Admin'],
            ['name' => 'Super Manager'],
            ['name' => 'Manager'],
            ['name' => 'User']
        ]);

        DB::table('departaments')->insert([
            ['name' => 'Developers'],
            ['name' => 'Managers'],
            ['name' => 'Mobiles'],
            ['name' => 'SEO']
        ]);

        DB::table('offices')->insert([
            ['name' => 'Trainee'],
            ['name' => 'Junior'],
            ['name' => 'Middle'],
            ['name' => 'Senjor']
        ]);
    }
}
