@extends('layouts.apps')

@section('title')
{{ $ticket->title }}
@stop

<style>
    .Icon {font-size: 16px; color: #999}
    .IconI {font-size: 14px; vertical-align: middle}
    .titleSpan {font-size: 16px}
</style>

@section('content')
    <form action="{{ route('ticket.update', $ticket->id) }}" method="post">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <h3>EDIT&ensp;<span class="Icon"></span> <span class="titleSpan">{{ $ticket->title }}</span></h3>
        <hr>
        <div class="form-group">
            <label for="title" class="control-label">Title</label>
            <input type="text" class="form-control" name="title" placeholder="Title..." value="{{ $ticket->title }}">
        </div>
        <div class="form-group">
            <label for="description" class="control-label">Description</label>
            <input type="text" class="form-control" name="description" placeholder="Description..." value="{{ $ticket->description }}">
        </div>
        <div class="form-group">
            <label for="theatre_id" class="control-label">Theater</label>
            <select name="theatre_id"class="form-control">
                @foreach($theatre as $theatres)
                    <option value="{{ $theatres->id }}" {{ ($ticket->theatre_id) == $theatres->id ? "selected='true'" : "" }}>{{ $theatres->theatere}}&ensp;{{ $theatres->location }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-info"><span class="IconI"></span> Edit</button>              
            <a href="{{ route('ticket.index') }}" class="btn btn-default">Back <span class="IconI"></span></a>
        </div>
    </form>
@stop