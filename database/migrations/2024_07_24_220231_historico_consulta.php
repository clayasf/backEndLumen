<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Nette\Schema\Schema as SchemaSchema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historicos', function (Blueprint $table){
            $table->increments('id');
            $table->string('logradouro',90);
            $table->string('complemento',30);
            $table->string('bairro',20);
            $table->string('localidade',20);
            $table->string('uf',2);
            $table->string('unidade',20);
            $table->integer('ibge');
            $table->integer('gia');
            $table->integer('ddd');
            $table->integer('siafi');
            $table->dateTime('updated_at');
            $table->dateTime('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
