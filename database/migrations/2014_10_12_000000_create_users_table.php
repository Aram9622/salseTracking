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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('f_name');
            $table->string('l_name');
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('physical_address');
            $table->string('zip_code');
            $table->string('npn');
            $table->boolean('lllp_trusts');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('credit_card')->nullable();
            $table->string('credit_card_number')->nullable();
            $table->string('card_holder_name')->nullable();
            $table->string('cvv')->nullable();
            $table->string('expiry_month')->nullable();
            $table->string('expiry_year')->nullable();
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
