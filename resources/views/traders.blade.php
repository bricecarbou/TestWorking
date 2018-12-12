@extends('layout')

@section('contain')
    <h1>Les Traders</h1>

    <ul>
        @foreach($traders as $trader)
            <li>{{ $trader->nick }}</li>
        @endforeach
    </ul>
@endsection