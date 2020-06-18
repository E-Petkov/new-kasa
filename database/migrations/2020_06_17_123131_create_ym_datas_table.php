<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateYmDatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ym_datas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('apt_id');
            $table->foreignId('ym_id');
            $table->string('name');
            $table->integer('apt_mems');
            $table->integer('apt_pets');
            $table->decimal('owe_stair', 7, 2);
            $table->decimal('owe_elevator', 7, 2);
            $table->decimal('owe_cleaning', 7, 2);
            $table->decimal('owe_cashier', 7, 2);
            $table->decimal('owe_bs_apt', 7, 2);
            $table->decimal('owe_rent', 7, 2);
            $table->decimal('owe_this_month', 7, 2);
            $table->decimal('owe_total', 7, 2);
            $table->decimal('owe_rounded', 7, 2);
            $table->decimal('paid', 7, 2);
            $table->boolean('paid_clear');
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
        Schema::dropIfExists('ym_datas');
    }
}
