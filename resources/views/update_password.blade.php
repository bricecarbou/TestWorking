@extends('layout')

@section('contain')

    <form method="post" action="/update_password">
        {{ csrf_field() }}

        <input type="password" name="password" />
        <input type="password" name="password_confirmation" />
        <input type="text" value="{{$trader->id}}" name="trader_id"/>
        <button type="submit"> Submit </button>
    </form>
@endsection
