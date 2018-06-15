<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Mail;
use App\Orders;
use Validator;
use Carbon\Carbon;

class ApiController extends Controller
{
    public $message = "Oops! Algo va mal";
    public $result = false;
    public $records = null;
    public $statusCode =    200;

    public function create(Request $request)
    {
        try
        {
            $registro = Orders::create([
                'deliver_date' => $request->input('deliver_date'),
                'destination' => $request->input('destination'),
                'presentation' => $request->input('presentation'),
                'king' => $request->input('king'),
                'imperial' => $request->input('imperial'),
                'semi_matrimonial' => $request->input('semi_matrimonial'),
                'matrimonial' => $request->input('matrimonial'),
                'queen' => $request->input('queen'),
                'total' => $request->input('total')
            ]);
            
            $data = [
                'deliver_date' => $registro->deliver_date,
                'destination' => $registro->destination,
                'presentation' => $registro->presentation,
                'king' => $registro->king,
                'imperial' => $registro->imperial,
                'semi_matrimonial' => $registro->semi_matrimonial,
                'matrimonial' => $registro->matrimonial,
                'queen' => $registro->queen,
                'total' => $registro->total,
            ];
            
            Mail::send('mail', $data, function($msg) use($request) { 
                $msg->to(explode(',',env('CORREOS'))); 
                //$msg->to(['wlevy@saprosa.com', $request->input('email')]); 
                $msg->from(['prosales@researchmobile.co']); 
            });
            // DESCOMENTAR CUANDO SE TENGA QUE ENVIAR COPIA AL SOLICITANTE
            // Mail::send('mail', $data, function($msg) use($request) { 
            //     $msg->to([$request->input('email')]); 
            //     //$msg->to(['wlevy@saprosa.com', $request->input('email')]); 
            //     $msg->from(['prosales@researchmobile.co']); 
            // });
            

            $this->records = $registro;
            $this->message = "Tu pedido a sido creado exitosamente.";
            $this->result = true;
        }
        catch (\Exception $e)
        {
            $this->statusCode   =   200;
            $this->message      =   env('APP_DEBUG')?$e->getMessage():'Ocurrio un problema con la solicitud.';
            $this->result       =   false;
        }
        finally
        {
            $response =
            [
                'message'   =>  $this->message,
                'result'    =>  $this->result,
                'records'   =>  $this->records
            ];

            return response()->json($response, $this->statusCode);
        }
    }

    public function login(Request $request)
    {
        try
        {
            if($request->input('email') == env('LOGIN_USER')) {
                if($request->input('password') == env('LOGIN_PASSWORD')) {
                    $this->records = $request->all();
                    $this->message = "Bienvenido.";
                    $this->result = true;
                }
                else {
                    $this->message = "Contraseña incorrecta.";
                    $this->result = false;
                }
            }
            else {
                $this->message = "Usuario ingresado no existe.";
                $this->result = false;
            }
        }
        catch (\Exception $e)
        {
            $this->statusCode   =   200;
            $this->message      =   env('APP_DEBUG')?$e->getMessage():'Ocurrio un problema con la solicitud.';
            $this->result       =   false;
        }
        finally
        {
            $response =
            [
                'message'   =>  $this->message,
                'result'    =>  $this->result,
                'records'   =>  $this->records
            ];

            return response()->json($response, $this->statusCode);
        }
    }

}
