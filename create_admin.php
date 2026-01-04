<?php

require __DIR__.'/vendor/autoload.php';

$app = require_once __DIR__.'/bootstrap/app.php';
$app->make('Illuminate\Contracts\Console\Kernel')->bootstrap();

use App\Models\User;
use Illuminate\Support\Facades\Hash;

// Create admin user
$user = User::firstOrCreate(
    ['email' => 'admin@bamehscawards.org'],
    [
        'name' => 'Admin',
        'password' => Hash::make('admin123'),
    ]
);

echo "Admin user created successfully!\n";
echo "Email: admin@bamehscawards.org\n";
echo "Password: admin123\n";
echo "\nYou can now login at: /login\n";
echo "Then access the dashboard at: /admin/nominations\n";
