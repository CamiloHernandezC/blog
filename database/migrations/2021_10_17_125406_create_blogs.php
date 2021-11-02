<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('2018_12_10_205506_create_comentarios.php');
            $table->string('cover');//Si es solo un video en la portada se coloca el link
            $table->text('content')->nullable();//65535 caracteres
            $table->unsignedInteger('type');//0 blog, 1 video
            $table->String('slug',64)->unique();/*campo utilizado para URL personalizada*/
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogs');
    }
}
