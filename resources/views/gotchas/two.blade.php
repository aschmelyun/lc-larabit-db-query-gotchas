@extends('layouts.gotchas')
@section('content')
    <div>
        @foreach($wordsInDescriptions as $id => $words)
            Product ID: {{ $id }} has {{ $words }} words in the description.<br>
        @endforeach
    </div>
@endsection