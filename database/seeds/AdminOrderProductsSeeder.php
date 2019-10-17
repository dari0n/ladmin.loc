<?php

use Illuminate\Database\Seeder;

class AdminOrderProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [];

        for($x = 1; $x <= 12; $x++)
        {
            for($i =1; $i <= 3; $i++)
            {
                $data[] = [
                    'order_id' => $x,
                    'product_id' => $i,
                    'qty' => rand(1,4),
                    'title' => 'Test Product',
                    'price' => rand(40,200)

                ];
            }
        }

        DB::table('order_products')->insert($data);


    }
}
