<?php

namespace App\Http\Controllers\API\Admin;

use App\Http\Controllers\Controller;
use App\Models\Empresa;
use App\Models\Sucursal;
use App\TableInfo\EmpresaTableInfo;
use GuzzleHttp\Client;
use GuzzleHttp\Cookie\CookieJar;
use Illuminate\Http\Request;

class EmpleadosController extends Controller
{
    public function listar(Sucursal $sucursal)
    {
        $url = $sucursal->url;
        $empresa = Empresa::where(EmpresaTableInfo::ID, $sucursal->empresas_id)->first();
        $username = $empresa->username;
        $password = $empresa->password;

        $cookie = new CookieJar();
        $client = new Client(['cookies' => true]);
        $client->request('POST', $url . 'api/auth/login', [
            'form_params' => [
                'username' => $username,
                'password' => $password,
            ],
            'cookies' => $cookie
        ]);
        $response = $client->request('GET', $url .  'api/empleados', [
            'cookies' => $cookie,
        ]);
        $json = $response->getBody()->getContents();
        $empleados = json_decode($json, true);
        return response()->json($empleados);
    }
}
