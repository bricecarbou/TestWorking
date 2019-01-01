@extends('layout')

@section('contain')

    <div class="section">
        <h1 class="title is-1">{{ $trader->nick }}</h1>
        <b>clan: {{$trader->clan}}</b>
        <br />
        <b>#{{$trader->cr_key}}</b>
        <br />
        <b>Discord id: {{ $discord_id }}</b>

    </div>
    <form class="section" action="/admin_modify-clan/{{$trader->id}}" method="post">
        {{ csrf_field() }}

        <div class="field">
            <label class="control-label col-sm-4" for="text">Modify the Clan:</label>
            <select  class="question_type form-control" name="clan" >
                <option value="GEFR" > Great Escape FR </option>
                <option value="GE2" >Great Escape 2</option>
                <option value="BOMG3" >Boreal MG 3</option>
            </select>
        </div>
        <div class="field">
        <div class="control">
                <button class="button is-link" type="submit">Modify the Clan</button>
            </div>
        </div>
    </form>

   <form class="section" action="/admin_modify-cr_key/{{$trader->id}}" method="post">
        {{ csrf_field() }}

        <div class="field">
            <label class="label">The Clash Royale ID</label>
            <div class="control">
                <input class="input" name="cr_key">
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button class="button is-link" type="submit">Modify the id</button>
            </div>
        </div>
    </form>

    <form class="section" action="/admin_modify-discord_id/{{$trader->id}}" method="post">
        {{ csrf_field() }}

        <div class="field">
            <label class="label">The discord ID, only the numbers (tip in discord this command \@user)</label>
            <div class="control">
                <input class="input" name="discordID">
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button class="button is-link" type="submit">Modify the Dicord ID</button>
            </div>
        </div>
    </form>
@endsection