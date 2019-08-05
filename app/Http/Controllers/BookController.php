<?php

namespace App\Http\Controllers;
use App\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Book.book', [
            'books' => Book::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Book.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validaData = $request->validate([
      
            'dateReserva' => 'required|date|after_or_equal:today',
            'dateEntrega' => 'required|date|after:dateReserva',
            'iduser' => 'required|numeric',

        ]);
        $report= new Reserve();
        $report->iduser = $request->get('iduser');
        $report->book = $request->get('book');
        $report->selectedReserva = $request->get('selectedReserva');
        $report->dateReserva = $request->get('dateReserva');
        $report->dateEntrega = $request->get('dateEntrega');             
        $report->save();
        return redirect('/reserves');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $report = Reserve::findOrFail($id);
        return view('ReserveReport.edit', [
            'report' =>$report
        ]);
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
        $report = Reserve::findOrFail($id);
        $report->iduser = $request->get('iduser');
        $report->book = $request->get('book');
        $report->selectedReserva = $request->get('selectedReserva');
        $report->dateReserva = $request->get('dateReserva');
        $report->dateEntrega = $request->get('dateEntrega');
        $report->save();
        return redirect('/reserves');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $report = Book::findOrFail($id);
        $report->delete();
        return redirect('/reserves');
    }
    public function confirmDelete($id){
        // dd('confirmDelete'. $id); 
        $report = Book::findOrFail($id);   
        return view('ReserveReport.delete', [
            'report' => $report
        ]);  
    }
}
