@extends('layout')

@section('contain')
    <div class="section">
        <h1 class="title is-1">Manage a Group</h1>
        <b>Name of group: {{$group->name}}</b> 
        <br />
        <b>webhook discord: {{$group->webhookurl}}</b> 
    </div>

    <form class="section" action="/admin_Webhookurl/{{$group->id}}" method="post">
        {{ csrf_field() }}
        <div class="field">
            <label class="control-label col-sm-4" for="text">Complete the webhook url:</label>
            <div class="control">
                <input class="input" name="webhookurl">
            </div>
        </div>
        <div class="field">
            <div class="control">
                <button class="button is-link" type="submit">Add the url</button>
            </div>
        </div>
    </form>


    <form class="section" action="/admin_Add_clan/{{$group->id}}" method="post">
        {{ csrf_field() }}

        <div class="field">
            <label class="label">Add a clan</label>
            <div class="control">
                <input class="input" name="clan">
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button class="button is-link" type="submit">Add this clan to the group</button>
            </div>
        </div>
    </form>

   <form class="section" action="/admin_Delete_clan/{{$group->id}}" method="post">
        {{ csrf_field() }}
        <div class="field">
            <label class="control-label col-sm-4" for="text">Delete a Clan:</label>
            <select  class="question_type form-control" name="clan" >
                @foreach (\App\Clan::where('group_id', $group->id)->get() as $clan)
                    <option value="{{$clan->id}}" > {{$clan->name}} </option>
                @endforeach
            </select>
        </div>
        <div class="field">
            <div class="control">
                <button class="button is-link" type="submit">Delete the Clan</button>
            </div>
        </div>
    </form>

@endsection