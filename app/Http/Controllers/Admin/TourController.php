<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TourRequest;
use App\Models\Tour;
use App\Traits\HotelTrait;
use Illuminate\Http\Request;
use DB;

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

    public function store(TourRequest $request) {

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
//            dd($ex);
            return redirect()->route('admin.tours')->with(['error' => 'Entering data wrong, try again later']);
        }

    }

    public function edit($tour_id) {

        $tour = Tour::find($tour_id);

        if (!$tour) {
            return redirect()->route('admin.tours')->with(['error'=>'This Tours Not Found']);
        }
        return view('admin.tours.edit',compact('tour'));

    }

    public function update($tour_id,TourRequest $request)
    {
        try {
            $tour = Tour::find($tour_id);

            if (!$tour) {
                return redirect()->route('admin.tours.edit', $tour_id)->with(['error' => 'This Tours Not Found']);
            }

            $tour->update($request->except('_token'));

            return redirect()->route('admin.tours')->with(['success' => 'Tours Updated Successfully']);

        } catch(\Exception $ex){

            return redirect()->route('admin.tours')->with(['error' => 'Their is Error Please, try again later']);

        }

    }

    public function delete($tour_id) {
        try {
            $tour = Tour::find($tour_id);
            if (!$tour)
                return redirect()->route('admin.tours.edit', $tour_id)->with(['error'=>'Tours You Want To Delete Not Found']);

            $tour->delete();
            return redirect()->route('admin.tours')->with(['success' => 'Tours Deleted Successfully']);

        } catch (\Exception $ex) {
            return redirect()->route('admin.tours')->with(['error' => 'Their is Error Please, try again later']);

        }

    }
}
