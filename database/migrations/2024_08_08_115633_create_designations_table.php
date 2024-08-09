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
        Schema::create('designations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        DB::table('designations')->insert([
            [
                'name' => 'HR'
            ],
            [
                'name' => 'Web Developer'
            ],
            [
                'name' => 'Backend Developer'
            ],
            [
                'name' => 'UI Developer'
            ],
            [
                'name' => 'Graphic Designer'
            ],
            [
                'name' => 'Project Manager'
            ],
            [
                'name' => 'Product Owner'
            ],
            [
                'name' => 'Team Lead'
            ],
            [
                'name' => 'System Architect'
            ],
            [
                'name' => 'Manager'
            ],
            [
                'name' => 'CEO'
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('designations');
    }
};
