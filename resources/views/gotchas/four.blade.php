@extends('layouts.gotchas')
@section('content')
    <div>
        @foreach($products as $product)
            <div class="border border-gray-300 rounded-xl mb-8 p-4">
                <h3 class="font-bold">{{ $product->name }}</h3>
            </div>
        @endforeach
    </div>
@endsection