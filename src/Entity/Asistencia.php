<?php

namespace App\Entity;

use App\Repository\AsistenciaRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AsistenciaRepository::class)]
class Asistencia
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $cantasistencia = null;

    #[ORM\Column(length: 255)]
    private ?string $reintegrado = null;

    #[ORM\Column(length: 255)]
    private ?string $turno = null;

    #[ORM\Column(length: 255)]
    private ?string $evento = null;

    #[ORM\Column(length: 255)]
    private ?string $condicion = null;

    #[ORM\Column(length: 255)]
    private ?string $horaasistencia = null;

    #[ORM\Column(length: 255)]
    private ?string $fechaasistencia = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCantasistencia(): ?string
    {
        return $this->cantasistencia;
    }

    public function setCantasistencia(string $cantasistencia): self
    {
        $this->cantasistencia = $cantasistencia;

        return $this;
    }

    public function getReintegrado(): ?string
    {
        return $this->reintegrado;
    }

    public function setReintegrado(string $reintegrado): self
    {
        $this->reintegrado = $reintegrado;

        return $this;
    }

    public function getTurno(): ?string
    {
        return $this->turno;
    }

    public function setTurno(string $turno): self
    {
        $this->turno = $turno;

        return $this;
    }

    public function getEvento(): ?string
    {
        return $this->evento;
    }

    public function setEvento(string $evento): self
    {
        $this->evento = $evento;

        return $this;
    }

    public function getCondicion(): ?string
    {
        return $this->condicion;
    }

    public function setCondicion(string $condicion): self
    {
        $this->condicion = $condicion;

        return $this;
    }

    public function getHoraasistencia(): ?string
    {
        return $this->horaasistencia;
    }

    public function setHoraasistencia(string $horaasistencia): self
    {
        $this->horaasistencia = $horaasistencia;

        return $this;
    }

    public function getFechaasistencia(): ?string
    {
        return $this->fechaasistencia;
    }

    public function setFechaasistencia(string $fechaasistencia): self
    {
        $this->fechaasistencia = $fechaasistencia;

        return $this;
    }
}
