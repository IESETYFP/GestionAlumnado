<?php

namespace App\Entity;

use App\Repository\PersonalRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PersonalRepository::class)]
class Personal
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $dni_p = null;

    #[ORM\Column(length: 255)]
    private ?string $legajo_p = null;

    #[ORM\Column(length: 255)]
    private ?string $nombres_p = null;

    #[ORM\Column(length: 255)]
    private ?string $apellidos_p = null;

    #[ORM\Column(length: 255)]
    private ?string $tel_p = null;

    #[ORM\Column(length: 255)]
    private ?string $declaracionjurada = null;

    #[ORM\Column(length: 255)]
    private ?string $copiadni_p = null;

    #[ORM\Column(length: 255)]
    private ?string $rol = null;

    #[ORM\Column(length: 255)]
    private ?string $fechanacimiento_p = null;

    #[ORM\Column(length: 255)]
    private ?string $cuil_p = null;

    #[ORM\Column(length: 255)]
    private ?string $direccion_p = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDniP(): ?string
    {
        return $this->dni_p;
    }

    public function setDniP(string $dni_p): self
    {
        $this->dni_p = $dni_p;

        return $this;
    }

    public function getLegajoP(): ?string
    {
        return $this->legajo_p;
    }

    public function setLegajoP(string $legajo_p): self
    {
        $this->legajo_p = $legajo_p;

        return $this;
    }

    public function getNombresP(): ?string
    {
        return $this->nombres_p;
    }

    public function setNombresP(string $nombres_p): self
    {
        $this->nombres_p = $nombres_p;

        return $this;
    }

    public function getApellidosP(): ?string
    {
        return $this->apellidos_p;
    }

    public function setApellidosP(string $apellidos_p): self
    {
        $this->apellidos_p = $apellidos_p;

        return $this;
    }

    public function getTelP(): ?string
    {
        return $this->tel_p;
    }

    public function setTelP(string $tel_p): self
    {
        $this->tel_p = $tel_p;

        return $this;
    }

    public function getDeclaracionjurada(): ?string
    {
        return $this->declaracionjurada;
    }

    public function setDeclaracionjurada(string $declaracionjurada): self
    {
        $this->declaracionjurada = $declaracionjurada;

        return $this;
    }

    public function getCopiadniP(): ?string
    {
        return $this->copiadni_p;
    }

    public function setCopiadniP(string $copiadni_p): self
    {
        $this->copiadni_p = $copiadni_p;

        return $this;
    }

    public function getRol(): ?string
    {
        return $this->rol;
    }

    public function setRol(string $rol): self
    {
        $this->rol = $rol;

        return $this;
    }

    public function getFechanacimientoP(): ?string
    {
        return $this->fechanacimiento_p;
    }

    public function setFechanacimientoP(string $fechanacimiento_p): self
    {
        $this->fechanacimiento_p = $fechanacimiento_p;

        return $this;
    }

    public function getCuilP(): ?string
    {
        return $this->cuil_p;
    }

    public function setCuilP(string $cuil_p): self
    {
        $this->cuil_p = $cuil_p;

        return $this;
    }

    public function getDireccionP(): ?string
    {
        return $this->direccion_p;
    }

    public function setDireccionP(string $direccion_p): self
    {
        $this->direccion_p = $direccion_p;

        return $this;
    }
}
