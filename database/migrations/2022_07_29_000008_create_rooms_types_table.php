<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTypesTable extends Migration
{
    public function up()
    {
        Schema::create('rooms_types', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('room_type');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
