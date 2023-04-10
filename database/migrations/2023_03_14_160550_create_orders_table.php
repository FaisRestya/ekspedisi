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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->date('startDate');
            $table->date('endDate');
            $table->string('category');
            $table->string('tipe');
            $table->string('tujuan');
            $table->string('jmlOrang');
            $table->string('konsumen');
            $table->string('phoneNumber');
            $table->string('alamat');
            $table->string('fotoKtp');

            $table->timestamps();
        });

        // start date, end date, category, tipe, tujuan, jumlah orang,
        // nama org booking, no telfon, alamat, email, foto ktp
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
