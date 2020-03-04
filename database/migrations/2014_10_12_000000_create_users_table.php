<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom');
            $table->string('prenom');
            $table->string('sexe');
            $table->date('datenaissance');
            $table->string('nompere');
            $table->string('nommere');
            $table->string('situationmatrimoniale');
            $table->string('paysnaissance');
            $table->string('lieunaissance');
            $table->string('paysnationalite');
            $table->string('paysresidence');
            $table->string('villeresidence');
            $table->string('lieuhabitation');
            $table->string('pieceidentite');
            $table->string('numeropiece');
            $table->string('situationhandicap');
            $table->string('telephone');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
