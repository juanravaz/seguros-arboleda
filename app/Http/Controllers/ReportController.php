<?php

namespace App\Http\Controllers;


use App\Models\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $report = Report::orderBy('id','asc')->get();
        return view('admin.report.index', compact('report'));
    }
}
