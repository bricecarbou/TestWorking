@extends('layout')

@section('contain')

    <div class="section">
        <h1 class="title is-1">{{ $trader->nick }}</h1>
        <b>clan: {{$trader->clan->name}}</b>
        <br />
        <b>#{{$trader->cr_key}}</b>
        <br />
        <b>Role: {{$trader->role->name}}
        <br />
        <b>Discord id: {{ $trader->discord_id }}</b>

    </div>

    <form class="section" action="/admin_modify-role/{{$trader->id}}" method="post">
        {{ csrf_field() }}

        <div class="field">
            <label class="label">Modify the role</label>
            <select  class="question_type form-control" name="role" >
                @foreach (App\Role::all()->forget(0) as $role)
                    <option value="{{$role->id}}" > {{$role->name}} </option>
                @endforeach
            </select>
        </div>

        <div class="field">
            <div class="control">
                <button class="button is-link" type="submit">Modify the role</button>
            </div>
        </div>
    </form>

    <form class="section" action="/admin_modify-clan/{{$trader->id}}" method="post">
        {{ csrf_field() }}

        <div class="field">
            <label class="control-label col-sm-4" for="text">Modify the Clan:</label>
            <select  class="question_type form-control" name="clan" >
                @foreach (\App\Clan::clanOfMyGroup() as $clan)
                    <option value="{{$clan->id}}" > {{$clan->name}} </option>
                @endforeach
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