<?php

namespace App\Entity;

use App\Repository\EspecialidadRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EspecialidadRepository::class)]
class Especialidad
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nombre = null;

    #[ORM\Column(length: 1000)]
    private ?string $diseñocurricular = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getDiseñocurricular(): ?string
    {
        return $this->diseñocurricular;
    }

    public function setDiseñocurricular(string $diseñocurricular): self
    {
        $this->diseñocurricular = $diseñocurricular;

        return $this;
    }
}
