@extends('layout')

@section('contain')

    <div class="section">
        <h1 class="title is-1">My current Trads</h1>
    </div>

    @auth
        <table class="table is-striped is-fullwidth">
            <thead>
                <tr>
                    <th>Search Card</th>
                    <th>Traded Cards</th>
                    <th>Traders to contact</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($trads as $trad)
                    <tr>
                        <th><img src='{{$trad->card->CardImagePath}}' width="45" height="45"></th>
                        <th> 
                            @foreach($trad->cards as $card)
                                <img src='{{$card->CardImagePath}}' width="45" height="45">
                            @endforeach
                        </th>
                        <th>
                            @foreach($trad->getMatchTraders() as $trader)
                                <li>{{$trader->nick}} ({{$trader->clan}})</li>
                            @endforeach
                        </th>
                        <th>
                        Faire button delete
                        </th>
                    </tr>
                @endforeach  
            </tbody>
        </table>
    @endauth
@endsection