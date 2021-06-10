<?php

namespace App\Repository;

use App\Utils\ArchivoInfo;

interface ArchivoRepository
{
    public function uploadFileLocal(ArchivoInfo $archivo, $disk = 'local', $conUrl = true);
}
