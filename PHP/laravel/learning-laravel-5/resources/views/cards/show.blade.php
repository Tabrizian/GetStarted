@extends('app')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h1>{{ $card->title }}</h1>


            <ul class="list-group">
                @foreach($card->notes as $note)
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-md-6">
                                {{ $note->body }}
                            </div>
                            <div class="col-md-offset-3 col-md-2">
                                <a href="#">{{ $note->user->username }}</a>
                            </div>
                            <div class="col-md-1">
                                <a href="/notes/{{ $note->id }}/edit">Edit</a>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>

            <hr>

            <h3>Add a new note</h3>
            <form method="post" action="/cards/{{ $card->id }}/notes">
                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                <div class="form-group">
                    <textarea name="body" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Add Note</button>
                </div>
            </form>

        </div>
    </div>
@stop
