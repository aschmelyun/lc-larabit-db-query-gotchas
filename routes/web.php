<?php

use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/gotcha-one', function () {
    $orders = Order::withCount('products')->get();
    return view('gotchas.one', [
        'orders' => $orders
    ]);
});

Route::get('/gotcha-two', function () {
    $wordsInDescriptions = [];

    Product::chunk(500, function($products) use(&$wordsInDescriptions) {
        foreach($products as $product) {
            $wordsInDescriptions[$product->id] = str_word_count($product->description);
        }
    });

    return view('gotchas.two', [
        'wordsInDescriptions' => $wordsInDescriptions
    ]);
});

Route::get('/gotcha-three', function() {
    $users = User::with('latestOrder')->get();

    return view('gotchas.three', [
        'users' => $users
    ]);
});

Route::get('/gotcha-four', function() {
    $products = Product::where('category', 'Sweaters')->get();

    return view('gotchas.four', [
        'products' => $products
    ]);
});

Route::get('/gotcha-five', function() {
    $orders = Order::whereIn('status', ['submitted', 'processed', 'shipped'])
        ->get(['id', 'status']);
    $ordersSubmitted = $orders->where('status', 'submitted')->all();
    $ordersProcessed = $orders->where('status', 'processed')->all();
    $ordersShipped = $orders->where('status', 'shipped')->all();

    return view('gotchas.five', [
        'ordersSubmitted' => $ordersSubmitted,
        'ordersProcessed' => $ordersProcessed,
        'ordersShipped' => $ordersShipped
    ]);
});