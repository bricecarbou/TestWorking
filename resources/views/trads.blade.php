@extends('layout')

@section('contain')

    @auth
        <div class="section">
            <h1 class="title is-1">List of the Trads</h1>
        </div>

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