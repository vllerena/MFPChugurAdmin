<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\TableInfo\SucursalTableInfo;
use App\TableInfo\EmpresaTableInfo;

class CreateSucursalsTable extends Migration
{
    private const TABLE_NAME = SucursalTableInfo::TABLE_NAME;
    private const TABLE_EMPRESA = EmpresaTableInfo::TABLE_NAME;
    public function up()
    {
        Schema::create(self::TABLE_NAME, function (Blueprint $table) {
            $table->id(SucursalTableInfo::ID);
            $table->string(SucursalTableInfo::NOMBRE);
            $table->string(SucursalTableInfo::URL);
            $table->string(SucursalTableInfo::DIRECCION)->nullable();
            $table->string(SucursalTableInfo::TELEFONO)->nullable();
            $table->string(SucursalTableInfo::EMAIL)->nullable();
            $table->foreignId(SucursalTableInfo::EMPRESA)->constrained(self::TABLE_EMPRESA);
        });
    }

    public function down()
    {
        Schema::dropIfExists(self::TABLE_NAME);
    }
}
