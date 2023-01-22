<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration
{
    public function up()
    {
        Schema::create('Users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phoneNumber')->unique();
            $table->string('email')->unique();
            $table->string('nik')->unique();
            $table->date('dateOfBirth');
            $table->string('password');
            $table->string('remember_token');
            $table->unsignedBigInteger('RoleId')->unsigned();
            $table->timestamps();
        });
        Schema::table('Users', function($table) {
            $table->foreign('RoleId')->references('id')->on('Roles');
        });
    }
    public function down()
    {
        Schema::dropIfExists('Users');
    }
};
