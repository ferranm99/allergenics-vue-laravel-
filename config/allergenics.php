<?php

return [
    'home_page_id' => env('ALLERGENICS_HOME_PAGE_ID',1),
    'consultation_fee_price' => env('ALLERGENICS_CONSULTATION_PRICE',59.00),
    'globiflow_order_endpoint' => env('ALLERGENICS_GLOBIFLOW_ORDER_ENDPOINT',false),
    'stripe_key' => env('STRIPE_KEY',false),
    'stripe_secret' => env('STRIPE_SECRET',false),
];
