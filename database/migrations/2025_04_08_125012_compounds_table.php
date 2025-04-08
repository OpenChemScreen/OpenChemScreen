<?php

use Illuminate\Database\Migrations\Migration;
use MongoDB\Laravel\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    protected $connection = 'mongodb';
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $hasCollection = Schema::hasCollection('compounds');
        if (!$hasCollection) {
            //
            Schema::create('compounds', function (Blueprint $collection) {
                $collection->unique('id');
                $collection->index('project_id');
                $collection->index('project_type');
                $collection->unique('smiles');
                $collection->unique('chembl_id');
                $collection->index('mol_name');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        $hasCollection = Schema::hasCollection('compounds');
        if ($hasCollection) {
            Schema::drop('compounds');
        }
    }
};
