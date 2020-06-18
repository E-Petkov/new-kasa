<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateYmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('yms', function (Blueprint $table) {
            $table->id();
            $table->decimal('coffee_rent', 7, 2);
            $table->decimal('coffee_elect', 7, 2);
            $table->decimal('stair_elect', 7, 2);
            $table->decimal('cleaning', 7, 2);
            $table->decimal('cashier', 7, 2);
            $table->decimal('elevator_tech', 7, 2);
            $table->decimal('elevator_elect', 7, 2);
            $table->decimal('big_apt', 7, 2);
            $table->decimal('small_apt', 7, 2);
            $table->decimal('rent_1', 7, 2);
            $table->decimal('rent_2', 7, 2);
            $table->decimal('rent_3', 7, 2);
            $table->integer('members_total');
            $table->integer('pets_total');
            $table->integer('members_elevator');
            $table->integer('pets_elevator');
            $table->text('message');
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
        Schema::dropIfExists('yms');
    }
}
