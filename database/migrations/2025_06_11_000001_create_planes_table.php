<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('planes', function (Blueprint $table) {
            $table->id();
            $table->string('model');
            $table->string('code')->unique();
            $table->integer('capacity');
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('planes');
    }
};
