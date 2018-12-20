@extends('layout')


@section('contain')
    <form action="/subscribe" method="post">
        {{ csrf_field() }}


        <div class="field">
            <label class="label">Nick Name</label>
            <div class="control">
              <input class="input" type="nick" name="nick" value="{{ old('nick') }}">
            </div>
            @if($errors->has('nick'))
              <p class="help is-danger">{{ $errors->first('nick') }}</p>
            @endif
        </div>

        <div class="field">
            <label class="label">CR key (without the #)</label>
            <div class="control">
              <input class="input"  name="cr_key" value="{{ old('cr_key') }}">
            </div>
            @if($errors->has('cr_key'))
              <p class="help is-danger">{{ $errors->first('cr_key') }}</p>
            @endif
        </div>

        <p><label class="control-label col-sm-4" for="text">Clan:</label>
            <select  class="question_type form-control" name="clan" >
              <option value="GEFR" > Great Escape FR </option>
              <option value="GE2" >Great Escape 2</option>
            </select>
        </p>


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
                <button class="button is-link" type="submit">Subscribe</button>
            </div>
        </div>

    </form>
@endsection
