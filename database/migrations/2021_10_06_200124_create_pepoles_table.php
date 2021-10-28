<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePepolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pepoles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->tinyInteger('gender');
            $table->integer('NationalID'); 
            $table->string('address');
            $table->string('HusbandOrwife')->nullable();
            $table->tinyInteger('SocialStatus');
            $table->tinyInteger('healthy');
            $table->dateTime('dateOfBirth');
            $table->string('PhoneNumber');
            $table->tinyInteger('job');
            $table->tinyInteger('numberOfChildren')->nullable();
            $table->unsignedBigInteger('parent')->nullable();
            
            $table->tinyInteger('home');
            $table->tinyInteger('possession_id')->nullable();
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
        Schema::dropIfExists('pepoles');
    }
}
