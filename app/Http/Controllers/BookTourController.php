<?php

namespace App\Http\Controllers;

use App\Models\BookTour;
use App\Models\Tour;
use Illuminate\Http\Request;

class BookTourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request )
    {
        //
        $request->validate([
            'book_date' => 'required | date',
        ]);
        $input = $request->all();
        
        $input['user_id'] = auth()->user()->id;
        $input['tour_id'] = (int)$input['id'];
        //dd($input);

        if(BookTour::find($input['user_id']) == null && BookTour::find($input['tour_id']) == null )
        {
          BookTour::create($input);
          return redirect()->route('tours.index');
        }
        else{
        return redirect()->route('tours.show' ,  $input['tour_id']);
        }

        



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BookTour  $bookTour
     * @return \Illuminate\Http\Response
     */
    public function show(BookTour $bookTour)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BookTour  $bookTour
     * @return \Illuminate\Http\Response
     */
    public function edit(BookTour $bookTour)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BookTour  $bookTour
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BookTour $bookTour)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BookTour  $bookTour
     * @return \Illuminate\Http\Response
     */
    public function destroy(BookTour $bookTour)
    {
        //
    }


 
}
