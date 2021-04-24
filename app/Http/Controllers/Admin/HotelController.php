<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\HotelRequest;
use App\Models\Hotel;
use App\Traits\HotelTrait;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    use HotelTrait;
    public function index() {
        $hotels = Hotel::select()->paginate(PAGINATION_COUNT);  // to select datat from database and send to index page
        return view('admin.hotels.index',compact('hotels'));
    }
    public function create() {

        return view('admin.hotels.create');
    }

    public function store(HotelRequest $request) {

        try {
            $filePath = "";
            if ($request->has('hot_image')) {
                $filePath = $this->saveImages($request->hot_image,'Images/Hotels/');
            }

            Hotel::create([
                'hot_image' => $filePath,
                'hot_name' => $request ->hot_name,
                'hot_price' => $request ->hot_price,
                'hot_details' => $request ->hot_details,
                'hot_type' =>$request ->hot_type,
                'hot_address' => $request ->hot_address,
//                'latitude'=>$request->latitude,  // هنا بقوله مكانك هذا علي الخريطه عايز تعدله ام لا
//                'longitude'=>$request->longitude,
            ]);

            return redirect()->route('admin.hotels')->with(['success' => 'Hotels Added Successfully']);

        } catch(\Exception $ex) {
//            dd($ex);
            return redirect()->route('admin.hotels')->with(['error' => 'Entering data wrong, try again later']);
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
