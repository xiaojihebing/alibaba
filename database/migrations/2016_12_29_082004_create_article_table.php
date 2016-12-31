<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('rfq_id');
            $table->text('title')->nullable();
            $table->text('desc')->nullable();
            $table->string('quantity')->nullable();
            $table->string('postdate')->nullable();
            $table->string('country')->nullable();
            $table->string('reached')->nullable();
            $table->string('related')->nullable();
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
        //
    }
}
