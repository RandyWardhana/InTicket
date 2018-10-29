<?php

namespace App\Http\Controllers;
use App\Ticket;
use App\Theatre;
use Illuminate\Http\Request;
use DB;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ticket = Ticket::all();
        return view('ticket.index', compact('ticket'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $theatre = Theatre::all();
        return view('ticket.create', compact('theatre'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ticket = Ticket::create($request->all());
        return redirect()->route('ticket.index')->with('Message', 'Success Create Ticket!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $ticket = Ticket::findOrFail($id);
        // $theatre = Theatre::all();
        // return view('ticket.show', compact('ticket', 'theatre'));

        // $ticket = Ticket::findOrFail($id);
        $ticket = DB::table('tickets')->where('tickets.id', $id)
            ->join('theatres', 'tickets.theatre_id','=','theatres.id')
            ->select('tickets.*', 'theatres.theatere AS kode', 'theatres.location AS location')
            ->get();
        return view('ticket.show', compact('ticket'));
    }   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ticket = Ticket::findOrFail($id);
        $theatre = Theatre::all();
        return view('ticket.edit', compact('ticket', 'theatre'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ticket = Ticket::findOrFail($id)->update($request->all());
        return redirect()->route('ticket.index')->with('Message', 'Success Update Ticket!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id 
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ticket = Ticket::findOrFail($id)->delete();
        return redirect()->route('ticket.index')->with('Message', 'Success Delete Ticket!');
    }
}
