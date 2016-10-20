<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned(); // To remove negative values
            $table->string('title');
            $table->text('body');
            $table->string('excerpt');
            $table->timestamps();
            $table->timestamp('published_at');

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade'); // cascade deletes everything when a user is deleted
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('articles');
    }
}
