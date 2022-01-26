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
            $table->unsignedBigInteger('author_id'); // Andiamo a creare una colonna che si chiama author_id dentro posts

            $table->foreign('author_id') // La tabella posts avrà author_id come Foreign Key
                  ->references('id') // La Foreign Key punta alla colonna id->
                  ->on('users'); /* ->della tabella user */
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