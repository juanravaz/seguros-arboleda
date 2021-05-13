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
        $reports = Report::orderBy('id','asc')->get();
        return view('admin.report.index', compact('reports'));
    }
    public function store(Request $request){
        $valid = $request->validate([
            'date' => 'required',
            'title' => 'required|max:255|string',
            'description' => 'required|max:255|string',
            'status' => 'required|max:255|string',
            'intervention' => 'required|max:255|string'
        ]);
        if ($valid){
            $report = new Report();

            $report->date = $request->date;
            $report->title = $request->title;
            $report->description = $request->description;
            $report->status = $request->status;
            $report->intervention = $request->intervention;

            $report->insurances_id = $request->insurances_id;

            $report->save();
            $message = 'Registro realizado con éxito';
        }
        return back()->with(compact('message'));
    }

    public function edit($id){
        $report = Report::find($id);

        return view('admin.report.edit', compact('report'));
    }

    public function update(Request $request){
        $valid = $request->validate([
            'date' => 'required',
            'title' => 'required|max:255|string',
            'description' => 'required|max:255|string',
            'status' => 'required|max:255|string',
            'intervention' => 'required|max:255|string'
        ]);

        if ($valid){
            $report = Report::find($request->id);

            $report->date = $request->date;
            $report->title = $request->title;
            $report->description = $request->description;
            $report->status = $request->status;
            $report->intervention = $request->intervention;


            $report->save();


            return redirect()->route('admin.report.index');

        }

    }
    public function destroy(Request $request){
        $report = Report::find($request->report);

        $report->delete();

        $message = 'Parte eliminado con éxito';

        return back()->with(compact('message'));
    }
}
