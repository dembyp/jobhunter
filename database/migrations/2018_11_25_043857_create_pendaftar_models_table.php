<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePendaftarModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftar', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('email');
            $table->string('pekerjaan');
            $table->text('alamat');
            $table->longtext('resume');
            $table->timestamps();
        });

        //INSERT DATA
        DB::table('pendaftar')->insert(
            array(
                'nama'=>'demby',
                'email'=>'demby@sikam.com',
                'pekerjaan'=>'tidak ada',
                'alamat'=>'jl pratama 31 palembang',
                'resume'=>'hobi mancing dan bergadang sambil mengerjakan program'
                ));
                DB::table('pendaftar')->insert(
            array(
                'nama'=>'andi',
                'email'=>'andi@sikam.com',
                'pekerjaan'=>'pemancing',
                'alamat'=>'jl pratama 32 palembang',
                'resume'=>'hobi mancing dan bergadang sambil mengerjakan program'
                ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pendaftar');
    }
}
