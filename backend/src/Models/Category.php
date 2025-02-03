<?php
namespace App\Models;

use App\Database;
use PDO;

class Category{
    private int $id;
    private string $name;
    private string $slug;

    public function __construct( string $name, string $slug )
    {
        $this->name = $name;
        $this->slug = $slug;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getSlug(): string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): void
    {
        $this->slug = $slug;
    }

    public static function all(): array
    {
        $statement = Database::getConnection()->query('SELECT * FROM categories');
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
    

    public static function findById(int $id): ?Category
    {
        $statement = Database::getConnection()->prepare('SELECT * FROM categories WHERE id = :id');
        $statement->execute(['id' => $id]);
        $data = $statement->fetch(PDO::FETCH_ASSOC);
        if (!$data) {
            return null;
        }
        $category = new self($data['name'], $data['slug']);
        $category->setId($data['id']);
        return $category;
    }


    public static function findBySlug(string $slug): ?Category
    {
        $statement = Database::getConnection()->prepare('SELECT * FROM categories WHERE slug = :slug');
        $statement->execute(['slug' => $slug]);
        $data = $statement->fetch(PDO::FETCH_ASSOC);
        if (!$data) {
            return null;
        }
        $category = new self($data['name'], $data['slug']);
        $category->setId($data['id']);
        return $category;
    }

    public function create(): bool
    {
        $statement = Database::getConnection()->prepare('INSERT INTO categories (name, slug) VALUES (:name, :slug)');
        return $statement->execute([
            'name' => $this->name,
            'slug' => $this->slug
        ]);
    }

    public function update(): bool
    {
        $statement = Database::getConnection()->prepare('UPDATE categories SET name = :name, slug = :slug WHERE id = :id');
        return $statement->execute([
            'id' => $this->id,
            'name' => $this->name,
            'slug' => $this->slug
        ]);
    }

    public function delete(): bool
    {
        $statement = Database::getConnection()->prepare('DELETE FROM categories WHERE id = :id');
        return $statement->execute(['id' => $this->id]);
    }
    
}