<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_payments', function (Blueprint $table) {
            $table->id();

            $table->integer('money_paid');
            $table->text('note');
            $table->enum('status', array('accepted', 'refused','pending')); 
            $table->string('file');

            $table->bigInteger('student_id')->default(0);
            $table->bigInteger('service_id')->default(0);

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
        Schema::dropIfExists('service_payments');
    }
}
