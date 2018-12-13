@extends('layout')

@section('contain')
    <div class="section">
        <h1 class="title is-1">{{ $nick }}</h1>

        <p>You are connected.</p>

        <a href="/disconnect" class="button">Disconnect</a>
    </div>

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