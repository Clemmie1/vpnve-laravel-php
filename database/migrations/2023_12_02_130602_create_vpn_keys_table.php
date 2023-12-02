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
        Schema::create('vpn_keys', function (Blueprint $table) {
            $table->id();
            $table->foreignId('owner_id')->references('id')->on('users');
            $table->string('vpn_location')->nullable();
            $table->string('vpn_access_id')->nullable();
            $table->string('vpn_access_url')->nullable();
            $table->integer('vpn_traffic_mb')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vpn_keys');
    }
};
