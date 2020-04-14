<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sliders', function (Blueprint $table) {
            $table->id();
            $table->string("title")->nullable();
            $table->text("description")->nullable();
            $table->string("btn_name")->nullable();
            $table->string("btn_link")->nullable();
            $table->string("image")->nullable();
            $table->boolean("show")->default(1);
            $table->timestamps();
        });
        \DB::table('sliders')->insert([
            'title'=> 'namne',
            'description'=>'desk'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sliders');
    }
}
