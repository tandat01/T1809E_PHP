<?php

use Illuminate\Database\Seeder;

class UserTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Danhmuc::class,100)->create();
        factory(App\Sanpham::class,20)->create();
        factory(App\User::class,50)->create();

    }

}

