<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('comentarios', function (Blueprint $table) {
            $table->foreign('blog_id')->references('id')->on('blogs');
            $table->foreign('reply_id')->references('id')->on('comentarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::table('comments', function (Blueprint $table) {
            $table->dropForeign(['blog_id']);
            $table->dropColumn('blog_id');
            $table->dropForeign(['reply_id']);
            $table->dropColumn('reply_id');
        });

    }
}
