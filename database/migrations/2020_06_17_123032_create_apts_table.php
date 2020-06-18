<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAptsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('members');
            $table->integer('pets');
            $table->decimal('acc_balance', 7, 2);
            $table->boolean('is_big_apt');
            $table->boolean('is_rent_1');
            $table->boolean('is_rent_2');
            $table->boolean('is_rent_3');
            $table->boolean('is_pay_elevator');
            $table->boolean('is_cashier');
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
        Schema::dropIfExists('apts');
    }
}
