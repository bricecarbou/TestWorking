@extends('layout')

@section('contain')
    <div class="section">
        <h1 class="title is-1">New Trad</h1>
    </div>

    <form class="section" action="/new-trad" method="post">
        {{ csrf_field() }}

        <div class="field">
            <label class="label">Select the Card you want</label>
            <div class="radio-wrapper">
                @foreach($cards as $card)
                    <input type="radio" value="{{ $card->id }}" name="btn_cardwant"/>
                    <img src="{{ $card->CardImagePath }}" width="45" height="45" />
                @endforeach
            </div>
        </div>

        <div class="field">
            <label class="label">Select the Cards to trade</label>
            <div class="checkbox-wrapper">
                @foreach($cards as $card)
                    <input type="checkbox" value="{{ $card->id }}" name="btn_cardtrad[]"/>
                    <img src="{{ $card->CardImagePath }}" width="45" height="45" />
                @endforeach
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button class="button is-link" name="btn_Create" type="submit">Create the new Trad</button>
            </div>
        </div>
    </form>
@endsection