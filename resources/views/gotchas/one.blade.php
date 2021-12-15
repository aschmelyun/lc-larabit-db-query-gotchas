@extends('layouts.gotchas')
@section('content')
    <div>
        @foreach($orders as $order)
            {{ $order->uuid }} | {{ $order->products_count }} Products<br>
        @endforeach
    </div>
@endsection