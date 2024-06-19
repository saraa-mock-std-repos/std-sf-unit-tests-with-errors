<?php

namespace App\Entity;

class Product
{
    private int $id;
    private \DateTimeImmutable $createdAt;
    private string $nom;
    private string $quantite;
    private string $description;

    public function __construct()
    {
        $this->id = random_int(0,3600) ;
        $this->createdAt = new \DateTimeImmutable('now', new \DateTimeZone('Europe/Paris'));
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return \DateTimeImmutable
     */
    public function getCreatedAt(): \DateTimeImmutable
    {
        return $this->createdAt;
    }

    /**
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     */
    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }

    /**
     * @return int
     */
    public function getQuantite(): string
    {
        return $this->quantite;
    }

    /**
     * @param string $quantite
     */
    public function setQuantite(string $quantite): void
    {
        $this->quantite = $quantite;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

}