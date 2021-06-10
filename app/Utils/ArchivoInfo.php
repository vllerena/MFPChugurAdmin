<?php


namespace App\Utils;

use Illuminate\Http\File;
use Illuminate\Http\UploadedFile;

class ArchivoInfo
{
    public $nombre;
    public $carpeta;
    public $contenido;
    public $visibilidad;

    public function __construct($nombre, $carpeta, $contenido, $visibilidad = true)
    {
        $this->nombre = $this->getNombre($nombre, $contenido);
        $this->carpeta = $carpeta;
        $this->contenido = $contenido;
        $this->visibilidad = $visibilidad;
    }

    public static function init()
    {
        return new self(null, null, null, false);
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
        return $this;
    }

    public function setContenido($contenido)
    {
        $this->contenido = $contenido;
        return $this;
    }

    static function getExtension($name)
    {
        $array = explode(".", $name);
        $extension = end($array);
        return $extension ? $extension : false;
    }

    public function getPath()
    {
        return $this->carpeta . '/' . $this->nombre;
    }

    private function getNombre($nombre, $contenido)
    {
        if ($contenido instanceof UploadedFile || $contenido instanceof File)
            return $nombre . '.' . $contenido->getClientOriginalExtension();
        return $nombre;
    }
}
