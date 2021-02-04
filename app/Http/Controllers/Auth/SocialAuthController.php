<?php

namespace App\Http\Controllers\Auth;

use Auth;
use App\Models\User;
use Socialite;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use Illuminate\Support\Facades\Mail;

class SocialAuthController extends Controller
{

    protected $redirectToAdmin = '/home';
    protected $redirectToUser = '/';
    
    // Metodo encargado de la redireccion a Facebook
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    // Metodo encargado de obtener la información del usuario
    public function handleProviderCallback($provider)
    {
        // Obtenemos los datos del usuario
        $social_user = Socialite::driver($provider)->user(); 
        // Comprobamos si el usuario ya existe
        if ($user = User::where('email', $social_user->email)->first()) { 
            return $this->authAndRedirect($user, false); // Login y redirección
        } else {  
            // En caso de que no exista creamos un nuevo usuario con sus datos.
            //$separar = explode(' ', $social_user->name);
            $user = User::create([
                'name' => $social_user->name,
                //'apellido' => $separar[1],
                'email' => $social_user->email,
                'avatar' => $social_user->avatar,
                'rol_id' => 2,
            ]);
            
            return $this->authAndRedirect($user,true); // Login y redirección
        }
    }

    // Login y redirección
    public function authAndRedirect($user, $envio)
    {
        Auth::login($user);
        if($envio){
            //$this->correoBienvenida();
        }

        if(Auth::user()->rol_id == 1){
            return redirect($this->redirectToAdmin);
        }else{
            return redirect($this->redirectToUser);
        }

        /* if(Session::has('redirect_to')){
            return redirect()->to(Session::get('redirect_to'));
        }else
            return redirect()->to('/home#');
        */
    }
    
     public function correoBienvenida()
    {
        $data=array('user'=> Auth::user());

        Mail::send('correos.correoBienvenida',$data,function($mensaje) use ($data){
            $mensaje->from(env('MAIL_USERNAME'),'Bienvenid@ a Kontrak');
            $mensaje->to(Auth::user()->email)->subject('Bienvenid@ a Kontrak');
        });

    }
}
