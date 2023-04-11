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
        Schema::table('payment', function (Blueprint $table) {
            $table->unsignedBigInteger('order_id');
            $table->foreign('order_id')->references('id')->on('orders');
            $table->unsignedBigInteger('metode_id');
            $table->foreign('metode_id')->references('id')->on('metode');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('payment', function (Blueprint $table) {
            $table->dropForeign('payment_order_id_foreign');
            $table->dropColumn('order_id');
            $table->dropForeign('payment_metode_id_foreign');
            $table->dropColumn('metode_id');
        });
    }
};
