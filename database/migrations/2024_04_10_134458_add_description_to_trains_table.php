<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('trains', function (Blueprint $table) {
            $table->string('company', 100);
            $table->string('departure_station', 100);
            $table->string('arrival_station', 100);
            $table->time('departure_time');
            $table->time('arrival_time');
            $table->tinyText('train_code', 100);
            $table->tinyInteger('train_carriage');
            $table->boolean('on_schedule');
            $table->boolean('cancelled');
        });
    }


    public function down(): void
    {
        Schema::table('trains', function (Blueprint $table) {
            $table->dropColumn('company');
            $table->dropColumn('departure_station');
            $table->dropColumn('arrival_station');
            $table->dropColumn('departure_time');
            $table->dropColumn('arrival_time');
            $table->dropColumn('train_code');
            $table->dropColumn('train_carriage');
            $table->dropColumn('on_schedule');
            $table->dropColumn('cancelled');
        });
    }
};
