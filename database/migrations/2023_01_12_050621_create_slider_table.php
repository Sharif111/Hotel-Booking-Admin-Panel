<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up()
    {
        Schema::create('slider', function (Blueprint $table) {
            $table->id();
            $table->text('photo')->nullable();
            $table->text('heading')->nullable();
            $table->text('text')->nullable();
            $table->text('button_text')->nullable();
            $table->text('button_url')->nullable();
            $table->timestamps();
        });       
        
    }

    

    public function down()
    {
        Schema::dropIfExists('slider');
    }
};
