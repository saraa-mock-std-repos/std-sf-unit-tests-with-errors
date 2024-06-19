<?php

namespace App\Entity;

class Product
{
    private int $id;
    private \DateTimeImmutable $createdAt;
    private string $nom;
    private int $quantite;
    private int $description;

    public function __construct()
    {
        $this->id = random_int(0,3600) ;
        $this->createdAt = new \DateTimeImmutable('now', new \DateTimeZone('Europe/Paris'));
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getCreatedAt(): \DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }

    public function getQuantite(): int
    {
        return $this->quantite;
    }

    public function setQuantite(int $quantite): void
    {
        $this->quantite = $quantite;
    }

    public function getDescription(): int
    {
        return $this->description;
    }

    public function setDescription(int $description): void
    {
        $this->description = $description;
    }



}