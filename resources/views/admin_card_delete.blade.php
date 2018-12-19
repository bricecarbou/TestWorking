@extends('layout')

@section('contain')
<style>
    ul {
    list-style-type: none;
    }

    li {
    display: inline-block;
    }

    input[type="checkbox"][id^="cb"] {
    display: none;
    }

    label {
    border: 0px solid #fff;
    padding: 0px;
    display: block;
    position: relative;
    margin: -5px;
    cursor: pointer;
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    }

    label::before {
    background-color: white;
    color: white;
    content: " ";
    display: block;
    border-radius: 50%;
    border: 0px solid grey;
    position: absolute;
    top: -5px;
    left: -5px;
    width: 25px;
    height: 25px;
    text-align: center;
    line-height: 28px;
    transition-duration: 0.4s;
    transform: scale(0);
    }

    label img {
    height: 45px;
    width: 38px;
    transition-duration: 0.2s;
    transform-origin: 50% 50%;
    }

    :checked+label {
    border-color: #ddd;
    }

    :checked+label::before {
    content: "✓";
    background-color: grey;
    transform: scale(1);
    }

    :checked+label img {
    transform: scale(0.8);
    box-shadow: 0 0 5px #333;
    z-index: -1;
    }    
</style>

    <div class="section">
        <h1 class="title is-1">Admin page to delete a card</h1>
    </div>

    <form class="section" action="/admin_card_delete" method="post">
        {{ csrf_field() }}

        <div class="field">
            <label class="label">Select the Card you want deleted (WARNING reverse is not possible!!!)</label>
            <table class="table is-bordered is-fullwidth">
                <thead>
                    <tr>
                        @foreach(App\CardType::all() as $card_type)
                            <th>{{ $card_type->name }}</th>
                        @endforeach
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <div class="radio-wrapper">
                            @foreach(App\CardType::all() as $card_type)
                                <th>
                                    <ul>
                                    @foreach($card_type->cards as $card)
                                        <li><input type="checkbox" value="{{$card->id}}" name="btn_cardwantdelete[]" id="cb{{$card->id}}"/>
                                            <label for="cb{{$card->id}}"><img src="{{ $card->CardImagePath }}"/></label>
                                        </li>
                                    @endforeach
                                    </ul>    
                                </th>
                            @endforeach
                        </div>
                    </tr>            
                </tbody>
            </table>
        </div>

         <div class="field">
            <div class="control">
                <button class="button is-link" type="submit">Delete the Cards</button>
            </div>
        </div>
    </form>
@endsection