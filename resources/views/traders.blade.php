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

        .block {
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
            <h1 class="title is-1">List of the Traders</h1>
        </div>

        @if (auth()->check() AND ((auth()->user()->role->name== 'admin') OR (auth()->user()->role->name == 'leader')))
            <form class="section" action="/traders" method="post">
            {{ csrf_field() }}
                <div class="block">
                    <label class="control-label col-sm-4" for="text">Filter on Clan:</label>
                    <select  class="question_type form-control" name="clan_id" >
                        <option value="all" > All </option>
                        @foreach (\App\Clan::clanOfMyGroup() as $clan)
                            <option value="{{$clan->id}}" > {{$clan->name}} </option>
                        @endforeach
                    </select>
                </div>     
                <div class="block">
                    <label class="control-label col-sm-4" for="text">Filter on Role:</label>
                    <select  class="question_type form-control" name="role" >
                        <option value="all"> All </option>
                        @foreach(App\Role::all()->forget(0) as $role)
                            <option value="{{$role->id}}">{{$role->name}}</option>
                        @endforeach
                    </select>
                </div>   
                <div class="block">
                    <div class="control">
                        <button class="button is-link" type="submit">Filter</button>
                    </div>
                </div>
                <br clear="both" />
            </form>
        @endif 


        <form class="section" action="/admin_trader_account" method="post">
            <table class="table">
                <tbody>
                    @foreach($traders->sortBy('nick') as $trader)
                        <tr>
                            <td>
                                <b>Trader</b>
                                    <ul>
                                        <li>{{$trader->nick}}</li>
                                    </ul>
                            </td>
                            @if (auth()->check() AND ((auth()->user()->role->name== 'admin') OR (auth()->user()->role->name == 'leader')))
                                <td>
                                    <div class="control">
                                        <a class="button is-link" href="/admin_trader_account/{{$trader->id}}/update">Update</a>
                                    </div>
                                    <br />
                                    <div class="control">
                                        <a class="button is-link" onclick="return confirm('Are you sure?')" href="/admin_trader_account/{{$trader->id}}/delete" >Delete</a>
                                    </div>
                                </td>
                            @endif     
                            <td>
                                <b>Clan</b>
                                    <ul>
                                        <li>{{$trader->clan->name}}</li>
                                    </ul>
                            </td>
                           @if (auth()->check() AND ((auth()->user()->role->name== 'admin') OR (auth()->user()->role->name == 'leader')))
                                <td>
                                    <b>Role</b>
                                        <ul>
                                            <li>{{$trader->role->name}}</li>
                                        </ul>
                                </td>
                                <td>
                                    <b>Cr Key</b>
                                        <ul>
                                            <li>{{$trader->cr_key}}</li>
                                        </ul>
                                </td>
                                <td>
                                    <b>Discord ID</b>
                                        <ul>
                                            <li>{{$trader->discord_id}}</li>
                                        </ul>
                                        <br />
                                        <br />
                                </td>

                            @endif
                        </tr>
                    @endforeach  
                </tbody>
            </table>
        </form>
    @endauth
@endsection