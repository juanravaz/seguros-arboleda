<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $cars = Car::orderBy('id','asc')->get();
        return view('admin.cars.index', compact('cars'));
    }
}
