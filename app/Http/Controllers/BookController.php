<?php

namespace App\Http\Controllers;
use App\Book;
use App\Category;
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
    public function biblio()
    {
        return view('Book.biblioteca', [
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
        return view('Book.create', [
            'categories' => Category::all()
        ]);
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
      
            'titulo' => 'required',
            'autor' => 'required',
            'agno' => 'required|numeric',
            'isbn' => 'required',
            'img' => 'required',

        ]);
        $report= new Book();
        $report->titulo = $request->get('titulo');
        $report->img = $request->get('img');
        $report->autor = $request->get('autor');
        $report->agno = $request->get('agno');
        $report->isbn = $request->get('isbn');
        $report->disponibles = $request->get('disponibles');             
        $report->category_id = $request->get('category');             
                
        $report->save();
        return redirect('/books');
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
        $report = Book::findOrFail($id);
        return view('Book.edit', [
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
        $report = Book::findOrFail($id);
        $report->titulo = $request->get('titulo');
        $report->img = $request->get('img');
        $report->autor = $request->get('autor');
        $report->agno = $request->get('agno');
        $report->isbn = $request->get('isbn');
        $report->disponibles = $request->get('disponibles');  
        $report->category_id = $request->get('category');     
        $report->save();
        return redirect('/books');  
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
        return redirect('/books');
    }
    public function confirmDelete($id){
        // dd('confirmDelete'. $id); 
        $report = Book::findOrFail($id);   
        return view('Book.delete', [
            'report' => $report
        ]);  
    }
    public function confirm($id){
        // dd('confirmDelete'. $id); 
        $report = Book::findOrFail($id);   
        return view('ReserveReport.create', [
            'report' => $report
        ]);  
        
    }
    public function confirmm($id){
        // dd('confirmDelete'. $id); 
        return view('ReserveReport.create');  
        
    }
}
