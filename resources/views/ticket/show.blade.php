@extends('layouts.apps')

@section('title')
Detail InTicket
@stop

<style>
    .Icon {font-size: 16px; color: #999}
    .IconI {font-size: 15px; vertical-align: middle}
    .titleSpan {font-size: 16px}
</style>

@section('content')

    @foreach($ticket as $tickets)

        <h3>DETAIL&ensp;<span class="Icon"></span> <span class="titleSpan">{{ $tickets->title }}</span></h3>
        <hr>
        <div class="form-group">
            <label for="title" class="control-label">Title</label>
            <input type="text" class="form-control" name="title" value="{{ $tickets->title }}" readonly>
        </div>
        <div class="form-group">
            <label for="description" class="control-label">Description</label>
            <input type="text" class="form-control" name="description" value="{{ $tickets->description }}" readonly>
        </div>
        <div class="form-group">
            <label for="theatre" class="control-label">Theatre</label>
            <input type="text" class="form-control" name="theatre" value="{{ $tickets->kode }}&ensp;{{ $tickets->location }}" readonly>
        </div>
        <a href="{{ route('ticket.index') }}" class="btn btn-default">Back <span class="IconI"></span></a>
    
    @endforeach

@stop