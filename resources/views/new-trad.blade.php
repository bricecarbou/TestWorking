@extends('layout')

@section('contain')

<style>

/*****************************************
 *    CARD show style
 *********************************************/
     ul {
    list-style-type: none;
    }

    li {
    display: inline-block;
    }

    input[type="checkbox"][id^="cb"] {
    display: none;
    }

    input[type="radio"][id^="r"] {
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
    height: 100px;
    width: 80px;
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
    z-index: 0;
    }

/*****************************************
 *    responsive table for mobile
 *********************************************/
    table { 
    width: 100%; 
    border-collapse: collapse; 
    }
    /* Zebra striping */
    tr:nth-of-type(odd) { 
    /*background: #eee; */
    }
    th { 
    /*background: #333;*/ 
    color: white; 
    font-weight: bold; 
    }
    td, th { 
    padding: 6px; 
    border: 1px solid #ccc;
    text-align: left; 
    }

/*****************************************
 *    number of cards over card image
 *********************************************/
    /* Container holding the image and the text */
    .container_image {
    position: relative;
    text-align: center;
    color: white;
    }

    /* Bottom right text */
    .bottom-right {
    position: absolute;
    bottom: 15px;
    right: 4px;
    }


/* 
Max width before this PARTICULAR table gets nasty
This query will take effect for any screen smaller than 760px
and also iPads specifically.
*/
@media 
only screen and (max-width: 760px),
(min-device-width: 768px) and (max-device-width: 1024px)  {

	/* Force table to not be like tables anymore */
	table, thead, tbody, th, td, tr { 
		display: block; 
	}
	
	/* Hide table headers (but not display: none;, for accessibility) */
	thead tr { 
		position: absolute;
		top: -9999px;
		left: -9999px;
	}
	
	/* tr { border: 1px solid #ccc; } */
	
	td { 
		/* Behave  like a "row" */
		border: none;
		border-bottom: 1px solid #eee; 
		position: relative;
		padding-left: 50%; 
	}
	
	td:before { 
		/* Now like a table header */
		position: absolute;
		/* Top/left values mimic padding */
		top: 6px;
		left: 6px;
		width: 45%; 
		padding-right: 10px; 
		white-space: nowrap;
	}
}

</style>

<script type="text/javascript" src="http://ads.allotraffic.com/bandeau?id=46372"></script>

    <div class="section">
        <h1 class="title is-1">New Trad</h1>
    </div>

    <form class="section" action="/new-trad" method="post">
        {{ csrf_field() }}

        <div class="field">
            <label class="label">Select the Card you want</label>
            <table class="table ">
                <tbody>
                    <tr>
                        <div class="radio-wrapper">
                            @foreach(App\CardType::all() as $card_type)
                                <td>
                                    <b>{{$card_type->name}}<b>
                                    <ul>
                                        @foreach($card_type->cards as $card)
                                            <li><input type="radio" value="{{ $card->id }}" name="btn_cardwant" id="r{{$card->id}}"/>
                                                <label for="r{{$card->id}}"><img src="{{ $card->CardImagePath }}"/></label>
                                            </li>
                                        @endforeach
                                    </ul>    
                                </td>
                            @endforeach
                        </div>
                    </tr>            
                </tbody>
            </table>
        </div>

        <div class="field">
            <label class="label">Select the Cards to trade</label>
            <label class="label">PLEASE SELECT SAME TYPE OF CARD</label>
            <table class="table">
                <tbody>
                    <tr>
                        <div class="checkbox-wrapper">
                            @foreach(App\CardType::all() as $card_type)
                                <td>
                                    <b>{{$card_type->name}}<b>
                                    <ul>
                                        @foreach($cardsToTrade as $card)
                                            @if(!($card == null))
                                                @if($card->card_type_id == $card_type->id)
                                                    <li>
                                                        <div class="container_image">
                                                            <input type="checkbox" value="{{$card->id}}" name="btn_cardtrad[]" id="cb{{$card->id}}"/>
                                                            @if ($card->CardName == "max")
                                                                <label for="cb{{$card->id}}"><img style="background:url({{ asset('img/Background_img.png')}})" src="{{$card->CardImagePath}}"/></label> 
                                                            @else
                                                                <label for="cb{{$card->id}}"><img src="{{$card->CardImagePath}}"/></label>
                                                            @endif
                                                            <div class="bottom-right"><p style="font-size:80%; background-color:black;">{{$card->CardName}}</p></div>
                                                        </div>
                                                    </li>
                                                @endif
                                            @endif
                                        @endforeach
                                    </ul>
                                </td>
                            @endforeach    
                        </div>
                    </tr>
                </tbody>
            </table>
        </div>
        


        <div class="field">
            <div class="control">
                <button class="button is-link" name="btn_Create" type="submit">Create the new Trad</button>
            </div>
        </div>
    </form>
@endsection