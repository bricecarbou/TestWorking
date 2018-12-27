@extends('layout')

@section('contain')
    <div class="section">
        <h1 class="title is-1">{{ $nick }}</h1>
        <b>clan: {{auth()->user()->clan}}</b>
        <br />
        <b>#{{auth()->user()->cr_key}}</b>
        <br />
        <b>Discord id: {{ $discord_id }}</b>
        <p>You are connected.</p>

        <a href="/disconnect" class="button">Disconnect</a>
    </div>
    <form class="section" action="/modify-clan" method="post">
        {{ csrf_field() }}

        <div class="field">
            <label class="control-label col-sm-4" for="text">Modify my Clan:</label>
            <select  class="question_type form-control" name="clan" >
                <option value="GEFR" > Great Escape FR </option>
                <option value="GE2" >Great Escape 2</option>
                <option value="BOMG3" >Boreal MG 3</option>
            </select>
        </div>
        <div class="field">
            <div class="control">
                <button class="button is-link" type="submit">Modify my Clan</button>
            </div>
        </div>
    </form>

   <form class="section" action="/modify-cr_key" method="post">
        {{ csrf_field() }}

        <div class="field">
            <label class="label">My new Clash Royale ID</label>
            <div class="control">
                <input class="input" name="cr_key">
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button class="button is-link" type="submit">Modify my id</button>
            </div>
        </div>
    </form>

    <form class="section" action="/modify-discord_id" method="post">
        {{ csrf_field() }}

        <div class="field">
            <label class="label">My discord ID (recove from discord with command \@nickname#id)</label>
            <div class="control">
                <input class="input" name="discordID">
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button class="button is-link" type="submit">Modify my Dicord ID</button>
            </div>
        </div>
    </form>

    <form class="section" action="/modify-password" method="post">
        {{ csrf_field() }}

        <div class="field">
            <label class="label">New password</label>
            <div class="control">
                <input class="input" type="password" name="password">
            </div>
            @if($errors->has('password'))
                <p class="help is-danger">{{ $errors->first('password') }}</p>
            @endif
        </div>

        <div class="field">
            <label class="label">Password (confirmation)</label>
            <div class="control">
                <input class="input" type="password" name="password_confirmation">
            </div>
            @if($errors->has('password_confirmation'))
                <p class="help is-danger">{{ $errors->first('password_confirmation') }}</p>
            @endif
        </div>

        <div class="field">
            <div class="control">
                <button class="button is-link" type="submit">Modify my password</button>
            </div>
        </div>
    </form>
@endsection