@extends('layout')

@section('contain')
    <div class="section">
        <h1 class="title is-1">Welcome, please find all the traders who hae susbcribe</h1>

        <ul>
            @foreach($traders as $trader)
                <li>
                    <a href="/{{ $trader->nick }}">{{ $trader->nick }}</a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection