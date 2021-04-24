<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TourGuideRequest;
use App\Models\TourGuide;
use App\Traits\HotelTrait;
use Illuminate\Http\Request;

class TourGuideController extends Controller
{
    use HotelTrait;
    public function index() {
        $toursGuide = TourGuide::select()->paginate(PAGINATION_COUNT);  // to select datat from database and send to index page
        return view('admin.tourGuide.index',compact('toursGuide'));
    }
    public function create() {

        return view('admin.tourGuide.create');
    }

    public function store(TourGuideRequest $request) {

        try {
            $filePath = "";
            if ($request->has('image')) {
                $filePath = $this->saveImages($request->image,'Images/tourGuide/');
            }

            TourGuide::create([
                'image' => $filePath,
                'name' => $request ->name,
                'phone' => $request ->phone
            ]);

            return redirect()->route('admin.tourGuide')->with(['success' => 'TourGuide Added Successfully']);

        } catch(\Exception $ex) {
            dd($ex);
            return redirect()->route('admin.tourGuide')->with(['error' => 'Entering data wrong, try again later']);
        }

    }

    public function edit($tour_guide_id) {

        $tourGuide = TourGuide::find($tour_guide_id);

        if (!$tourGuide) {
            return redirect()->route('admin.tourGuide')->with(['error'=>'This TourGuide Not Found']);
        }
        return view('admin.tourGuide.edit',compact('tourGuide'));

    }

    public function update($tour_guide_id,TourGuideRequest $request)
    {
        try {
            $tourGuide = TourGuide::find($tour_guide_id);

            if (!$tourGuide) {
                return redirect()->route('admin.tourGuide.edit', $tour_guide_id)->with(['error' => 'This TourGuide Not Found']);
            }

            DB::beginTransaction();
            //photo
            if ($request->has('image') ) {
                $filePath = $this->saveImages($request->image,'Images/TourGuides/');
                TourGuide::where('id', $tour_guide_id)
                    ->update([
                        'image' => $filePath,
                    ]);
            }

            $tourGuide->update($request->except('_token' , 'id', 'hot_image'));
            DB::commit();
            return redirect()->route('admin.tourGuide')->with(['success' => 'TourGuide Updated Successfully']);

        } catch(\Exception $ex){
            DB::rollback();
            return redirect()->route('admin.tourGuide')->with(['error' => 'Their is Error Please, try again later']);

        }

    }

    public function delete($tour_guide_id) {
        try {
            $tourGuide = TourGuide::find($tour_guide_id);
            if (!$tourGuide)
                return redirect()->route('admin.tourGuide.edit', $tour_guide_id)->with(['error'=>'TourGuide You Want To Delete Not Found']);

            $tourGuide->delete();
            return redirect()->route('admin.tourGuide')->with(['success' => 'TourGuide Deleted Successfully']);

        } catch (\Exception $ex) {
            return redirect()->route('admin.tourGuide')->with(['error' => 'Their is Error Please, try again later']);

        }

    }
}
