<?php

use App\OrderInfo;
use Illuminate\Database\Seeder;

class OrderInfoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(OrderInfo::class, 20)->create();
    }
}
