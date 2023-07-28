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
        Schema::create('estimates', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_id');
            $table->string('reference');
            $table->decimal('tax_rate', 10, 2);
            $table->date('issue_date');
            $table->string('deadline')->nullable();
            $table->boolean('prepayment')->default(false);
            $table->enum('status', [
                'creation',
                'sended',
                'signed',
                'refused',
            ]);
            $table->boolean('presigned')->default(false);
            $table->foreignId('attachment_path')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estimates');
    }
};
