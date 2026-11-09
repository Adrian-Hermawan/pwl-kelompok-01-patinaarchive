<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  
    public function up(): void
    {
        Schema::table('antreans', function (Blueprint $table) {
            $table->string('merek_sepatu', 100)->after('no_hp');
            $table->text('catatan')->nullable()->after('merek_sepatu');
        });
    }

    public function down(): void
    {
        Schema::table('antreans', function (Blueprint $table) {
            $table->dropColumn(['merek_sepatu', 'catatan']);
        });
    }
    
};
