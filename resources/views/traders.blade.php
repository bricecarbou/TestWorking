@extends('layout')

@section('contain')
    @auth
        <div class="section">
            <h1 class="title is-1">List of the Traders</h1>
        </div>

        @if (auth()->check() AND (auth()->user()->role->name== 'admin'))
            <form class="section" action="/traders" method="post">
            {{ csrf_field() }}
                <div class="block">
                    <label class="control-label col-sm-4" for="text">Filter on Clan:</label>
                    <select  class="question_type form-control" name="clan_id" >
                        <option value="all" > All </option>
                        @foreach (\App\Clan::orderBy('name', 'asc')->get() as $clan)
                            <option value="{{$clan->id}}" > {{$clan->name}} </option>
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
                            <td>
                                <b>Clan</b>
                                    <ul>
                                        <li>{{$trader->clan->name}}</li>
                                    </ul>
                            </td>
                           @if (auth()->check() AND ((auth()->user()->role->name== 'admin') OR (auth()->user()->role->name == 'leader')))
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
                                </td>
                                <td>
                                    <br />
                                    <div class="control">
                                        <a class="button is-link" href="/admin_trader_account/{{$trader->id}}/update">Update</a>
                                    </div>
                                    <div class="control">
                                        <a class="button is-link" onclick="return confirm('Are you sure?')" href="/admin_trader_account/{{$trader->id}}/delete" >Delete</a>
                                    </div>
                                </td>
                            @endif
                        </tr>
                    @endforeach  
                </tbody>
            </table>
        </form>
    @endauth
@endsection