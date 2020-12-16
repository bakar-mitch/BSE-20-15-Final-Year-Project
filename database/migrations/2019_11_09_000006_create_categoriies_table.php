<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriiesTable extends Migration
{
    public function up()
    {
        Schema::create('categoriies', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name');

            $table->string('color')->nullable();

            $table->timestamps();

            $table->softDeletes();
        });
    }
}
