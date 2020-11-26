<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('local');
            $table->string('address')->nullable();
            $table->string('cp');
            $table->string('region')->nullable();
            $table->string('ope')->nullable();
            $table->string('clo')->nullable();
            /**$table->string('phone')->nullable();
            /**$table->string('cellphone')->nullable(); */
            /**$table->string('mail')->nullable(); */
            /**$table->string('facebook')->nullable(); */
            /**$table->string('avatar')->nullable(); */
            $table->text('map')->nullable();
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
        Schema::dropIfExists('contacts');
    }
}
