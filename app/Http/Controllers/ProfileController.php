<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function settings(Request $request)
    {
        return view('users.configuration');
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $validated =  Validator::make($request->all(),
            [
                'name' => ['string', 'max:255'],
                'Surname' => [ 'string', 'max:255'],
                'email' => ['string', 'email', 'max:255'],
                'password' => ['string', 'min:8', 'confirmed'],
            ]);
        if($validated->fails())
        {
            return back()->withErrors($validated);
        }
        else if ($request->DeletePicture)
        {
            $ruta = public_path().'/images/users/'.$user->Picture;
            $deleted = File::delete($ruta);
            if($deleted)
            {
                $user->Picture = 'default.png';
                $user->save();
            }
        }
        else if( empty($request->file('image')))
        {
            $user->name = $request->name;
            $user->Surname = $request->Surname;
            if($user->email != $request->email)
            {
                $user->email = $request->email;
            }
            $user->save();
        }
        else
        {
            $fichero = $request->file('image');
            $ruta = public_path().'/images/users';
            $nombre_fichero  = uniqid().'-'.$fichero->getClientOriginalName();
            $subido = $fichero->move($ruta,$nombre_fichero);

            if($subido)
            {
                $user->name = $request->name;
                $user->Surname = $request->Surname;
                $user->Picture = $nombre_fichero;
                if($user->email != $request->email)
                {
                    $user->email = $request->email;
                }
                $user->save();
            }
        }
        return back();
    }

}
