<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\TableInfo\EmpresaTableInfo;

class CreateEmpresasTable extends Migration
{
    private const TABLE_NAME = EmpresaTableInfo::TABLE_NAME;
    public function up()
    {
        Schema::create(self::TABLE_NAME, function (Blueprint $table) {
            $table->id(EmpresaTableInfo::ID);
            $table->string(EmpresaTableInfo::RUC, 11)->unique();
            $table->string(EmpresaTableInfo::RAZON_SOCIAL);
            $table->string(EmpresaTableInfo::DOMICILIO_FISCAL);
            $table->text(EmpresaTableInfo::LOGO_PATH)->nullable();
            $table->string(EmpresaTableInfo::USERNAME);
            $table->string(EmpresaTableInfo::PASSWORD);
        });
    }

    public function down()
    {
        Schema::dropIfExists(self::TABLE_NAME);
    }
}
