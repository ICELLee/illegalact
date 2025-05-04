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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->string('ticket_number')->unique();
            $table->string('name');
            $table->string('email');
            $table->integer('age');
            $table->text('message');
            $table->string('subject')->default('General Inquiry');
            $table->string('event')->nullable();
            $table->date('event_date')->nullable();
            $table->time('event_time')->nullable();
            $table->string('djs')->nullable();
            $table->string('location')->nullable();
            $table->string('payment_status')->default('pending');
            $table->text('admin_reply')->nullable();
            $table->string('payment_method')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
