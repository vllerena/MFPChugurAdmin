<?php


namespace App\Utils;


use App\Models\Empresa;
use App\Models\Sucursal;
use GuzzleHttp\Client;
use GuzzleHttp\Cookie\CookieJar;
use Illuminate\Support\Facades\Log;

class ReporteChugur implements ReporteEmpresa
{
    private $clienteHttp;
    private $datosReporte;
    private $datosRequest;

    public function __construct(array $datosRequest)
    {
        $this->clienteHttp = new Client(['cookies' => true]);
        $this->datosRequest = $datosRequest;
        $this->datosReporte = [];
    }

    public function hacerReporte(Empresa $empresa): array
    {
        $sucursales = $empresa->sucursales;
        foreach ($sucursales as $s) {
            $this->datosReporte = array_merge($this->datosReporte, $this->extraerDatos($s, $empresa->username, $empresa->password));
        }
        return $this->datosReporte;
    }

    public function reporteVentas(Empresa $empresa, Sucursal $sucursal)
    {
        $this->datosReporte = array_merge($this->datosReporte, $this->extraerDatos($sucursal, $empresa->username, $empresa->password));
        return $this->datosReporte;
    }

    private function extraerDatos(Sucursal $sucursal, $username, $password)
    {
        ini_set('max_execution_time', 300);
        $cookie = new CookieJar();
        $this->clienteHttp->request('POST', $sucursal->url . 'api/auth/login', [
            'form_params' => [
                'username' => $username,
                'password' => $password,
            ],
            'cookies' => $cookie
        ]);
        $dateinicio = $this->datosRequest['dateinicio'];
        $datefin = $this->datosRequest['datefin'];
        $response = $this->clienteHttp->request('GET', "{$sucursal->url}api/ventas/reporte/ventas/fecha/". $dateinicio . '/' . $datefin, [
            'cookies' => $cookie,
        ]);
        if ($response->getStatusCode() == 200){
            $json = $response->getBody()->getContents();
            return json_decode($json, true)['respuesta'];
        }
        return [];
    }


}
