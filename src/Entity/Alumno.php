<?php

namespace App\Entity;

use App\Repository\AlumnoRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AlumnoRepository::class)]
class Alumno
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $dni_a = null;

    #[ORM\Column(length: 255)]
    private ?string $legajo_a = null;

    #[ORM\Column(length: 255)]
    private ?string $nombres_a = null;

    #[ORM\Column(length: 255)]
    private ?string $apellido_a = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $tel_a = null;

    #[ORM\Column(length: 255)]
    private ?string $direccion_a = null;

    #[ORM\Column(length: 255)]
    private ?string $cuil = null;

    #[ORM\Column(length: 255)]
    private ?string $copiadni_a = null;

    #[ORM\Column(length: 255)]
    private ?string $fechanacimiento_a = null;

    #[ORM\Column(length: 255)]
    private ?string $lugarnacimiento_a = null;

    #[ORM\Column(length: 255)]
    private ?string $codigopostal_a = null;

    #[ORM\Column(length: 255)]
    private ?string $certificadovacuna_a = null;

    #[ORM\Column(length: 255)]
    private ?string $electrocardiograma_a = null;

    #[ORM\Column(length: 255)]
    private ?string $certificadoaptitud_a = null;

    #[ORM\Column(length: 255)]
    private ?string $certificadosalud_a = null;

    #[ORM\Column(length: 255)]
    private ?string $cap_a = null;

    #[ORM\Column(length: 255)]
    private ?string $tutores = null;

    #[ORM\Column(length: 255)]
    private ?string $genero = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDniA(): ?string
    {
        return $this->dni_a;
    }

    public function setDniA(string $dni_a): self
    {
        $this->dni_a = $dni_a;

        return $this;
    }

    public function getLegajoA(): ?string
    {
        return $this->legajo_a;
    }

    public function setLegajoA(string $legajo_a): self
    {
        $this->legajo_a = $legajo_a;

        return $this;
    }

    public function getNombresA(): ?string
    {
        return $this->nombres_a;
    }

    public function setNombresA(string $nombres_a): self
    {
        $this->nombres_a = $nombres_a;

        return $this;
    }

    public function getApellidoA(): ?string
    {
        return $this->apellido_a;
    }

    public function setApellidoA(string $apellido_a): self
    {
        $this->apellido_a = $apellido_a;

        return $this;
    }

    public function getTelA(): ?string
    {
        return $this->tel_a;
    }

    public function setTelA(?string $tel_a): self
    {
        $this->tel_a = $tel_a;

        return $this;
    }

    public function getDireccionA(): ?string
    {
        return $this->direccion_a;
    }

    public function setDireccionA(string $direccion_a): self
    {
        $this->direccion_a = $direccion_a;

        return $this;
    }

    public function getCuil(): ?string
    {
        return $this->cuil;
    }

    public function setCuil(string $cuil): self
    {
        $this->cuil = $cuil;

        return $this;
    }

    public function getCopiadniA(): ?string
    {
        return $this->copiadni_a;
    }

    public function setCopiadniA(string $copiadni_a): self
    {
        $this->copiadni_a = $copiadni_a;

        return $this;
    }

    public function getFechanacimientoA(): ?string
    {
        return $this->fechanacimiento_a;
    }

    public function setFechanacimientoA(string $fechanacimiento_a): self
    {
        $this->fechanacimiento_a = $fechanacimiento_a;

        return $this;
    }

    public function getLugarnacimientoA(): ?string
    {
        return $this->lugarnacimiento_a;
    }

    public function setLugarnacimientoA(string $lugarnacimiento_a): self
    {
        $this->lugarnacimiento_a = $lugarnacimiento_a;

        return $this;
    }

    public function getCodigopostalA(): ?string
    {
        return $this->codigopostal_a;
    }

    public function setCodigopostalA(string $codigopostal_a): self
    {
        $this->codigopostal_a = $codigopostal_a;

        return $this;
    }

    public function getCertificadovacunaA(): ?string
    {
        return $this->certificadovacuna_a;
    }

    public function setCertificadovacunaA(string $certificadovacuna_a): self
    {
        $this->certificadovacuna_a = $certificadovacuna_a;

        return $this;
    }

    public function getElectrocardiogramaA(): ?string
    {
        return $this->electrocardiograma_a;
    }

    public function setElectrocardiogramaA(string $electrocardiograma_a): self
    {
        $this->electrocardiograma_a = $electrocardiograma_a;

        return $this;
    }

    public function getCertificadoaptitudA(): ?string
    {
        return $this->certificadoaptitud_a;
    }

    public function setCertificadoaptitudA(string $certificadoaptitud_a): self
    {
        $this->certificadoaptitud_a = $certificadoaptitud_a;

        return $this;
    }

    public function getCertificadosaludA(): ?string
    {
        return $this->certificadosalud_a;
    }

    public function setCertificadosaludA(string $certificadosalud_a): self
    {
        $this->certificadosalud_a = $certificadosalud_a;

        return $this;
    }

    public function getCapA(): ?string
    {
        return $this->cap_a;
    }

    public function setCapA(string $cap_a): self
    {
        $this->cap_a = $cap_a;

        return $this;
    }

    public function getTutores(): ?string
    {
        return $this->tutores;
    }

    public function setTutores(string $tutores): self
    {
        $this->tutores = $tutores;

        return $this;
    }

    public function getGenero(): ?string
    {
        return $this->genero;
    }

    public function setGenero(string $genero): self
    {
        $this->genero = $genero;

        return $this;
    }
}
