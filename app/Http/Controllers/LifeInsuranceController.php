<?php

namespace App\Http\Controllers;

use App\Models\Insurance;
use App\Models\LifeInsurance;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LifeInsuranceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

   public function index(){
       $lifeinsurance = LifeInsurance::all();

       return view('admin.lifeinsurance.home' , compact('lifeinsurance'));
   }
   public function create(){
        //$users = DB::table('users')->where('role','user');

        $users = User::where('role' , 'LIKE' , 'user')->get();

        //dd($users);
        return view('admin.lifeinsurance.create', compact('users'));
   }

   public function store(Request $request){
        $valid = $request->validate([
            'name'=>'required|max:255|string',
            'price'=> 'required|max:255|string',
           'DNI' => 'required|max:255|string',
           'Name'=> 'required|max:255|string',
            'Birth'=>'required|max:255|string',
        ]);

        if ($valid){
            //dd($request->all());

            $insurance =  new Insurance();
            $insurance->name = $request->name;
            $insurance->price = $request->price;
            $insurance->user_id = $request->user;
            $insurance->type = 'L';

            $insurance->save();

            $lifeinsurance = new LifeInsurance();
            $lifeinsurance->DNI = $request->DNI;
            $lifeinsurance->Name= $request->Name;
            $lifeinsurance->Birth = $request->Birth;
            $lifeinsurance->insurance_id = $insurance->id;

            $lifeinsurance->save();

            $message = 'Registro realizado con éxito';

            return back()->with(compact('message'));
        }
        echo $valid;
   }
   public function edit($id){
        $insurance = Insurance::find($id);
        $users = User::where('role' , 'LIKE' , 'user')->get();

        //dd($insurance);
        return view('admin.lifeinsurance.edit' , compact('insurance' , 'users'));
   }

   public function update(Request $request)
   {
        $valid = $request->validate([
            'name'=>'required|max:255|string',
            'price'=> 'required|max:255|string',
            'DNI' => 'required|max:255|string',
            'Name'=> 'required|max:255|string',
            'Birth'=>'required|max:255|string',
        ]);

        if ($valid){

            $lifeinsurance = LifeInsurance::find($request->home);
            //dd($homeInsurance);

            $lifeinsurance->DNI = $request->DNI;
            $lifeinsurance->Name= $request->Name;
            $lifeinsurance->Birth = $request->Birth;

            $lifeinsurance->save();

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

       $lifeinsurance = LifeInsurance::find($request->DNI);
       $lifeinsurance->delete();

       $insurance = Insurance::find($request->DNI);
       $insurance->delete();

       $message = 'Registro borrado con éxito';

        return back()->with(compact('message'));

   }
}
