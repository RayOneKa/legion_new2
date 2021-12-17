<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttestationRezultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attestation_rezults', function (Blueprint $table) {
            $table->id();
            $table->foreignId('athlete_id')->constrained('athletes');
            $table->foreignId('tqtitle_id')->constrained('tqtitles');
            $table->string('sertificatenum', 45);
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
        Schema::dropIfExists('attestation_rezults');
    }
}
