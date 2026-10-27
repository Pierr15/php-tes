<?php

declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';

use App\Health;

$path = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);

header('Content-Type: application/json; charset=utf-8');
header('X-Content-Type-Options: nosniff');

if ($path === '/health') {
    http_response_code(200);
    echo json_encode(Health::status(), JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
    exit;
}

if ($path !== '/') {
    http_response_code(404);
    echo json_encode([
        'status' => 'not_found',
        'message' => 'Route not found',
    ], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
    exit;
}

echo json_encode([
    'app' => 'PHP Status Dashboard',
    'status' => 'running',
    'message' => 'Application is running!',
    'health' => '/health',
], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
