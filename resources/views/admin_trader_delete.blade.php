@extends('layout')

@section('contain')

    <div class="section">
        <h1 class="title is-1">Admin Page Analysis</h1>

        <form class="section" action="/admin_trader_delete" method="post">
        {{ csrf_field() }}

            @if (auth()->check() AND auth()->user()->nick === 'admin')
                    <div class="field">
                        <label class="label">Trader</label>
                            @foreach(App\Trader::all() as $trader)
                                <ul><li>
                                    <input type="checkbox" value="{{$trader->id}}" name="btn_traderwantdelete[]" id="cb{{$trader->id}}"/>
                                    {{$trader->nick}} > {{ $trader->clan }}
                                </li></ul>
                            @endforeach
                            <div class="control">
                                <button onclick="return confirm('Are you sure?')" class="button is-link" type="submit" >Delete</button>
                            </div>

                        </select>
                    </div>
            @endif
        </form>
    </div>


@endsection