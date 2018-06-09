<?php

use App\Role;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;


$factory->define(App\Role::class, function (Faker $faker) {


    $roles = Role::where('id', '>', 0)->get(['id'])->toArray();

    Role::destroy($roles);

    return [
        'name' => 'Admin',
        'description' => 'Admin is the super user with all the access'
    ];
});

$factory->defineAs(App\Role::class, 'employee', function (Faker $faker) {

    return [
        'name' => 'employee',
        'description' => 'Employee have all the privileges of an admin!'
    ];
});

$factory->defineAs(App\Role::class, 'subscriber', function (Faker $faker) {

    return [
        'name' => 'subscriber',
        'description' => 'Subscriber can only view the posts'
    ];
});

