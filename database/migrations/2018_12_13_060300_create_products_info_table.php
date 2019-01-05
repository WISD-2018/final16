<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsInfoTable extends Migration
{
    public function up()
    {
        Schema::create('products_info', function (Blueprint $table) {
            $table->increments('id');
            $table->text('describe');
            $table->string('contain');
            $table->boolean('is_tax');
            $table->string('keep_temp');
            $table->string('dateline');
            $table->text('soldedservice');
            $table->text('otherdescribe');
            $table->timestamps();
        });

    }


    public function down()
    {
        Schema::dropIfExists('products_info');
    }
}