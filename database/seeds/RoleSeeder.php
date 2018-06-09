<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Role::class)->create();
        factory(\App\Role::class, 'employee')->create();
        factory(\App\Role::class, 'subscriber')->create();
    }
}
