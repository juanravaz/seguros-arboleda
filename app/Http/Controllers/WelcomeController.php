<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\HomeInsurance;
use App\Models\LifeInsurance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{

    public function logueo()
    {
        return view('auth.logueo');
    }

    public function registro()
    {
        return view('auth.registro');
    }

    public function carinsurance()
    {
        return view('users.car-insurance');
    }
    public function lifeinsurance()
    {
        return view('users.life-insurance');
    }
    public function homeinsurance()
    {
        return view('users.home-insurance');
    }

    public function carcreate()
    {

        $cars = Car::distinct()->orderBy('brand')->get(['brand']);

        return view('users.car-create' , compact('cars'));
    }
    public function homecreate()
    {

        $home = HomeInsurance::all();

        return view('users.home-create' , compact('home'));
    }
    public function lifecreate()
    {

        $life = LifeInsurance::all();

        return view('users.life-create' , compact('life'));
    }

    public function fetch($brand)
    {
        $models = Car::where('brand', $brand)->pluck("model" , "id");

        return json_encode($models);
    }
}
