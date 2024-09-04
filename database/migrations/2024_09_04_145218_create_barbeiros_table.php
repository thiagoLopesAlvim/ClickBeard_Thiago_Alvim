<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarbeirosTable extends Migration
{
    public function up()
    {
        Schema::create('barbeiros', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('idade');
            $table->date('data_contratacao');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('barbeiros');
    }
}
