@extends('layouts.apps')

@section('title')
    Dashboard
@stop
<style>
    ::selection {
        background-color: #fff;
        color: #222;
    }
    .detail {
        font-size: 15px;
        color: #cbcbcb;
        transition: .3s ease-in-out;
        /* cursor: pointer; */
    }
    /* .detail:hover {
        text-decoration: none;
        color: #6bd5e1;
    } */
    tr {
        color: #6bd5e1;
        /* color: #2b9dff; */
    }
    .icon {
        font-size: 14px;
    }
    .create {
        position: relative;
        bottom: 20px;
    }
    img {
        width: 225px;
    }
</style>

@section('content')
    <img src="{{ asset('img/tickets.png') }}" alt="Ticket">
    <br><br><br>
    @if($message = Session::get('Message'))
        <div class="alert alert-success martop-sm" id="successMessage">
            <p>{{$message}}</p>
        </div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <!-- ⚠⠇⮿ -->
        @foreach($ticket as $tickets)
        <tr>
            <td>{{ $tickets->id }}</td>
            <!-- <td><a class="detail" href="{{ route('ticket.show', $tickets->id) }}">{{ $tickets->title }}</a></td> -->
            <td><span class="detail">{{ $tickets->title }}</span></td>
            <td>
                <form action="{{ route('ticket.destroy', $tickets->id) }}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <a href="{{ route('ticket.show', $tickets->id) }}" class="btn btn-info btn-sm">DETAIL <span class="icon">ⓘ</span></a>
                    <a href="{{ route('ticket.edit', $tickets->id) }}" class="btn btn-warning btn-sm">EDIT <span class="icon"></span></a>
                    <button type="submit" class="btn btn-danger btn-sm">DELETE <span class="icon">⮿</span></button>
                </form>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    <a class="btn btn-success btn-sm create" href="{{ route('ticket.create') }}">ADD TICKET ++</a>
@stop