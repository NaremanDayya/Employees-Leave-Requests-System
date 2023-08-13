<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /*
     * Run the migrations.
     */
    public function up(): void
    {
            Schema::create('requests', function (Blueprint $table) {
                $table->id();
                $table->foreignId('user_id')->constrained()->cascadeOnDelete();
                $table->foreignId('leave_type_id')->nullable()->constrained('leave_types')->nullOnDelete();
                $table->text('notes');
                $table->enum('status', ['accepted', 'waiting', 'rejected']);
                $table->text('reason')->nullable();
                $table->date('from')->nullable();
                $table->date('to')->nullable();
                $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('requests');
    }
};
