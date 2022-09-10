<?php

use App\Models\Product as Product;

use LaraCart;

//config('session.domain');

//$product = Product::withLocale('en_NZ')->whereSku('nt-food')->first();


//$product->price(1);

// LaraCart::addLine(
//             $product->id,
//             $product->name,
//             $qty = 3,
//             $price = $product->price(3),
//             $options = [
//                 'product'=> $product,
//                 'locale'=> "en_NZ.UTF-8",
//             ],
//             $taxable = true

// );


//session()->all();


$product = Product::find(1);

$product->prices;
