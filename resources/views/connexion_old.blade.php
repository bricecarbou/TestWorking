@extends('layout')

@section('contain')
    <form action="/connexion" method="post" class="section">
        {{ csrf_field() }}

        <div class="field">
            <label class="label">Nick</label>
            <div class="control">
                <input class="input" type="nick" name="nick" value="{{ old('nick') }}">
            </div>
            @if($errors->has('nick'))
                <p class="help is-danger">{{ $errors->first('nick') }}</p>
            @endif
        </div>

        <div class="field">
            <label class="label">Password</label>
            <div class="control">
                <input class="input" type="password" name="password">
            </div>
            @if($errors->has('password'))
                <p class="help is-danger">{{ $errors->first('password') }}</p>
            @endif
        </div>

        <div class="field">
            <div class="control">
                <button class="button is-link" type="submit">Connexion</button>
            </div>
        </div>
    </form>
@endsection