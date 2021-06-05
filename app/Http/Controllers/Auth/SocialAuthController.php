<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialAuthController extends Controller
{
    // Metodo encargado de la redireccion a Facebook
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    // Metodo encargado de obtener la información del usuario
    public function handleProviderCallback($provider)
    {
        // Obtenemos los datos del usuarioç
        Socialite::driver($provider)->stateless();
        $social_user = Socialite::driver($provider)->user();
        // Comprobamos si el usuario ya existe
        if ($user = User::where('email', $social_user->email)->first())
        {
            return $this->authAndRedirect($user); // Login y redirección
        }
        else
        {
            // En caso de que no exista creamos un nuevo usuario con sus datos.
            $user = User::create([
                'name' => $social_user->name,
                'email' => $social_user->email,
                'avatar' => $social_user->avatar,
                'role' => 'user'
            ]);
            return $this->authAndRedirect($user); // Login y redirección
        }
    }
    // Login y redirección
    public function authAndRedirect($user)
    {
        Auth::login($user);
        if(session()->has('respuesta'))
        {
            return redirect('paypal/pay');
        }else{
            return redirect('home');
        }

    }
}
