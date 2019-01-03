@extends('layout')

@section('contain')
    @auth
        <div class="section">
            <h1 class="title is-1">List of the Traders</h1>
        </div>


        <form class="section" action="/admin_trader_account" method="post">
            <table class="table">
                <tbody>
                    @foreach($traders as $trader)
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
                                        <li>({{$trader->clan}})</li>
                                    </ul>
                            </td>
                           @if (auth()->check() AND auth()->user()->nick === 'admin')
                                <td>
                                    <b>Cr Key</b>
                                        <ul>
                                            <li>{{$trader->cr_key}}</li>
                                        </ul>
                                </td>
                                <td>
                                    <b>Discord ID</b>
                                        <ul>
                                            <li>{{ \App\Trader::discordID($trader->id)}}</li>
                                        </ul>
                                </td>
                                <td>
                                    <br />
                                    <div class="control">
                                        <a class="button is-link" href="/admin_trader_account/{{$trader->id}}">Update</a>
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