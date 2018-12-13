@extends('layout')

@section('contain')
   <div class="section">
        <h1 class="title is-1">Trader {{ $trader->nick }} page for submit a new Trade</h1>

        @if (auth()->check())
            <form action="/admin_card_enter" method="post">
                {{ csrf_field() }}

                <div class="field">
                    <label class="label">Enter a name of card</label>
                    <div class="control">
                        <input class="input" name="card_name" placeholder="Card Name">
                    </div>
                    @if($errors->has('card_name'))
                        <p class="help is-danger">{{ $errors->first('card_name') }}</p>
                    @endif
                </div>

                <div class="field">
                    <div class="control">
                        <button class="button is-link" type="submit">Trade</button>
                    </div>
                </div>
            </form>        
        @endif
    </div>


@endsection
