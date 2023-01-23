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
        Schema::create('siswas', function (Blueprint $table) {
            $table->id(); 
            $table->foreignId('kelas_id'); 
            $table->string('guru_id',50); 
            $table->integer('nis');
            $table->string('nama',50);
            $table->string('username',50);
            $table->string('email')->unique();
            $table->string('jk',20);
            $table->string('alamat',50);
            $table->string('agama',15);
            // $table->string('kelas',15);
            // $table->string('kode_guru',15);
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
        Schema::dropIfExists('siswas');
    }
};
