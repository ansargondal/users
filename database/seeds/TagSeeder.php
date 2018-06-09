<?php

use App\Tag;
use Illuminate\Database\Seeder;


class TagSeeder extends Seeder
{
    public function run()
    {
        factory(Tag::class, 20)->create();
    }
}
