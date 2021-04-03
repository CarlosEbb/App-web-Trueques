<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\ProductoFavorito;
use App\Models\User;
use App\Chat;
use Session;
use Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

use Alexo\LaravelPayU\LaravelPayU;
use App\Order;

use Excel;
use App\Exports\UsersExport;
use App\Exports\ProductosExport;
use App\Exports\ChatsExport;
use App\Exports\DeBajaExport;
use App\Exports\VentasExport;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    
    public function chat()
    {
        return view("home.index");
    }

    
    public function upload(Request $request)
    {
        
        $foto = $request->file("file");
        $extension = $foto->getClientOriginalExtension();
        $url = Storage::disk('productos')->put($foto->getFilename().".".$extension, File::get($foto));
        $request['foto'] = '/uploads/productos/'.$foto->getFilename().".".$extension;
       
        return $request['foto'];
    }

    public function subirFoto(Request $request)
    {
        $foto = $request->file("fotoPerfil");
        $extension = $foto->getClientOriginalExtension();
        $url = Storage::disk('perfil')->put($foto->getFilename().".".$extension, File::get($foto));
        $request['foto'] = '/uploads/perfil/'.$foto->getFilename().".".$extension;
       
        $user = Auth::user();
        $user->fill($request->all())->save();

        return back();
    }

    public function adjuntar(Request $request)
    {
        $foto = $request->file("file");
        $extension = $foto->getClientOriginalExtension();
        $url = Storage::disk('adjuntar')->put($foto->getFilename().".".$extension, File::get($foto));
        $request['foto'] = '/uploads/adjuntar/'.$foto->getFilename().".".$extension;

        if(Auth::user()->id == $request->vendedor)
            $to_id = $request->comprador;
        if(Auth::user()->id == $request->comprador)
            $to_id = $request->vendedor;
        
        \App\Chat::create([
            "user_id" => $request->vendedor,
            "user_comprador_id" => $request->comprador,
            "producto_id" => $request->producto,
            "mensaje" => env('APP_URL').$request['foto'],
            "to_id" => $to_id,
            "event" => "adjuntar-documento",
        ]);

        return back();
    }

    public function prueba()
    {
        return view("prueba");

        //dd(1);
        $id = 1;
        $order = Order::find($id);

        $data = [
            \PayUParameters::DESCRIPTION => 'Payment cc test',
            \PayUParameters::IP_ADDRESS => '127.0.0.1',
            \PayUParameters::PAYMENT_METHOD => "VISA",// Crédito( Visa, Mastercard, Amex, Diners y Crédito Fácil Codensa ) y Débito( Débito Visa ).
            \PayUParameters::REFERENCE_CODE => "1234",
            \PayUParameters::CREDIT_CARD_NUMBER => '4097440000000004',
            \PayUParameters::CREDIT_CARD_EXPIRATION_DATE => '2022/12',
            \PayUParameters::CREDIT_CARD_SECURITY_CODE => '321',
            \PayUParameters::INSTALLMENTS_NUMBER => "1",
            
            
           // \PayUParameters::LANGUAGE => 'Language.es',
            \PayUParameters::VALUE => "4000",   
            \PayUParameters::CURRENCY => 'COP',

            //comprador
            \PayUParameters::BUYER_NAME => "ejemplo ejemplo",
            \PayUParameters::BUYER_EMAIL => "buyer_test@test.com",
            \PayUParameters::BUYER_CONTACT_PHONE => "7563126",
            \PayUParameters::BUYER_DNI => "5415668464654",
            
            \PayUParameters::BUYER_ID => '1',
            \PayUParameters::BUYER_STREET => "calle 100",
            \PayUParameters::BUYER_STREET_2 => "5555487",
            \PayUParameters::BUYER_CITY => "Medellin",
            \PayUParameters::BUYER_STATE => "Antioquia",
            \PayUParameters::BUYER_COUNTRY => "CO",
            \PayUParameters::BUYER_POSTAL_CODE => "000000",
            \PayUParameters::BUYER_PHONE => "7563126",

            //pagador
            \PayUParameters::PAYER_ID => '1',
            \PayUParameters::PAYER_NAME => "REJECTEDd",
            \PayUParameters::PAYER_EMAIL => "payer_test@test.com",
            \PayUParameters::PAYER_CONTACT_PHONE => "7563126",
            \PayUParameters::PAYER_DNI => "5415668464654",
            \PayUParameters::PAYER_STREET => "calle 93",
            \PayUParameters::PAYER_STREET_2 => "125544",
            \PayUParameters::PAYER_CITY => "Bogota",
            \PayUParameters::PAYER_STATE => "Bogota",
            \PayUParameters::PAYER_COUNTRY => "CO",
            \PayUParameters::PAYER_POSTAL_CODE => "000000",
            \PayUParameters::PAYER_PHONE => "7563126",
            
        ];
        $order->payWith($data, function($response, $order) {
            if ($response->code == 'SUCCESS') {
                $order->update([
                    'payu_order_id' => $response->transactionResponse->orderId,
                    'transaction_id' => $response->transactionResponse->transactionId,
                    'state' => $response->transactionResponse->state,
                    ]);
                    dd($response);
                    // ... El resto de acciones sobre la orden
            } else {
                dd('salio mal');

            //... El código de respuesta no fue exitoso
            }
        }, function($error) {
            dd($error);

            // ... Manejo de errores PayUException, InvalidArgument
        });

        return view("prueba");
    }

    //Filtro

    public function consultas()
    {
        $option = null;
        $ini = null;
        $fin = null;
        
        return view('admin.consultas')->with(compact('option','ini','fin'));
    }

    public function exportarData(Request $request)
    {
        if($request->accion == 'Consultar'){
            $option = $request->filtro;
            $ini = $request->fecha_inicio;
            $fin = $request->fecha_fin;

            if($request->filtro == 1){
                $users = User::all();

                if(($request->fecha_inicio != null)){
                    $users = $users->where('created_at', '>=', $request->fecha_inicio);
                }

                if(($request->fecha_fin != null)){
                    $users = $users->where('created_at', '<=', $request->fecha_fin);
                }

                return view('admin.consultas')->with(compact('option','ini','fin','users'));
            }
    
            if($request->filtro == 2){
                $productos = Producto::all();  
                 
                if(($request->fecha_inicio != null)){
                    $productos = $productos->where('created_at', '>=', $request->fecha_inicio);
                }

                if(($request->fecha_fin != null)){
                    $productos = $productos->where('created_at', '<=', $request->fecha_fin);
                }

                return view('admin.consultas')->with(compact('option','ini','fin','productos'));
            }
    
            if($request->filtro == 3){
                $chats = Chat::all();    

                if(($request->fecha_inicio != null)){
                    $chats = $chats->where('created_at', '>=', $request->fecha_inicio);
                }

                if(($request->fecha_fin != null)){
                    $chats = $chats->where('created_at', '<=', $request->fecha_fin);
                }
                
                $chats = $chats->groupBy('user_id', 'user_comprador_id');

                return view('admin.consultas')->with(compact('option','ini','fin','chats'));
            }
    
            if($request->filtro == 4){
                $productos = Producto::all()->where('status', 0);    

                if(($request->fecha_inicio != null)){
                    $productos = $productos->where('created_at', '>=', $request->fecha_inicio);
                }

                if(($request->fecha_fin != null)){
                    $productos = $productos->where('created_at', '<=', $request->fecha_fin);
                }
                
                $productos = $productos->where('status', 0);    

                return view('admin.consultas')->with(compact('option','ini','fin','productos'));
            }
    
            if($request->filtro == 5){
                $ventas = Order::all();    
                if(($request->fecha_inicio != null)){
                    $ventas = Order::all()->where('created_at', '>=', $request->fecha_inicio);
                }

                if(($request->fecha_fin != null)){
                    $ventas = Order::all()->where('created_at', '<=', $request->fecha_fin);
                }
                
                return view('admin.consultas')->with(compact('option','ini','fin','ventas'));
            }

        }elseif($request->accion == 'Exportar'){
            if($request->filtro == 1){
                return Excel::download(new UsersExport($request->fecha_inicio, $request->fecha_fin), 'Usuarios.xlsx');
            }
    
            if($request->filtro == 2){
                return Excel::download(new ProductosExport($request->fecha_inicio, $request->fecha_fin), 'Productos.xlsx');
            }
    
            if($request->filtro == 3){
                return Excel::download(new ChatsExport($request->fecha_inicio, $request->fecha_fin), 'Chats.xlsx');
            }
    
            if($request->filtro == 4){
                return Excel::download(new DeBajaExport($request->fecha_inicio, $request->fecha_fin), 'Publicaciones dadas de baja.xlsx');
            }
    
            if($request->filtro == 5){
                return Excel::download(new VentasExport($request->fecha_inicio, $request->fecha_fin), 'Ventas.xlsx');
            }
        }
    }
    
}
