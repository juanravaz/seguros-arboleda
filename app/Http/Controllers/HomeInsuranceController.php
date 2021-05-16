<?php

namespace App\Http\Controllers;

use App\Models\HomeInsurance;
use App\Models\Insurance;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeInsuranceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

   public function index(){
       $homeinsurances = HomeInsurance::all();

       return view('admin.homeinsurance.home' , compact('homeinsurances'));
   }
   public function create(){
        //$users = DB::table('users')->where('role','user');

        $users = User::where('role' , 'LIKE' , 'user')->get();

        //dd($users);
        return view('admin.homeinsurance.create', compact('users'));
   }

   public function store(Request $request){
        $valid = $request->validate([
           'name' => 'required|max:255|string',
           'price'=> 'required|max:255|string',
            'street'=>'required|max:255|string',
            'm2'=>'required|max:9999',
            'postalCode'=>'required|max:5|string'
        ]);

        if ($valid){
            //dd($request->all());

            $insurance =  new Insurance();
            $insurance->name = $request->name;
            $insurance->price = $request->price;
            $insurance->user_id = $request->user;
            $insurance->type = 'H';

            $insurance->save();

            $homeInsurance = new HomeInsurance();
            $homeInsurance->street = $request->street;
            $homeInsurance->m2= $request->m2;
            $homeInsurance->postalCode = $request->postalCode;
            $homeInsurance->insurance_id = $insurance->id;

            $homeInsurance->save();

            $message = 'Registro realizado con éxito';

            return back()->with(compact('message'));
        }
        echo $valid;
   }
   public function edit($id){
        $insurance = Insurance::find($id);
        $users = User::where('role' , 'LIKE' , 'user')->get();

        //dd($insurance);
        return view('admin.homeinsurance.edit' , compact('insurance' , 'users'));
   }

   public function update(Request $request)
   {
        $valid = $request->validate([
            'name' => 'required|max:255|string',
            'price'=> 'required|max:255|string',
            'street'=>'required|max:255|string',
            'm2'=>'required|max:9999',
            'postalCode'=>'required|max:5|string'
        ]);

        if ($valid){

            $homeInsurance = HomeInsurance::find($request->home);
            //dd($homeInsurance);

            $homeInsurance->street = $request->street;
            $homeInsurance->m2= $request->m2;
            $homeInsurance->postalCode = $request->postalCode;

            $homeInsurance->save();

            $insurance = Insurance::find($request->home);
            $insurance->name = $request->name;
            $insurance->price = $request->price;
            $insurance->user_id = $request->user;

            $insurance->save();

            $message = 'Registro editado con éxito';

            return back()->with(compact('message'));
        }

        //dd($homeinsurance);
   }

   public function destroy (Request $request)
   {
       //dd($request->all());

       $homeInsurance = HomeInsurance::find($request->home);
       $homeInsurance->delete();

       $insurance = Insurance::find($request->home);
       $insurance->delete();

       $message = 'Registro borrado con éxito';

        return back()->with(compact('message'));

   }
}
