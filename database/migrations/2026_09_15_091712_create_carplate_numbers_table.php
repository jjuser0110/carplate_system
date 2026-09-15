<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('carplate_numbers', function (Blueprint $table) {
            $table->id();
            $table->string('plate');
            $table->unsignedBigInteger('category_id')->nullable();
            $table->decimal('amount', 10, 2)->default(0);
            $table->boolean('is_active')->default(1);
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('category_id')->references('id')->on('tags')->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::table('carplate_numbers', function (Blueprint $table) {
            $table->dropForeign(['category_id']);
        });
        Schema::dropIfExists('carplate_numbers');
    }
};
