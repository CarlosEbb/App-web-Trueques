<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        

        return view('admin.user.listar')->with(compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datos = $this->validate(request(), [
            'email' => 'email|required|string|unique:users',
            'password' => 'required|string',
            'name' => 'required|string',
        ]);

        if($request->rol_id == null){
            $request['rol_id'] = 2;
        }
        
        $request['password'] = bcrypt($request->password);
        $user = User::create($request->all());
        
        //Session::flash('mensaje','Registrado correctamente');
        
        if(Auth::user() != null)
            if(Auth::user()->rol_id == 1)
                return back();
    
         if (Auth::attempt($datos)) {
             if (session()->has('redirect_to')){
                 //$this->correoBienvenida();
                return redirect(session()->pull('redirect_to'));
             }
          }
        
        //$this->correoBienvenida();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if(($request->name != null) and ($request->email != null)){ 
            $this->validate($request, [
                'name'              => 'required|string|max:255',
                'email' => 'required|string|email|max:255||unique:users,email,'.Auth::user()->id,
            ]);
        }
        if($request->password !== null){
            $this->validate($request, [
                'password'              => 'required|min:4|max:255',
                'password_confirmation' => 'required|min:4|same:password',
            ]);
            $request['password'] = bcrypt($request->password);
        }
        if($request->file('img') != null){
            $this->validate($request, [
                'img'              => 'required',
            ]);
           
            $foto = $request->file("img");
            $extension = $foto->getClientOriginalExtension();
            $url = Storage::disk('users')->put($foto->getFilename().".".$extension, File::get($foto));
            $request['foto'] = '/uploads/users/'.$foto->getFilename().".".$extension;
        }
        
        $user = Auth::user();
        /* $this->authorize('pass', $user); */

        $user->fill($request->all())->save();

        return back()->with('mensaje', 'Información Actualizada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id)->delete();
        Session::flash('mensaje','Eliminado correctamente');
        return back();
    }

    public function registrar(Request $request)
    {
        $datos = $this->validate(request()->except(['g-recaptcha-response']), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'g-recaptcha-response' => 'recaptcha',
        ]);
        unset($datos['g-recaptcha-response']);
        User::create([
            'name' => $datos['name'],
            'email' => $datos['email'],
            'rol_id' => 2,
            'password' => Hash::make($datos['password']),
            
        ]);


        
        if(Auth::user() != null)
            if(Auth::user()->rol == 1)
                return back();
    
         if (Auth::attempt($datos)) {
             return redirect('/');
          }
          
       
    }
}
