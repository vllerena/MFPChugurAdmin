<?php


namespace App\Providers;


use App\Repository\ArchivoRepository;
use App\Repository\EmpresaRepository;
use App\Repository\SucursalRepository;
use App\Services\ArchivoService;
use App\Services\EmpresaService;
use App\Services\SucursalService;
use Carbon\Laravel\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    public $bindings = [
        ArchivoRepository::class => ArchivoService::class,
        EmpresaRepository::class => EmpresaService::class,
        SucursalRepository::class => SucursalService::class,
    ];
}
