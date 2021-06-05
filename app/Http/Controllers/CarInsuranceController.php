<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\CarInsurance;
use App\Models\HomeInsurance;
use App\Models\Insurance;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarInsuranceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

   public function index(){
       $carInsurances = CarInsurance::all();

       return view('admin.carinsurance.home' , compact('carInsurances'));
   }
   public function create(){
        //$users = DB::table('users')->where('role','user');

        $users = User::where('role' , 'LIKE' , 'user')->get();

        //dd($users);
        return view('admin.carinsurance.create', compact('users'));
   }

   public function store(Request $request){
        $valid = $request->validate([
            'name'=>'required|max:255|string',
            'price'=> 'required|max:255|string',
            'plate' => 'required|max:255|string',
            'fuel'=> 'required|max:255|string',
            'car'=>'required|max:255|string',
            'year'=>'required|max:9999',
        ]);

        if ($valid){
            //dd($request->all());

            $insurance =  new Insurance();
            $insurance->name = $request->name;
            $insurance->price = $request->price;
            $insurance->user_id = $request->user;
            $insurance->type = 'C';

            $insurance->save();

            $carinsurance = new CarInsurance();
            $carinsurance->plate = $request->plate;
            $carinsurance->fuel= $request->fuel;
            $carinsurance->car = $request->car;
            $carinsurance->year = $request->year;
            $carinsurance->insurance_id = $insurance->id;

            $carinsurance->save();

            $message = 'Registro realizado con éxito';

            return back()->with(compact('message'));
        }

   }
   public function edit($id){
        $insurance = Insurance::find($id);
        $users = User::where('role' , 'LIKE' , 'user')->get();

        //dd($insurance);
        return view('admin.carinsurance.edit' , compact('insurance' , 'users'));
   }

   public function update(Request $request)
   {
        $valid = $request->validate([
            'name'=>'required|max:255|string',
            'price'=> 'required|max:255|string',
            'plate' => 'required|max:255|string',
            'fuel'=> 'required|max:255|string',
            'car'=>'required|max:255|string',
            'year'=>'required|max:9999'
        ]);

        if ($valid){

            $carInsurance = CarInsurance::find($request->id);
            $carInsurance->plate = $request->plate;
            $carInsurance->fuel= $request->fuel;
            $carInsurance->car= $request->car;
            $carInsurance->year = $request->year;

            $carInsurance->save();

            $insurance = Insurance::find($request->id);
            $insurance->name = $request->name;
            $insurance->price = $request->price;

            $insurance->save();

            $message = 'Registro editado con éxito';

            return back()->with(compact('message'));
        }

   }

   public function destroy (Request $request)
   {
       //dd($request->all());

       $carInsurance = CarInsurance::find($request->car);
       $carInsurance->delete();

       $insurance = Insurance::find($request->car);
       $insurance->delete();

       $message = 'Registro borrado con éxito';

        return back()->with(compact('message'));
   }

   public function pay(Request $request)
   {
        $price = $request->precio;

        $request->session()->put('type' , $request->type);
        $request->session()->put('price' , $price);
        $request->session()->put('fuel' , $request->fuel);
        $request->session()->put('marca' , $request->marca);
        $request->session()->put('modelo' , $request->modelo);
        $request->session()->put('anio' , $request->anio);
        $request->session()->put('plate' , $request->matricula);

   }
}
