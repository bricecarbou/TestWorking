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
    
    @auth
        <div class="section">
            <h1 class="title is-1">List of the Trads</h1>
        </div>

        @if (auth()->check() AND auth()->user()->nick === 'admin')
            <div class="UpdateAll">
                <p style="text-align:center"> 
                    <a class="button is-link" href="/updateAll" >Update all the trads</a>
                </p>
            </div>
        @endif
        <form class="section" action="/trads" method="post">
        {{ csrf_field() }}
            <div class="field">
                <label class="control-label col-sm-4" for="text">Filter on Clan:</label>
                <select  class="question_type form-control" name="clan" >
                    <option value="GEFR" > All </option>
                    <option value="GEFR" > Great Escape FR </option>
                    <option value="GE2" >Great Escape 2</option>
                </select>
            </div>
            <div class="field">
                <div class="control">
                    <button class="button is-link" type="submit">Filter</button>
                </div>
            </div>

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
                                    <li>({{\App\Trader::find($trad->trader_id)->clan}})</li>
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
                    </tr>
                @endforeach  
            </tbody>
        </table>
    @endauth
@endsection