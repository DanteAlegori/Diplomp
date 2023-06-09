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
        $table->string('img',100)->nullable();
        $table->string('name',30)->nullable();
        $table->string('surname',30)->nullable();
        $table->string('patronomic',30)->nullable();
        $table->date('birthday_date')->nullable();
        $table->date('death_date')->nullable();
        $table->string('birthday_img',100)->nullable();
        $table->text('birthday_place')->nullable();
        $table->string('death_img',100)->nullable();
        $table->text('death_place')->nullable();
        $table->text('childhood_live_content')->nullable();
        $table->string('childhood_live_img',100)->nullable();
        $table->string('stydent_live_img',100)->nullable();
        $table->text('stydent_live_content')->nullable();
        $table->string('osnovnaia_live_img',100)->nullable();
        $table->text('osnovnaia_live_content')->nullable();
        $table->string('pensia_live_img',100)->nullable();
        $table->text('pensia_live_content')->nullable();
        $table->text('opisanie_deitelnosti')->nullable();
        $table->text('xp_for_work')->nullable();
        $table->text('achivments')->nullable();
        $table->text('nagradi')->nullable();
        $table->foreignId('categori_id')->nullable();
        $table->boolean('status')->default(false);
        $table->text('sourse')->nullable();
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
