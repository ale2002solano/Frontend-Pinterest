<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Facades\Auth;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\ClienteController;
use GuzzleHttp\Exception\GuzzleException;

class LoginController extends Controller
{
    //
    public function index(){
        return view('login');//USAMOS EL COMPACT PARA PASAR LA VARIABLE A LA VISTA
    }

    //LOGIN
    public function login(Request $request){
        $correo = $request->input('email');
        $contrasena = $request->input('password');
    
        if (!$correo || !$contrasena) {
            return response()->json(['message' => 'Es necesario que ingreses la contraseña y el correo'], 400);
        }
    
        try {
            $cliente = new \GuzzleHttp\Client([
                'base_uri' => 'http://localhost:8080/api/usuarios/', // Cambia la URL base
                'timeout' => 10.0,
                'headers' => [
                    'Accept' => 'application/json',
                    'Content-Type' => 'application/json'
                ]
            ]);
    
            $response = $cliente->post('login', [
                'json' => [
                    'correo' => $correo,
                    'contrasena' => $contrasena
                ]
            ]);
    
            $statusCode = $response->getStatusCode();
            $data = json_decode($response->getBody(), true);
    
            if ($statusCode == 200 && isset($data['codigoUsuario']) && !empty($data['codigoUsuario'])) {
                $nombreCompleto = $data['nombreUsuario']; // Asegúrate de que estos campos existan en la respuesta
                $origenes = $this->obtenerOrigenes();
                $codigoUsuario = $data['codigoUsuario'];
                session([
                    'nombre_completo' => $nombreCompleto,
                    'origenes' => $origenes,
                    'codigoUsuario' => $codigoUsuario,
                    'urlPerfil' => $data['urlPerfil'],
                    'fechaNacimiento' => $data['fechaNacimiento'],
                    'genero' => $data['genero']['nombreGenero'],
                    'idioma' => $data['idioma']['nombreIdioma'],
                    'lugar' => $data['lugar']['nombreLugar']
                ]);
    
                return view('usuario', [
                    'nombre_completo' => $nombreCompleto,
                    'origenes' => $origenes,
                    'codigoUsuario' => $codigoUsuario,
                    'urlPerfil' => $data['urlPerfil'],
                    'fechaNacimiento' => $data['fechaNacimiento'],
                    'genero' => $data['genero']['nombreGenero'],
                    'idioma' => $data['idioma']['nombreIdioma'],
                    'lugar' => $data['lugar']['nombreLugar']
                ]);
            } else {
                return 'No existe este perfil';
            }
        } catch (GuzzleException $e) {
            return response()->json(['message' => 'Error al conectar con el servidor'], 500);
        }
    }

    
}
