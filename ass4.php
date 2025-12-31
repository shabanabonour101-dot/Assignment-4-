<?php
session_start();

if (!isset($_SESSION['role'])) {
    die("Access denied: Not logged in");
}

$requestedType = $_GET['type'] ?? 'user';

if ($requestedType === 'admin' && $_SESSION['role'] !== 'admin') {
    http_response_code(403);
    die("Access denied: You are not authorized to view this report");
}

if ($requestedType === 'admin') {
    echo "Admin Report";
} else {
    echo "User Report";
}
?>


