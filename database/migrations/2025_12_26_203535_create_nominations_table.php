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
        Schema::create('nominations', function (Blueprint $table) {
            $table->id();
            
            // Nominee Details
            $table->string('nominee_first_name');
            $table->string('nominee_last_name');
            $table->string('nominee_job_title');
            $table->string('nominee_company');
            $table->string('nominee_city');
            $table->string('nominee_county');
            $table->string('nominee_email');
            $table->string('nominee_contact');
            $table->string('nominee_linkedin')->nullable();
            
            // Nominator Details
            $table->string('nominator_name');
            $table->string('nominator_surname');
            $table->string('nominator_job_title');
            $table->string('nominator_company');
            $table->string('nominator_city');
            $table->string('nominator_county');
            $table->string('nominator_email');
            $table->string('nominator_contact');
            
            // Award Category
            $table->string('award_category');
            
            // Questions
            $table->text('question_1');
            $table->text('question_2');
            $table->text('question_3');
            $table->text('question_4');
            
            // Terms Acceptance
            $table->boolean('terms_accepted')->default(false);
            
            // Status and Metadata
            $table->enum('status', ['pending', 'under_review', 'shortlisted', 'rejected', 'winner'])->default('pending');
            $table->text('admin_notes')->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nominations');
    }
};
