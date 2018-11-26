<?php  

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clases', function (Blueprint $table) {
            $table->increments('id');
            // llaves foraneas
            $table->integer('materia_id')->unsigned();
            $table->integer('contenido_id')->unsigned();
            $table->string('nombreclase',20);
            $table->string('profesor',20);
            $table->string('cupos',20);
            $table->timestamps();

            // contenido llave foranea
            $table->foreign('materia_id')->references('id')->on('materias');
            $table->foreign('contenido_id')->references('id')->on('contenidos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clases');
    }
}
