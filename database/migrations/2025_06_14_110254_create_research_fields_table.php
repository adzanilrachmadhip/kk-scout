<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('research_fields', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // e.g. "Smart Cities / Village"
            $table->boolean('is_active')->default(false); // checkbox status
            $table->integer('order')->default(0); // for sorting
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('research_fields');
    }
};
