<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserAgentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_agents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('languages')->nullable();
            $table->string('device');
            $table->string('platform');
            $table->string('platform_version');
            $table->string('browser');
            $table->string('browser_version');
            $table->enum('is_robot', ['yes', 'no']);
            $table->string('robot')->nullable();
            $table->string('ip_address');
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
        Schema::dropIfExists('user_agents');
    }
}
