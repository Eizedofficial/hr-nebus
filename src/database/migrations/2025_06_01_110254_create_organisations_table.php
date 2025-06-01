<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('organisations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('building_id')
                ->constrained('buildings')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('activity_organisation', function (Blueprint $table) {
            $table->id();
            $table->foreignId('activity_id')
                ->constrained('activities')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
            $table->foreignId('organisation_id')
                ->constrained('organisations')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();

            $table->unique(['organisation_id', 'activity_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('activity_organisation');
        Schema::dropIfExists('organisations');
    }
};
