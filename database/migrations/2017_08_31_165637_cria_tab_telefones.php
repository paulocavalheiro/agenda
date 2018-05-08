<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriaTabTelefones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('telefones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ddd');
            $table->string('numero');
            $table->integer('fk_id_pessoa')->unsigned();
            $table->foreign('fk_id_pessoa')->references('id')->on('pessoas')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('telefones');
    }
}
