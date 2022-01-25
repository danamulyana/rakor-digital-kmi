<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('muser', function (Blueprint $table) {
            $table->uuid('txtId')->unique();
            $table->string('txtNik')->unique();
            $table->string('txtFullname');
            $table->enum('txtRole',['ADMIN','USER','LEADER']);
            $table->foreignId('txtGroupId')->constrained('mgroup','txtId')->onDelete('cascade');
            $table->string('txtemail')->unique()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('txtPassword');
            $table->string('password')->default('$2y$10$.xlaSPVxDH399aigcj2lOOJ1fldGXgcOwFudqMSswnFFN88vSgZem'); //kalbe22
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
            $table->timestamps();
            $table->id();
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
