@extends('layouts.apps')

@section('title')
    CREATE
@stop

@section('content')
    <form action="{{ route('ticket.store') }}" method="post">
        {{ csrf_field() }}
        <h2>CREATE InTicket</h2>
        <hr>
        <div class="form-group">
            <label for="title" class="control-label">Title</label>
            <input type="text" class="form-control" name="title" placeholder="Title...">
        </div>
        <div class="form-group">
            <label for="description" class="control-label">Description</label>
            <input type="text" class="form-control" name="description" placeholder="Description...">
        </div>
        <div class="form-group">
            <label for="theatre_id" class="control-label">Theater</label>
            <select name="theatre_id"class="form-control">
                @foreach($theatre as $theatres)
                    <option value="{{ $theatres->id }}">{{ $theatres->theatere}}&ensp;{{ $theatres->location }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-info">Create</button>
            <a href="{{ route('ticket.index') }}" class="btn btn-default">Back</a>
        </div>
    </form>
@stop