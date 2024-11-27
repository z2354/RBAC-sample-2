<?php
// Include JWT library (you need to install Firebase JWT or manually include it)
// Use Composer to install the Firebase JWT library: composer require firebase/php-jwt
use \Firebase\JWT\JWT;

// Function to hash passwords
function hashPassword($password) {
    return password_hash($password, PASSWORD_BCRYPT);
}

// Function to verify password
function verifyPassword($password, $hashedPassword) {
    return password_verify($password, $hashedPassword);
}

// Function to generate a JWT token
function generateJwt($userId, $role) {
    $key = "your_jwt_secret";  // This should be a secret string, do not hardcode in production
    $issuedAt = time();
    $expirationTime = $issuedAt + 3600;  // jwt valid for 1 hour from issued time
    $payload = array(
        "userId" => $userId,
        "role" => $role,
        "iat" => $issuedAt,
        "exp" => $expirationTime
    );

    return JWT::encode($payload, $key);
}
?>
