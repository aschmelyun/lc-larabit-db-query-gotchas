@extends('layouts.gotchas')
@section('content')
    <div>
        @foreach($users as $user)
            <div class="border border-gray-300 rounded-xl mb-8 p-4">
                <h3 class="font-bold">{{ $user->name }}</h3>
                <p>Latest Order: {{ $user->latestOrder->id }}</p>
            </div>
        @endforeach
    </div>
@endsection