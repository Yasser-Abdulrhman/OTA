<?php

namespace App\Http\Controllers;

use App\Models\BookHotel;
use Illuminate\Http\Request;

class BookHotelController extends Controller
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
        //
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
    public function store(Request $request)
    {
        //
        $request->validate([
            'check_in_date' => 'required | date',
            'check_out_date' => 'required | date',
        ]);
        $input = $request->all();
        
        $input['user_id'] = auth()->user()->id;
        $input['hotel_id'] = (int)$input['id'];
        //dd($input);

        if(BookHotel::find($input['user_id']) == null && BookHotel::find($input['hotel_id']) == null )
        {
          BookHotel::create($input);
          return redirect()->route('hotels.index');
        }
        else{
        return redirect()->route('hotels.show' ,  $input['hotel_id']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BookHotel  $bookHotel
     * @return \Illuminate\Http\Response
     */
    public function show(BookHotel $bookHotel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BookHotel  $bookHotel
     * @return \Illuminate\Http\Response
     */
    public function edit(BookHotel $bookHotel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BookHotel  $bookHotel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BookHotel $bookHotel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BookHotel  $bookHotel
     * @return \Illuminate\Http\Response
     */
    public function destroy(BookHotel $bookHotel)
    {
        //
    }
}
