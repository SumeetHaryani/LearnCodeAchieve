<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCreatecoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('createcourses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            
            $table->string('vid1');
            $table->string('vid2');
            $table->mediumText('body');
            $table->string('cover_image');
            $table->string('video1');
            $table->string('video2'); 
                    
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
        Schema::dropIfExists('createcourses');
    }
}
