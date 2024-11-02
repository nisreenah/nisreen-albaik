<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('en_name');
            $table->string('ar_name')->nullable();
            $table->string('en_major');
            $table->string('ar_major')->nullable();
            $table->string('en_country');
            $table->string('ar_country')->nullable();
            $table->string('en_address');
            $table->string('ar_address')->nullable();
            $table->string('email');
            $table->date('date_of_birth');
            $table->string('phone');
            $table->string('skype')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('linkedIn')->nullable();
            $table->string('telegram')->nullable();
            $table->string('en_interest');
            $table->string('ar_interest')->nullable();
            $table->text('en_bio');
            $table->text('ar_bio')->nullable();
            $table->text('en_summary');
            $table->text('ar_summary')->nullable();
            $table->string('en_title');
            $table->string('ar_title')->nullable();
            $table->decimal('long', 10, 7)->nullable(); // Longitude -74.00898606
            $table->decimal('lat', 10, 7)->nullable(); // Latitude 40.71727401
            $table->enum('status', [0, 1])->default(0);
            $table->string('CV');
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
        Schema::dropIfExists('profiles');
    }
}
