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
      Schema::create('leases', function (Blueprint $table) {
    $table->id();
    $table->string('tenant_name');
    $table->string('unit');
    $table->date('start_date');
    $table->date('end_date');
    $table->string('monthly_rent'); 
    $table->string('desposit');
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leases');
    }
};
