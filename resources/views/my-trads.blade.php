@extends('layout')

@section('contain')

    <style>
        ul {
            list-style-type: none;
        }

        li {
            display: inline-block;
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
        <table class="table">
            <tbody>
                @foreach($trads as $trad)
                    <tr>
                        <td>
                            <b>Search Card</b>
                            <ul>
                                <li><img src='{{$trad->card->CardImagePath}}' width="45" height="45"></li>
                            </ul>
                        </td>
                        <td> 
                            <b>Traded Cards</b>
                            <ul>
                                @foreach($trad->cards as $card)
                                    <li><img src='{{$card->CardImagePath}}' width="45" height="45"></li>
                                @endforeach
                            </ul>
                        </td>
                        <td>
                            <b>Traders to contact</b>
                                <ul>
                                    @foreach($trad->getMatchTraders() as $trader)
                                        <li>{{$trader->nick}} ({{$trader->clan}})</li>
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