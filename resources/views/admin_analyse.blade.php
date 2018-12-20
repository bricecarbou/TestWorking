@extends('layout')

@section('contain')
    <div class="section">
        <h1 class="title is-1">Admin Page Analysis</h1>

        @if (auth()->check() AND auth()->user()->nick === 'admin')
                <div class="field">
                    <label class="label">Trader</label>
                        @foreach(App\Trader::all() as $trader)

                            <ul><li>
                                <div class="control">
                                    {{$trader->nick}} > {{ $trader->clan }}
                                    <button class="button is-link" name="btn_Delete{{$trader->id}}" >Delete</button>
                                </div>
                                <br />
                            </li></ul>
                        @endforeach
                    </select>
                </div>
        @endif
    </div>
@endsection