<?php

namespace App\Http\Controllers;

use App\Models\Insurance;
use Illuminate\Http\Request;
use App\Models\HomeInsurance;
use Illuminate\Support\Facades\Auth;

class InsuranceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function allUserInsurances(){
        $cars = Insurance::where('user_id','=', Auth::user()->id)
            ->where('type', '=', 'C')->get();
        $homes = Insurance::where('user_id','=', Auth::user()->id)
            ->where('type', '=', 'H')->get();
        $lifes = Insurance::where('user_id','=', Auth::user()->id)
            ->where('type', '=', 'L')->get();
        return view('admin.reports.myinsurances', compact('cars','homes','lifes'));
    }
    public function invoice(Request $request){
        $insurance = Insurance::find($request->id);
        return view('admin.reports.invoice', compact('insurance'));
    }
}
