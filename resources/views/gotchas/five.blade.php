@extends('layouts.gotchas')
@section('content')
    <div class="flex">
        <div class="flex-1 mx-2">
            <h3 class="font-bold">Submitted</h3>
            @foreach($ordersSubmitted as $order)
                <div class="border border-gray-300 rounded-xl mb-8 p-4">
                    {{ $order->id }}
                </div>
            @endforeach
        </div>
        <div class="flex-1 mx-2">
            <h3 class="font-bold">Processed</h3>
            @foreach($ordersProcessed as $order)
                <div class="border border-gray-300 rounded-xl mb-8 p-4">
                    {{ $order->id }}
                </div>
            @endforeach
        </div>
        <div class="flex-1 mx-2">
            <h3 class="font-bold">Shipped</h3>
            @foreach($ordersShipped as $order)
                <div class="border border-gray-300 rounded-xl mb-8 p-4">
                    {{ $order->id }}
                </div>
            @endforeach
        </div>
    </div>
@endsection