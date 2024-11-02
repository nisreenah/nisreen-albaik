<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePortfoliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('en_name');
            $table->string('ar_name')->nullable();
            $table->string('image');
            $table->string('en_client');
            $table->string('ar_client')->nullable();
            $table->date('completion');
            $table->string('en_role');
            $table->string('ar_role')->nullable();
            $table->string('category_id');
            $table->text('en_details');
            $table->text('ar_details')->nullable();
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
        Schema::dropIfExists('portfolios');
    }
}
