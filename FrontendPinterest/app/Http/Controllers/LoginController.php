<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Facades\Auth;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\ClienteController;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    //
    public function login(Request $request){
        $correo = $request->input('correo');
        $contrasenia = $request->input('contrasenia');
    
        if (!$correo || !$contrasenia) {
            return response()->json(['message' => 'Es necesario que ingreses la contraseña y el correo'], 400);
        }
    
        try {
            $client = new \GuzzleHttp\Client([
                'base_uri' => 'http://localhost:8080/api/usuarios/',
                'timeout' => 10.0,
                'headers' => [
                    'Accept' => 'application/json',
                    'Content-Type' => 'application/json'
                ]
            ]);
    
            $response = $client->post('login', [
                'json' => [
                    'correo' => $correo,
                    'contrasenia' => $contrasenia
                ]
            ]);

            $statusCode = $response->getStatusCode();
            $responseBody = $response->getBody()->getContents();
            $data = json_decode($responseBody, true);
    
            $statusCode = $response->getStatusCode();
    
            // Basado en el código de estado HTTP
            if ($statusCode == 200) {
                Session::put('codigo_usuario', $data['codigo_usuario']);
                return redirect()->route('feed');
            } else {
                return response()->json(['message' => 'No existe este perfil o credenciales incorrectas'], 404);
            }
        } catch (\GuzzleHttp\Exception\RequestException $e) {
            return response()->json(['message' => 'Error al conectar con el servidor'], 500);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Ocurrió un error inesperado'], 500);
        }
    }
    

        

    
}
