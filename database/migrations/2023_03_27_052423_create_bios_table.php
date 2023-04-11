<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bios', function (Blueprint $table) {
            $table->id();
            $table->string('img')->nullable();
            $table->string('name')->nullable();
            $table->string('surname')->nullable();
            $table->string('patronomic')->nullable();
            $table->date('birthday_date')->nullable();
            $table->date('death_date')->nullable();
            $table->string('birthday_img')->nullable();
            $table->string('birthday_place')->nullable();
            $table->string('death_img')->nullable();
            $table->string('death_place')->nullable();
            $table->string('childhood_live_content')->nullable();
            $table->string('childhood_live_img')->nullable();
            $table->string('stydent_live_img')->nullable();
            $table->string('stydent_live_content')->nullable();
            $table->string('osnovnaia_live_img')->nullable();
            $table->string('osnovnaia_live_content')->nullable();
            $table->string('pensia_live_img')->nullable();
            $table->string('pensia_live_content')->nullable();
            $table->foreignId('infoforchildren_id')->nullable();
            $table->foreignId('infoforparents_id')->nullable();
            $table->foreignId('achivments_id')->nullable();
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
        Schema::dropIfExists('bios');
    }
};
