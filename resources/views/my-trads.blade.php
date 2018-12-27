@extends('layout')

@section('contain')

    <style>
        ul {
            list-style-type: none;
        }

        li {
            display: inline-block;
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
        /* 
        Generic Styling, for Desktops/Laptops 
        */
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
    
    <br />
    <div class="CreateTrade">
        <p style="text-align:center"> 
            <a class="button is-link" href="/new-trad" >Create a New Trad</a>
        </p>
    </div>
    <br />

    @auth
        <p>You can use the clan <b>"Trade GE"</b> for your inter clan trading</p>
        <p>Think to 2h30 time delay</p>

        <table class="table">
            <tbody>
                @foreach($trads as $trad)
                    <tr>
                        <td>
                            <b>Search Card</b>
                            <ul>
                                <li><label><img src='{{$trad->card->CardImagePath}}' width="45" height="45"></label></li>
                            </ul>
                        </td>
                        <td> 
                            <b>Traded Cards</b>
                            <ul>
                                @foreach($trad->cards as $card)
                                    <li><label><img src='{{$card->CardImagePath}}' width="45" height="45"></label></li>
                                @endforeach
                            </ul>
                        </td>
                        <td>
                            <b>Traders to contact</b>
                                <ul>
                                    @foreach($trad->getMatchTrads() as $traddest)
                                        <li><a href={{\App\Trader::sendDiscordMsg(\App\Trader::find($traddest->trader_id), auth()->user(), \App\Card::find($traddest->card_id)->CardName, $trad->card->CardName)}}>
                                            {{\App\Trader::find($traddest->trader_id)->nick}} ({{\App\Trader::find($traddest->trader_id)->clan}}) -> <img src='{{\App\Card::find($traddest->card_id)->CardImagePath}}' width="45" height="45">
                                        </a></li>
                                    @endforeach
                                </ul>
                        </td>
                        <td>
                            <br />
                            <div class="control">
                               <a class="button is-link" href="/my-trads/{{$trad->id}}">Delete</a>
                            </div>
                        </td>
                    </tr>
                @endforeach  
            </tbody>
        </table>
    @endauth
@endsection