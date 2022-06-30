<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('land_use_charges', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('parcel_id')->index();
            $table->float('amount');
            $table->string('payment_code')->unique();
            $table->float('balance_carried_forward')->nullable();
            $table->string('year')->index();
            $table->softDeletes();
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
        Schema::dropIfExists('land_use_charges');
    }
};
