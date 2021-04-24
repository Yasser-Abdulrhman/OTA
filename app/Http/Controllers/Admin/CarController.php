<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CarRequest;
use App\Models\Car;
use App\Traits\HotelTrait;
use Illuminate\Http\Request;

class CarController extends Controller
{
    use HotelTrait;
    public function index() {
        $cars = Car::select()->paginate(PAGINATION_COUNT);  // to select datat from database and send to index page
        return view('admin.cars.index',compact('cars'));
    }
    public function create() {

        return view('admin.cars.create');
    }

    public function store(CarRequest $request) {

        try {
            $filePath = "";
            if ($request->has('car_image')) {
                $filePath = $this->saveImages($request->car_image,'Images/Cars/');
            }

            Car::create([
                'car_image' => $filePath,
                'car_model' => $request ->car_model,
                'car_price' => $request ->car_price,
                'car_details' => $request ->car_details,
            ]);

            return redirect()->route('admin.cars')->with(['success' => 'Car Added Successfully']);

        } catch(\Exception $ex) {
//            dd($ex);
            return redirect()->route('admin.cars')->with(['error' => 'Entering data wrong, try again later']);
        }

    }

    public function edit($car_id) {

        $car = Car::find($car_id);

        if (!$car) {
            return redirect()->route('admin.cars')->with(['error'=>'This Car Not Found']);
        }
        return view('admin.cars.edit',compact('car'));

    }

    public function update($car_id,CarRequest $request)
    {
        try {
            $car = Car::find($car_id);

            if (!$car) {
                return redirect()->route('admin.cars.edit', $car_id)->with(['error' => 'This Car Not Found']);
            }

            $car->update($request->except('_token'));

            return redirect()->route('admin.cars')->with(['success' => 'Car Updated Successfully']);

        } catch(\Exception $ex){

            return redirect()->route('admin.cars')->with(['error' => 'Their is Error Please, try again later']);

        }

    }

    public function delete($car_id) {
        try {
            $car = Car::find($car_id);
            if (!$car)
                return redirect()->route('admin.cars.edit', $car_id)->with(['error'=>'Car You Want To Delete Not Found']);

            $car->delete();
            return redirect()->route('admin.cars')->with(['success' => 'Car Deleted Successfully']);

        } catch (\Exception $ex) {
            return redirect()->route('admin.cars')->with(['error' => 'Their is Error Please, try again later']);

        }

    }
}
