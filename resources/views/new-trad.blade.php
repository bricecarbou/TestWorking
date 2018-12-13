@extends('layout')

@section('contain')
    <div class="section">
        <h1 class="title is-1">New Trad</h1>
    </div>

    <form class="section" action="/new-trad" method="post">
        {{ csrf_field() }}

        <div class="field">
            <label class="label">Select the Card you want</label>
            // TODO recuperer la liste des cartes dans la BD et l'afficher. Faire en selectionner une
        </div>

        <div class="field">
            <label class="label">Select the Cards to trade</label>
            // TODO recuperer la liste des cartes dans la BD et l'afficher. Faire en selectionner plusieurs
        </div>

        <div class="field">
            <div class="control">
                <button class="button is-link" type="submit">Create the new Trad</button>
            </div>
        </div>
    </form>
@endsection