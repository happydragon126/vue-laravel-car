<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuctionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auctions', function (Blueprint $table) {
            $table->bigIncrements('id_auction');
            $table->string('ID');
            $table->text('BESKRIVELSE')->nullable();
            $table->string('VIS_FASTTEKST')->nullable();
            $table->string('NR')->nullable();
            $table->string('TYPE')->nullable();
            $table->string('STATUS')->nullable();
            $table->string('SIST_ENDRET')->nullable();
            $table->string('FINN_KODE')->nullable();
            $table->text('KONTAKT')->nullable();
            $table->string('SALG')->nullable();
            $table->text('INFO')->nullable();
            $table->text('BILDE')->nullable();
            $table->text('UTSTYR')->nullable();
            $table->string('timer')->nullable();
            $table->boolean('checked')->default(false);
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
        Schema::dropIfExists('auctions');
    }
}
