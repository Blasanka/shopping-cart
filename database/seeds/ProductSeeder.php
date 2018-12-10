<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
            'name' => 'White Micky Sticker T-Shirt',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore deleniti sit nisi corporis, rem ea adipisci nobis velit quaerat a, nihil optio architecto enim! Quo vel architecto a qui. Qui! ',
            'itemPrice' => '12.67',
            'currency' => '$',
            'imgUrl' => 'https://lumiere-a.akamaihd.net/v1/images/file_bf3b6713.jpeg?width=150&height:300&quality=2'
        ]);
        $product->save();
        $product = new \App\Product([
            'name' => 'Red Micky Sticker T-Shirt',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore deleniti sit nisi corporis, rem ea adipisci nobis velit quaerat a, nihil optio architecto enim! Quo vel architecto a qui. Qui! ',
            'itemPrice' => '13.00',
            'currency' => '$',
            'imgUrl' => 'https://lumiere-a.akamaihd.net/v1/images/file_bf3b6713.jpeg?width=150&height:300&quality=2'
        ]);
        $product->save();
        $product = new \App\Product([
            'name' => 'Black plain T-Shirt',
            'description' => 'Amet, consectetur Lorem ipsum dolor sit adipisicing elit. Labore deleniti sit nisi corporis, rem ea adipisci nobis velit quaerat a, nihil optio architecto enim! Quo vel architecto a qui. Qui! ',
            'itemPrice' => '10.17',
            'currency' => '$',
            'imgUrl' => 'https://lumiere-a.akamaihd.net/v1/images/file_bf3b6713.jpeg?width=150&height:300&quality=2'
        ]);
        $product->save();
        $product = new \App\Product([
            'name' => 'Black Micky Sticker T-Shirt',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore deleniti sit nisi corporis, rem ea adipisci nobis velit quaerat a, nihil optio architecto enim! Quo vel architecto a qui. Qui! ',
            'itemPrice' => '13.50',
            'currency' => '$',
            'imgUrl' => 'https://lumiere-a.akamaihd.net/v1/images/file_bf3b6713.jpeg?width=150&height:300&quality=2'
        ]);
        $product->save();
        $product = new \App\Product([
            'name' => 'Plain white T-Shirt',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore deleniti sit nisi corporis, rem ea adipisci nobis velit quaerat a, nihil optio architecto enim! Quo vel architecto a qui. Qui! ',
            'itemPrice' => '9.00',
            'currency' => '$',
            'imgUrl' => 'https://lumiere-a.akamaihd.net/v1/images/file_bf3b6713.jpeg?width=150&height:300&quality=2'
        ]);
        $product->save();
        $product = new \App\Product([
            'name' => 'Black Micky Sticker T-Shirt',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore deleniti sit nisi corporis, rem ea adipisci nobis velit quaerat a, nihil optio architecto enim! Quo vel architecto a qui. Qui! ',
            'itemPrice' => '12.67',
            'currency' => '$',
            'imgUrl' => 'https://lumiere-a.akamaihd.net/v1/images/file_bf3b6713.jpeg?width=150&height:300&quality=2'
        ]);
        $product->save();
    }
}
