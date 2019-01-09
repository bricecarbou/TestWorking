@extends('layout')

@section('contain')
    <div class="section">
        <h1 class="title is-1">Group Management</h1>

        @if (auth()->check() AND auth()->user()->role->name === 'admin')
            <form action="/admin_new_group" method="post">
                {{ csrf_field() }}

                <div class="field">
                    <label class="label">Create a new group clans</label>
                    <div class="control">
                        <input class="input" name="group_name" placeholder="Group Name">
                    </div>
                    @if($errors->has('group_name'))
                        <p class="help is-danger">{{ $errors->first('group_name') }}</p>
                    @endif
                </div>

                <div class="field">
                    <div class="control">
                        <button onclick="return confirm('Are you sure?')" class="button is-link" type="submit">Register</button>
                    </div>
                </div>
            </form>   

            <form action="/admin_delete_group" method="post">
                {{ csrf_field() }}

                <div class="field">
                    <label class="label">Delete a group clan</label>
                    <select  class="question_type form-control" name="group" >
                        @foreach (\App\ClanGroup::orderBy('name', 'asc')->get() as $clan)
                            <option value="{{$clan->id}}" > {{$clan->name}} </option>
                        @endforeach
                    </select>
                </div>

                <div class="field">
                    <div class="control">
                        <button onclick="return confirm('Are you sure?')" class="button is-link" type="submit">Delete</button>
                    </div>
                </div>
            </form>     
        @endif
    </div>
@endsection