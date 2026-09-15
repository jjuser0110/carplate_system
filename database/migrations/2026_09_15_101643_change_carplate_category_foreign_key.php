<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('carplate_numbers', function (Blueprint $table) {
            $table->dropForeign(['category_id']);
        });

        Schema::table('carplate_numbers', function (Blueprint $table) {
            $table->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::table('carplate_numbers', function (Blueprint $table) {
            $table->dropForeign(['category_id']);
        });

        Schema::table('carplate_numbers', function (Blueprint $table) {
            $table->foreign('category_id')
                ->references('id')
                ->on('tags')
                ->onDelete('set null');
        });
    }
};