@extends('layout')

@section('contain')
    <div class="section">
        <h1 class="title is-1">Admin page to add a card</h1>

        @if (auth()->check() AND auth()->user()->nick === 'admin')
            <form action="/admin_card_id_recover" method="post">
                {{ csrf_field() }}

                <div class="field">
                    <label class="label">Enter a name of card (english) with majuscule on each part of name (ex: Ram Rider)</label>
                    <div class="control">
                        <input class="input" name="card_name_recover" placeholder="Card Name" value="{{ old('card_name_recover') }}">
                    </div>
                    @if($errors->has('card_name_recover'))
                        <p class="help is-danger">{{ $errors->first('card_name_recover') }}</p>
                    @endif
                </div>

                <div class="field">
                    <div class="control">
                        <button class="button is-link" type="submit">Recover Id</button>
                    </div>
                </div>
            </form>    


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
                    <label class="label">The card id (recover from previous button)</label>
                    <div class="control">
                        <input class="input" name="card_id" placeholder="Card id" value="{{$card_id_recover }}">
                    </div>
                </div>

                <p><label class="control-label col-sm-4" for="text">Type:</label>
                    <select  class="question_type form-control" name="card_type" >
                        @foreach(App\CardType::all() as $card_type)
                            <option value="{{$card_type->id}}"> {{ $card_type->name }} </option>
                        @endforeach
                    </select>
                </p>

                 <div class="field">
                    <label class="label">Enter the url of card image</label>
                    <div class="control">
                        <input class="textarea" name="card_image_url" placeholder="Card url">
                    </div>
                    @if($errors->has('card_image_url'))
                        <p class="help is-danger">{{ $errors->first('card_image_url') }}</p>
                    @endif
                </div>        

                <div class="field">
                    <div class="control">
                        <button onclick="return confirm('Are you sure?')" class="button is-link" type="submit">Register</button>
                    </div>
                </div>
            </form>        
        @endif
    </div>
@endsection