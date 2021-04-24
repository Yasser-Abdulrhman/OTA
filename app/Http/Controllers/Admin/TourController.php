<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TourRequest;
use App\Models\Tour;
use App\Traits\HotelTrait;
use Illuminate\Http\Request;

class TourController extends Controller
{
    use HotelTrait;
    public function index() {
        $tours = Tour::select()->paginate(PAGINATION_COUNT);  // to select datat from database and send to index page
        return view('admin.tours.index',compact('tours'));
    }
    public function create() {

        return view('admin.tours.create');
    }

    public function store(Request $request) {

//        dd($request);
        try {
            $filePath = "";
            if ($request->has('tour_image')) {
                $filePath = $this->saveImages($request->tour_image,'Images/Tours/');
            }

            Tour::create([
                'tour_image' => $filePath,
                'tour_name' => $request ->tour_name,
                'tour_price' => $request ->tour_price,
                'tour_discount' =>$request ->tour_discount,
                'tour_details' => $request ->tour_details,
                'start_date' =>$request ->start_date,
                'end_date' =>$request ->end_date,
                'tour_address' => $request ->tour_address,
//                'latitude'=>$request->latitude,  // هنا بقوله مكانك هذا علي الخريطه عايز تعدله ام لا
//                'longitude'=>$request->longitude,
            ]);

            return redirect()->route('admin.tours')->with(['success' => 'Tours Added Successfully']);

        } catch(\Exception $ex) {
            dd($ex);
            return redirect()->route('admin.tours')->with(['error' => 'Entering data wrong, try again later']);
        }

    }

    public function edit($hotel_id) {

        $hotel = Hotel::find($hotel_id);

        if (!$hotel) {
            return redirect()->route('admin.hotels')->with(['error'=>'This Hotels Not Found']);
        }
        return view('admin.hotels.edit',compact('hotel'));

    }

    public function update($hotel_id,HotelRequest $request)
    {
        try {
            $hotel = Hotel::find($hotel_id);

            if (!$hotel) {
                return redirect()->route('admin.hotels.edit', $hotel_id)->with(['error' => 'This Hotels Not Found']);
            }

            $hotel->update($request->except('_token'));

            return redirect()->route('admin.hotels')->with(['success' => 'Hotels Updated Successfully']);

        } catch(\Exception $ex){

            return redirect()->route('admin.hotels')->with(['error' => 'Their is Error Please, try again later']);

        }

    }

    public function delete($hotel_id) {
        try {
            $hotel = Hotel::find($hotel_id);
            if (!$hotel)
                return redirect()->route('admin.hotels.edit', $hotel_id)->with(['error'=>'Hotels You Want To Delete Not Found']);

            $hotel->delete();
            return redirect()->route('admin.hotels')->with(['success' => 'Hotels Deleted Successfully']);

        } catch (\Exception $ex) {
            return redirect()->route('admin.hotels')->with(['error' => 'Their is Error Please, try again later']);

        }

    }
}
