<?php


namespace App\Services;


use App\Repository\ArchivoRepository;
use App\Utils\ArchivoInfo;
use Illuminate\Support\Facades\Storage;

class ArchivoService implements ArchivoRepository
{

    public function uploadFileLocal(ArchivoInfo $archivo, $disk = 'local', $conUrl = true)
    {
        $visibilidad = $archivo->visibilidad ? 'public' : 'private';
        Storage::disk($disk)->put($archivo->getPath(), $archivo->contenido, $visibilidad);
        return $conUrl ? url($archivo->getPath()) : $archivo->getPath();
    }
}
