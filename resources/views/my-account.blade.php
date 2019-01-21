@extends('layout')

@section('contain')

<p style="text-align:center"><script src="//pubdirecte.com/script/banniere.php?said=126532"></script>

    <div class="section">
        <h1 class="title is-1">{{ auth()->user()->nick }}</h1>
        <b>clan: {{auth()->user()->clan->name}}</b>
        <br />
        <b>role: {{auth()->user()->role->name}}</b>
        <br />
        <b>#{{auth()->user()->cr_key}}</b>
        <br />
        <b>Discord id: {{ auth()->user()->discord_id }}</b>
        <br />
        <b>Email: {{ auth()->user()->email }} </b>
        <br />
        <form class="section" action="/modify-mailling" method="post">
        {{ csrf_field() }}
        {{dd(auth()->user()->mailling)}}
        
            @if (auth()->user()->mailling === 'true')
                    <input type="checkbox" name="mailling" checked>Do you want receive mail when a trade is possible? 
            @else
                    <input type="checkbox" name="mailling">Do you want receive mail when a trade is possible? 
            @endif
            <button class="button is-link" type="submit">Modify</button>
        </form>
        <br />
        <p>You are connected.</p>

        <a href="/disconnect" class="button">Disconnect</a>
    </div>

    <form class="section" action="/modify-clan" method="post">
        {{ csrf_field() }}

        <div class="field">
            <label class="control-label col-sm-4" for="text">Modify my Clan:</label>
            <select  class="question_type form-control" name="clan" >
                @foreach (\App\Clan::clanOfMyGroup() as $clan)
                    <option value="{{$clan->id}}" > {{$clan->name}} </option>
                @endforeach
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
            <label class="label">My Clash Royale ID</label>
            <div class="control">
                <input class="input" name="cr_key" value={{auth()->user()->cr_key}} maxlength="10">
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button class="button is-link" type="submit">Modify my id</button>
            </div>
        </div>

        <div class="control">
            <a class="button is-link" href="/error_CR_id">Help</a>
        </div>
    </form>

    <form class="section" action="/modify-discord_id" method="post">
        {{ csrf_field() }}

        <div class="field">
            <label class="label">My discord ID, only the numbers (tip in discord this command \@user)</label>
            <div class="control">
                <input class="input" name="discordID" value={{auth()->user()->discord_id}}>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button class="button is-link" type="submit">Modify my Dicord ID</button>
            </div>
        </div>

        <div class="control">
            <a class="button is-link" href="/help_discordid">Help</a>
        </div>
    </form>

    <form class="section" action="/modify-group" method="post">
        {{ csrf_field() }}

        <div class="field">
            <label class="control-label col-sm-4" for="text">Modify my Group: (Warning this option repass your role to new in a new group)</label>
            <select  class="question_type form-control" name="group" >
                @foreach (\App\ClanGroup::all()->forget(0)->sortBy('name') as $group)
                    <option value="{{$group->id}}" > {{$group->name}} </option>
                @endforeach
            </select>
        </div>
        <div class="field">
            <div class="control">
                <button class="button is-link" onclick="return confirm('Are you sure?')" type="submit">Modify my Group</button>
            </div>
        </div>
    </form>

    <form class="section" action="/modify-email" method="post">
        {{ csrf_field() }}

        <div class="field">
            <label class="label">Enter my email for password recovery</label>
            <div class="control">
                <input class="input" name="email">
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button class="button is-link" type="submit">Modify my email</button>
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



    <div class="control">
        <a class="button is-link" onclick="return confirm('Are you sure?')" href="/delete_my_account">Delete my account</a>
    </div>


@endsection