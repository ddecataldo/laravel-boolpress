<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAuthorIdToPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            //
            $table->unsignedBigInteger('author_id');

            $table->foreign('author_id') /* Nome Colonna Foreign Key */
                  ->references('id') /* Nome referenze */
                  ->on('users'); /* Nome Colonna dove trova la referenza */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            //
            $table->dropForeign('posts_author_id_foreign');
            $table->dropColumn('author_id');
        });
    }
}