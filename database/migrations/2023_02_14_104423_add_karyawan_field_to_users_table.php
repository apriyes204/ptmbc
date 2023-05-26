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
        Schema::table('users', function (Blueprint $table) {
            $table->string('nik');
            $table->string('posisi')->default('');
            $table->string('departemen')->default('');
            $table->string('status')->default('');
            $table->string('no_telp')->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('nik');
            $table->dropColumn('posisi');
            $table->dropColumn('departemen');
            $table->dropColumn('status');
            $table->dropColumn('no_telp');
        });
    }
};
