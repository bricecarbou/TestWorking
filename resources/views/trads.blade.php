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

        .blockfilter {
            float:left;
            width:200px;
            margin:0;
            padding:0;
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
    
    
    @auth
        <div class="section">
            <h1 class="title is-1">List of the Trads</h1>
        </div>

        @if (auth()->check() AND ((auth()->user()->role->name === 'admin') OR (auth()->user()->role->name === 'leader')))
            <div class="UpdateAll">
                <p style="text-align:center"> 
                    <a class="button is-link" href="/updateAll" >Update all the trads</a>
                </p>
            </div>
        @endif
        <form class="section" action="/trads" method="post">
        {{ csrf_field() }}
            <div class="blockfilter">
                <label class="control-label col-sm-4" for="text">Filter on Name:</label>
                <select  class="question_type form-control" name="name" >
                    <option value="all"> All </option>
                    @foreach(App\Trader::allTradersGroup() as $trader)
                        <option value="{{$trader->id}}">{{$trader->nick}}</option>
                    @endforeach
                </select>
            </div>             
            <div class="blockfilter">
                <label class="control-label col-sm-4" for="text">Filter on Clan:</label>
                <select  class="question_type form-control" name="clan" >
                    <option value="all" > All </option>
                    @foreach (\App\Clan::clanOfMyGroup() as $clan)
                        <option value="{{$clan->id}}" > {{$clan->name}} </option>
                    @endforeach
                </select>
            </div>     
            <div class="blockfilter">
                <label class="control-label col-sm-4" for="text">(Filter) I give:</label>
                <select  class="question_type form-control" name="searchcard" >
                    <option value="all" > All </option>
                    @foreach(App\Card::orderBy('CardName', 'asc')->get() as $card)
                        <option value="{{$card->id}}" > {{$card->CardName}}  </option>
                    @endforeach
                 </select>
            </div>
            <div class="blockfilter">
                <label class="control-label col-sm-4" for="text">(Filter) I want:</label>
                <select  class="question_type form-control" name="wantcard" >
                    <option value="all" > All </option>
                    @foreach(App\Card::orderBy('CardName', 'asc')->get() as $card)
                        <option value="{{$card->id}}" > {{$card->CardName}}  </option>
                    @endforeach
                 </select>
            </div>
            <div class="blockfilter">
                <div class="control">
                    <button class="button is-link" type="submit">Filter</button>
                </div>
            </div>
            <br clear="both" />
        </form>

        <table class="table">
            <tbody>
                @foreach($trads as $trad)
                    <tr>
                        <td>
                            <b>Traders</b>
                                <ul>
                                    <li>{{\App\Trader::find($trad->trader_id)->nick}}</li>
                                </ul>
                        </td>
                        <td>
                            <b>Clan</b>
                                <ul>
                                    <li>{{\App\Trader::find($trad->trader_id)->clan->name}}</li>
                                </ul>
                        </td>
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
                        @if (auth()->check() AND ((auth()->user()->role->name== 'admin') OR (auth()->user()->role->name == 'leader')))
                            <td> 
                                <b>Trader to contact</b>
                                <ul>
                                    @foreach($trad->getMatchTrads() as $traddest)
                                        <li><a href='/discord/{{$traddest->id}}/{{$trad->id}}'>
                                            {{\App\Trader::find($traddest->trader_id)->nick}} ({{\App\Trader::find($traddest->trader_id)->clan->name}}) -> <img src='{{\App\Card::find($traddest->card_id)->CardImagePath}}' width="45" height="45">
                                        </a></li>
                                    @endforeach
                                </ul>
                            </td> 
                        @endif
                     </tr>
                @endforeach  
            </tbody>
        </table>
    @endauth
@endsection
