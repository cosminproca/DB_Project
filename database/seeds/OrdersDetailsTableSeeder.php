<?php

use Illuminate\Database\Seeder;

class OrdersDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        factory(App\OrderDetails::class, 20)->create();
    }
}
