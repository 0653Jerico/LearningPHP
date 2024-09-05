<?php

declare(strict_types=1);

function get_username(object $pdo, string $username){
    $query = "SELECT username FROM users WHERE username = :username;";
    $stmt = $pdo->prepare($query);

    $stmt->bindParam(":username", $username);
    $stmt->execute();

    $results = $stmt->fetch(PDO::FETCH_ASSOC);
    return $results;
}

function get_email(object $pdo, string $email){
    $query = "SELECT email FROM users WHERE email = :email;";
    $stmt = $pdo->prepare($query);

    $stmt->bindParam(":email", $email);
    $stmt->execute();

    $results = $stmt->fetch(PDO::FETCH_ASSOC);
    return $results;
}