<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSyanesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('syanes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('nis');
              $table->string('nama_siswa');
               $table->text('alamat');
                $table->string('tempat_lahir');
                 $table->string('cita_cita');
                  $table->date('tanggal_lahir');
                   $table->string('hobi');
                    $table->string('foto');
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
        Schema::dropIfExists('syanes');
    }
}
