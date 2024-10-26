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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('first_name',50);
            $table->longText('last_name')->nullable();
            $table->string('country')->default('banglades');
            $table->string('pincode')->default('1234')->invisible();
            $table->timestamp('create_date')->useCurrent();
            $table->timestamp('update_date')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
