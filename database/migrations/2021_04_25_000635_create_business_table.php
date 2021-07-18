<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->string('category');
            $table->string('subCat');
            $table->string('wilaya');
            $table->string('commune');
            $table->string('address', 500);
            $table->string('gmapsLink', 500)->nullable();
            $table->integer('phone');
            $table->string('email', 350);
            $table->string('facebook', 350)->nullable();
            $table->string('instagram', 350)->nullable();
            $table->string('website', 350)->nullable();
            $table->boolean('isAuth')->nullable();
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
        Schema::dropIfExists('business');
    }
}
