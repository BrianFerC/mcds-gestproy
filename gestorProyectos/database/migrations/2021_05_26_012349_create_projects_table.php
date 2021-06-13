<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();            
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories');        
            $table->unsignedBigInteger('tracing_id');
            $table->foreign('tracing_id')->references('id')->on('tracings');            
            $table->string('code');
            $table->string('name');
            $table->string('area');
            $table->string('class');
            $table->text('description');
            $table->string('budget');
            $table->string('state');
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
        Schema::dropIfExists('projects');
    }
}

