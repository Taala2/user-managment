<?php
class User {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function create($username, $email, $password) {
        $stmt = $this->db->prepare("INSERT INTO users (username, email, password) VALUES (:username, :email, :password)");
        return $stmt->execute([
            'username' => $username,
            'email' => $email,
            'password' => $password
        ]);
    }
}