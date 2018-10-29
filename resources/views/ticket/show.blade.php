@extends('layouts.apps')

@section('title')
 DETAIL
@stop

<style>
    .titleSpan {font-size: 20px;}
</style>

@section('content')

    @foreach($ticket as $tickets)

        <h3>DETAIL | <span class="titleSpan">{{ $tickets->title }}</span></h3>
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
        <a href="{{ route('ticket.index') }}" class="btn btn-info martop-sm">Back</a>
    
    @endforeach

@stop