<?php

namespace App\Entity;

use App\Repository\OppositionRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OppositionRepository::class)]
class Opposition
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $matchs = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $dates = null;

    #[ORM\Column(length: 255)]
    private ?string $resultats = null;

    #[ORM\Column(length: 255)]
    private ?string $scores = null;

    #[ORM\Column]
    private ?int $points = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMatchs(): ?string
    {
        return $this->matchs;
    }

    public function setMatchs(string $matchs): static
    {
        $this->matchs = $matchs;

        return $this;
    }

    public function getDates(): ?\DateTimeInterface
    {
        return $this->dates;
    }

    public function setDates(\DateTimeInterface $dates): static
    {
        $this->dates = $dates;

        return $this;
    }

    public function getResultats(): ?string
    {
        return $this->resultats;
    }

    public function setResultats(string $resultats): static
    {
        $this->resultats = $resultats;

        return $this;
    }

    public function getScores(): ?string
    {
        return $this->scores;
    }

    public function setScores(string $scores): static
    {
        $this->scores = $scores;

        return $this;
    }

    public function getPoints(): ?int
    {
        return $this->points;
    }

    public function setPoints(int $points): static
    {
        $this->points = $points;

        return $this;
    }
}
