<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use App\Models\HomeInsurance;
use App\Models\LifeInsurance;
use App\Models\User;
use App\Models\Report;
use App\Models\Insurance;
use App\Models\CarInsurance;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\Mail;
use Illuminate\Database\Eloquent\Model;

class ReportController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(Request $request)
    {

        if (auth()->user()->role == "technician"){
            $reports = Report::all();
        }elseif (auth()->user()->role == "user"){
           $reports = Report::whereIn('insurance_id', function($query){
                $query->select('insurance_id')
                    ->from(with(new Insurance)->getTable())
                    ->where('user_id', auth()->user()->id);
            })->get();
        }elseif (auth()->user()->role == "admin"){
            $reports = Report::all();
        }

        return view('admin.reports.home', compact('reports'));
    }
    public function store(Request $request){
        $valid = $request->validate([
            'title' => 'required|max:255|string',
            'description' => 'required|max:255|string',
            'status' => 'max:255|string',
            'intervention' => 'max:255|string'
        ]);
        if ($valid){
            $report = new Report();

            $report->date = date('Y-m-d');
            $report->title = $request->title;
            $report->description = $request->description;
            $report->status = 'Pendiente';
            $report->intervention = $request->intervention;

            $report->insurance_id = $request->id;
            $report->user_id = auth()->user()->id;

            $report->save();
            $message = 'Registro realizado con éxito';
        }
        return back()->with(compact('message'));
    }

    public function edit($id){
        $report = Report::find($id);
        $users = User::where('role','technician');

        return view('admin.reports.edit', compact('report', 'users'));
    }

    public function update(Request $request){
        $valid = $request->validate([
            'date' => 'required',
            'title' => 'required|max:255|string',
            'description' => 'required|max:255|string',
            'status' => 'required|max:255|string',
            'intervention' => 'required|max:255|string',
            'resolution' => 'required|max:255|string'
        ]);

        if ($valid){
            $report = Report::find($request->id);

            $report->date = $request->date;
            $report->title = $request->title;
            $report->description = $request->description;
            $report->status = $request->status;
            $report->intervention = $request->intervention;
            $report->resolution = $request->resolution;
            $report->user_id = $request->user_id;


            $report->save();


            return redirect()->route('admin.report.home');

        }

    }
    public function destroy(Request $request){
        $report = Report::find($request->report);

        $report->delete();

        $message = 'Parte eliminado con éxito';

        return back()->with(compact('message'));
    }
    public function create(Request $request){
        $users = User::where('role','tecnhician')->get();
        $insurance = Insurance::where('id',$request->id)->first();

        //dd($users);
        return view('admin.reports.create', compact('users','insurance'));
    }
    public function pdf($id)
    {

        $insurance = Insurance::find($id);
        if($insurance->type == "C")
        {
            $datainsurance = CarInsurance::find($id);
            $data = [
                'name' => $insurance->name,
                'price' => $insurance->price,
                'email' => $insurance->user->email,
                'userName' => $insurance->user->name,
                'detail' => $datainsurance->car." - ".$datainsurance->plate
            ];
        }

        //dd($data);

        $pdf = app('dompdf.wrapper');

        //$pdf->loadView('welcome');
        $pdf = PDF::loadView('admin.reports.invoiceprint', compact('data'))->setPaper('a4');

        return $pdf->stream();
    }
    public function print(){

        return view('admin.reports.invoiceprint');

    }

    public function email($id)
    {
        /*$insurance = Insurance::find($id);
        $data["email"]=$insurance->user->email;
        $data["client_name"]=$insurance->user->name;
        $data["subject"]='Su factura de SegurosArboleda';

        if($insurance->type == "C")
        {
            $datainsurance = CarInsurance::find($id);
            $data = [
                'name' => $insurance->name,
                'price' => $insurance->price,
                'email' => $insurance->user->email,
                'userName' => $insurance->user->name,
                'detail' => $datainsurance->car." - ".$datainsurance->plate
            ];
        }

        $pdf = PDF::loadView('admin.reports.invoiceprint', $data);

        try{
            Mail::send('admin.reports.invoiceprint', $data, function($message)use($data,$pdf) {
                $message->to($data["email"], $data["client_name"])
                    ->subject($data["subject"])
                    ->attachData($pdf->output(), "invoice.pdf");
            });
        }catch(JWTException $exception){
            $this->serverstatuscode = "0";
            $this->serverstatusdes = $exception->getMessage();
        }
        if (Mail::failures()) {
            $this->statusdesc  =   "Error sending mail";
            $this->statuscode  =   "0";

        }else{

            $this->statusdesc  =   "Message sent Succesfully";
            $this->statuscode  =   "1";
        }
        return response()->json(compact('this'));
        */

        $insurance = Insurance::find($id);
        if($insurance->type == "C")
        {
            $datainsurance = CarInsurance::find($id);
            $data = [
                'name' => $insurance->name,
                'price' => $insurance->price,
                'email' => $insurance->user->email,
                'userName' => $insurance->user->name,
                'date' =>$insurance->created_at,
                'detail' => $datainsurance->car." - ".$datainsurance->plate,
            ];

            $pdf = PDF::loadView('admin.reports.invoiceprint', compact('data'));

        }elseif ($insurance->type == "L"){
            $datainsurance = LifeInsurance::find($id);
            $data = [
                'name' => $insurance->name,
                'price' => $insurance->price,
                'email' => $insurance->user->email,
                'userName' => $insurance->user->name,
                'date' =>$insurance->created_at,
                'detail' => $datainsurance->DNI." - ".$datainsurance->Name,
            ];

            $pdf = PDF::loadView('admin.reports.invoiceprint', compact('data'));
        }elseif ($insurance->type == "H"){
            $datainsurance = HomeInsurance::find($id);
            $data = [
                'name' => $insurance->name,
                'price' => $insurance->price,
                'email' => $insurance->user->email,
                'userName' => $insurance->user->name,
                'date' =>$insurance->created_at,
                'detail' => $datainsurance->street." - ".$datainsurance->postalCode,
            ];

            $pdf = PDF::loadView('admin.reports.invoiceprint', compact('data'));
        }
        $data["client_name"]=$insurance->user->name;
        $data["subject"]='Su factura de SegurosArboleda';
        Mail::to($data['email'])->send(new SendMail($data, $pdf));
    }

}
