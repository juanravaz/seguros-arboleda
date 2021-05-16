<?php

namespace App\Http\Controllers;

use App\Models\Insurance;
use Illuminate\Http\Request;
use App\Models\HomeInsurance;

class InsuranceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function homeinsurances()
    {

    }
}
