<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('departments', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        DB::table('departments')->insert([
            [
                'name' => 'Information Technology (IT)'
            ],
            [
                'name' => 'Research and Development (R&D)'
            ],
            [
                'name' => 'Marketing'
            ],
            [
                'name' => 'Sales'
            ],
            [
                'name' => 'Finance'
            ],
            [
                'name' => 'Operations'
            ],
            [
                'name' => 'Legal'
            ],
            [
                'name' => 'Design'
            ],
            [
                'name' => 'Administration'
            ],
            [
                'name' => 'Security'
            ],
            [
                'name' => 'Logistics'
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('departments');
    }
};
