<?php

require __DIR__.'/vendor/autoload.php';

$app = require_once __DIR__.'/bootstrap/app.php';
$app->make('Illuminate\Contracts\Console\Kernel')->bootstrap();

use App\Models\Nomination;

// Test creating a nomination directly
try {
    $nomination = Nomination::create([
        'nominee_first_name' => 'Test',
        'nominee_last_name' => 'Nominee',
        'nominee_job_title' => 'Test Job',
        'nominee_company' => 'Test Company',
        'nominee_city' => 'Test City',
        'nominee_county' => 'Test County',
        'nominee_email' => 'test@example.com',
        'nominee_contact' => '1234567890',
        'nominee_linkedin' => null,
        'nominator_name' => 'Test',
        'nominator_surname' => 'Nominator',
        'nominator_job_title' => 'Test Job',
        'nominator_company' => 'Test Company',
        'nominator_city' => 'Test City',
        'nominator_county' => 'Test County',
        'nominator_email' => 'nominator@example.com',
        'nominator_contact' => '0987654321',
        'award_category' => 'Test Category',
        'question_1' => str_repeat('This is a test answer for question 1. ', 10),
        'question_2' => str_repeat('This is a test answer for question 2. ', 10),
        'question_3' => str_repeat('This is a test answer for question 3. ', 10),
        'question_4' => str_repeat('This is a test answer for question 4. ', 10),
        'terms_accepted' => true,
    ]);

    echo "✓ Test nomination created successfully!\n";
    echo "Nomination ID: " . $nomination->id . "\n";
    echo "Nominee: " . $nomination->nominee_full_name . "\n";
    echo "Nominator: " . $nomination->nominator_full_name . "\n";
    echo "\nTotal nominations in database: " . Nomination::count() . "\n";
} catch (\Exception $e) {
    echo "✗ Error creating nomination:\n";
    echo $e->getMessage() . "\n";
    echo "\nStack trace:\n";
    echo $e->getTraceAsString() . "\n";
}
