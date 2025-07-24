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
    Schema::table('about_us', function (Blueprint $table) {
        $table->string('sub_title')->nullable()->after('title'); // title'dan sonra eklenir
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
