<?php

namespace App\Entity;

use App\Repository\FamilyProductRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FamilyProductRepository::class)]
class FamilyProduct
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 60)]
    private ?string $name = null;

    #[ORM\Column]
    private ?float $identify = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getIdentify(): ?float
    {
        return $this->identify;
    }

    public function setIdentify(float $identify): self
    {
        $this->identify = $identify;

        return $this;
    }

    public function __toString(): string
    {
        return $this->getIdentify();
    }
}
