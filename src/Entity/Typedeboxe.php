<?php

namespace App\Entity;

use App\Repository\TypedeboxeRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TypedeboxeRepository::class)]
class Typedeboxe
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $formedeboxe = null;

    #[ORM\Column]
    private ?bool $active = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFormedeboxe(): ?string
    {
        return $this->formedeboxe;
    }

    public function setFormedeboxe(string $formedeboxe): static
    {
        $this->formedeboxe = $formedeboxe;

        return $this;
    }

    public function isActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(bool $active): static
    {
        $this->active = $active;

        return $this;
    }
}
