@extends('layout')

@section('contain')

    <style>
        .imageCentre {text-align:center}
    </style>

    <div class="title">
        <br />
            <p style="text-align:center">Recover your Discord ID</p>
        <br />
        <div class="control">
            <a class="button is-link" href="/my-account">Back</a>
        </div>
        <div class="imageCentre">
            ----------------------
            <br />Step 1: write to notify yourself
            <br /><img src="{{ asset('img/discord/Notify.png') }}" >
            <br />----------------------
            <br />Step 2: before to press enter, add \ before the notification
            <br /><img src="{{ asset('img/discord/discord_id.png') }}" >
        </div>
        <div class="control">
            <a class="button is-link" href="/my-account">Back</a>
        </div>
    </div>
@endsection
