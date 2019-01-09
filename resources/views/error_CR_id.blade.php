@extends('layout')

@section('contain')

    <style>
        .imageCentre {text-align:center}
    </style>

    <div class="title">
        <br />
            <p style="text-align:center">Error on your Clash Royale ID, please enter a correct tag ID</p>
        <br />
        <div class="control">
            <a class="button is-link" href="/my-account">Back</a>
        </div>
        <div class="imageCentre">
            ----------------------
            <br />Step 1
            <br /><img src="{{ asset('img/errors/profil.png') }}" >
            <br />----------------------
            <br />Step 2
            <br /><img src="{{ asset('img/errors/cr_id.png') }}" >
        </div>
        <div class="imageCentre">
            ----------------------
            <br />Step 3
            <br /><img src="{{ asset('img/errors/account.png') }}" >
            <br />----------------------
            <br />Step 4
            <br /><img src="{{ asset('img/errors/modify_cr_id.png') }}" >
        </div>
    </div>
    <div class="control">
        <a class="button is-link" href="/my-account">Back</a>
    </div>
@endsection
