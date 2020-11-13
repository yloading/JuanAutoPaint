<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Http\Requests\CarPost;

class CarController extends Controller
{
    public function getCarDetails() {        
        return Car::where('status', 'Waiting')->get();
    }

    public function getAllCars() {        
        return Car::where('status', 'Completed')->get();
    }

    public function create(CarPost $request) {
        
        $validated = $request->validated();

        Car::create([
            'platenumber' => $request->platenumber,
            'targetcolor' => $request->targetcolor,
            'currentcolor' => $request->currentcolor,
            'status' => $request->status
        ]);
    }

}
