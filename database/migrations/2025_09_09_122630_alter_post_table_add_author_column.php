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
        Schema::table('Post', function (Blueprint $table) { // modify Post table

            $table->string('author')->after('body');// add author column after body column
            //
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('Post', function (Blueprint $table) {
            //
            $table->dropColumn('author'); // drop author column
        });
    }
};
