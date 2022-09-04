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
        Schema::create('code_rabah_cells', function (Blueprint $table) {
            $table->id();

             // foreign
             $table->foreignId('senior_cell_id')->constrained()->cascadeOnDelete();

             $table->string('name');
             $table->string('leader');
             
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
        Schema::dropIfExists('code_rabah_cells');
    }
};
