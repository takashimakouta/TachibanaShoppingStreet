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
        Schema::create('shopliststocks', function (Blueprint $table) {
            $table->id();
            $table->string('shop_name','50');
            $table->string('shop_category','50');
            $table->string('shop_summary','20');
            $table->string('shop_explain','60');
            $table->string('shop_postal','20');
            $table->string('shop_phone','50');
            $table->string('shop_fax','50');
            $table->string('shop_hour','30');
            $table->string('shop_dayoff','40'); 
            $table->string('shop_img','200');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shopliststocks');
    }
};
