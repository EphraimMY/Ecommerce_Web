<?php
namespace App\Models;

use App\Database;
use PDO;

class User {
    private int $id;
    private string $fname;
    private string $lname;
    private string $email;
    private string $passwordHash;
    private ?string $phoneNumber;
    private string $role;
    private string $createdAt;

    public function __construct(
        string $fname,
        string $lname,
        string $email,
        string $passwordHash,
        ?string $phoneNumber = null,
        string $role = 'customer'
    ) {
        $this->fname = $fname;
        $this->lname = $lname;
        $this->email = $email;
        $this->passwordHash = $passwordHash;
        $this->phoneNumber = $phoneNumber;
        $this->role = $role;
    }


    public function getId(): int {
        return $this->id;
    }

    public function getFname(): string {
        return $this->fname;
    }

    public function setFname(string $fname): void {
        $this->fname = $fname;
    }

    public function getLname(): string {
        return $this->lname;
    }

    public function setLname(string $lname): void {
        $this->lname = $lname;
    }

    public function getEmail(): string {
        return $this->email;
    }

    public function setEmail(string $email): void {
        $this->email = $email;
    }

    public function getPasswordHash(): string {
        return $this->passwordHash;
    }

    public function setPasswordHash(string $passwordHash): void {
        $this->passwordHash = $passwordHash;
    }

    public function getPhoneNumber(): ?string {
        return $this->phoneNumber;
    }

    public function setPhoneNumber(?string $phoneNumber): void {
        $this->phoneNumber = $phoneNumber;
    }

    public function getRole(): string {
        return $this->role;
    }

    public function setRole(string $role): void {
        $this->role = $role;
    }

    public function getCreatedAt(): string {
        return $this->createdAt;
    }

    public function setCreatedAt(string $createdAt): void {
        $this->createdAt = $createdAt;
    }


    public function save(): bool {
        $pdo = Database::getConnection();
        $query = "INSERT INTO users (fname, lname, email, password_hash, phone_number, role) 
                  VALUES (:fname, :lname, :email, :password_hash, :phone_number, :role)";
        $stmt = $pdo->prepare($query);
        return $stmt->execute([
            ':fname' => $this->fname,
            ':lname' => $this->lname,
            ':email' => $this->email,
            ':password_hash' => $this->passwordHash,
            ':phone_number' => $this->phoneNumber,
            ':role' => $this->role
        ]);
    }

    public static function getAll($page = 1): array {
        $pdo = Database::getConnection();
        $query = "SELECT * FROM users WHERE role = 'customer'";
        $stmt = $pdo->query($query);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function findByEmail(string $email): ?self {
        $pdo = Database::getConnection();
        $query = "SELECT * FROM users WHERE email = :email";
        $stmt = $pdo->prepare($query);
        $stmt->execute([':email' => $email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        
        return $user ? new self(
            $user['fname'],
            $user['lname'],
            $user['email'],
            $user['password_hash'],
            $user['phone_number'] ?? null,
            $user['role']
        ) : null;
    }

    public function update(): bool {
        $pdo = Database::getConnection();
        $query = "UPDATE users SET fname = :fname, lname = :lname, email = :email, password_hash = :password_hash, phone_number = :phone_number,  role = :role WHERE email = :email";
        $stmt = $pdo->prepare($query);
        return $stmt->execute([
            ':fname' => $this->fname,
            ':lname' => $this->lname,
            ':email' => $this->email,
            ':password_hash' => $this->passwordHash,
            ':phone_number' => $this->phoneNumber,
            ':role' => $this->role
        ]);
    }

    public function delete(): bool {
        $pdo = Database::getConnection();
        $query = "DELETE FROM users WHERE email = :email";
        $stmt = $pdo->prepare($query);
        return $stmt->execute([':email' => $this->email]);
    }
}
