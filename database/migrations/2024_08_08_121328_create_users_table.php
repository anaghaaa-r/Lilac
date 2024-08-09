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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('fk_department')->constrained('departments')->onDelete('cascade');
            $table->foreignId('fk_designation')->constrained('designations')->onDelete('cascade');
            $table->string('phone_number');
            $table->timestamps();
        });

        DB::table('users')->insert([
            [
                'name' => 'Alice Johnson',
                'fk_department' => 1,
                'fk_designation' => 2,
                'phone_number' => '123-456-7890',
            ],
            [
                'name' => 'Bob Smith',
                'fk_department' => 5,
                'fk_designation' => 11,
                'phone_number' => '123-456-875'
            ],
            [
                'name' => 'Charlie Brown',
                'fk_department' => 2,
                'fk_designation' => 9,
                'phone_number' => '345-678-9012',
            ],
            [
                'name' => 'David Wilson',
                'fk_department' => 7,
                'fk_designation' => 6,
                'phone_number' => '456-789-0123',
            ],
            [
                'name' => 'Eva Green',
                'fk_department' => 4,
                'fk_designation' => 10,
                'phone_number' => '567-890-1234',
            ],
            [
                'name' => 'Frank Thomas',
                'fk_department' => 3,
                'fk_designation' => 8,
                'phone_number' => '678-901-2345',
            ],
            [
                'name' => 'Grace Lee',
                'fk_department' => 9,
                'fk_designation' => 1,
                'phone_number' => '232-454-7890'
            ],
            [
                'name' => 'Henry Scott',
                'fk_department' => 6,
                'fk_designation' => 4,
                'phone_number' => '890-123-4567',
            ],
            [
                'name' => 'Isabella Davis',
                'fk_department' => 8,
                'fk_designation' => 5,
                'phone_number' => '901-234-5678',
            ],
            [
                'name' => 'Jack White',
                'fk_department' => 11,
                'fk_designation' => 7,
                'phone_number' => '012-345-6789',
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
