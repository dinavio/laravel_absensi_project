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
        Schema::create('gurus', function (Blueprint $table) {
            $table->id();
            // $table->string('image')->nullable();
            $table->string('nip',20);
            $table->string('name',50);
            $table->string('image',255);
            $table->foreignId('kelas_id',50);
            $table->string('email')->unique();
            $table->string('username',50);
            $table->string('jk',20);
            $table->string('alamat',50);
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
        Schema::dropIfExists('gurus');
    }
};
