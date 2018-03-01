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
        $faker = Faker\Factory::create();
        //Create 10 different User models
        factory(\App\User::class, 10)->create()->each(function (\App\User $u) use ($faker) {
            //Create from 1 to 5 different Page models
            $u->pages()->saveMany(factory(App\Page::class, $faker->numberBetween(1, 5))->make());
            $u->pages()->each(function (\App\Page $p) use ($faker) {
                //Create from 1 to 3 different Tag models
                $p->tags()->saveMany(factory(\App\Tag::class, $faker->numberBetween(1, 3))->make());
            });
        });
    }
}
