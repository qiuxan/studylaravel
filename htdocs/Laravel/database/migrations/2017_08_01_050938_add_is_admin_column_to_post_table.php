<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIsAdminColumnToPostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    //php artisan make:migration add_is_admin_column_to_post_table --table="posts"

    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            //

            //$table->integer('is_admin')->unsigned();

            $table->tinyInteger('is_admin')->default('0');
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
            $table->dropColumn('is_admin');
        });
    }
}
