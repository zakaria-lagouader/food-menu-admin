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
        Schema::create('cuisinier_products', function (Blueprint $table) {
            $table->id();
            $table->string("image");
            $table->string("designation");
            $table->string("imputation");
            $table->string("unite");
            $table->foreignId('cuisinier_category_id')
                ->constrained()
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cuisinier_products');
    }
};
