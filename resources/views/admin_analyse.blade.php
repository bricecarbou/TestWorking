@extends('layout')

@section('contain')
    <div class="section">
        <h1 class="title is-1">Admin Page Analysis</h1>

        @if (auth()->check() AND auth()->user()->nick === 'admin')
            <form action="/admin_card_enter" method="post">
                {{ csrf_field() }}

                <div class="field">
                    <label class="label">Trader</label>
                        @foreach(App\Trader::all() as $trader)
                            <li> {{$trader->nick}} > {{ $trader->clan }} </li>
                        @endforeach
                    </select>
                </div>
            </form>        
        @endif
    </div>
@endsection