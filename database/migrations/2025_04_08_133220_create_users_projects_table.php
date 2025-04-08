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
        if (!Schema::hasTable('users_projects')) {
            Schema::create('users_projects', function (Blueprint $table) {
                //
                $table->increments('id');
                $table->unsignedInteger('user_id');
                $table->unsignedInteger('project_id');
                $table->longText('permissions')->nullable();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users_projects');
    }
};
