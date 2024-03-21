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
    #[ORM\Column(name: "id_opposition")]
    private ?int $id = null;


    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $dates = null;


    #[ORM\Column(length: 255)]
    private ?string $scoreEquipe = null;

    #[ORM\Column(length: 255)]
    private ?string $scoreEquipe1 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $scoreClassement = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $scoreClassement1 = null;



    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false, name:'id_equipe', referencedColumnName:'id_equipe')]
    private ?Equipe $id_equipe = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false, name:'id_equipe_1', referencedColumnName:'id_equipe')]
    private ?Equipe $id_equipe_1 = null;

    public function getId(): ?int
    {
        return $this->id;
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


    public function getScoreEquipe(): ?string
    {
        return $this->scoreEquipe;
    }

    public function setScoreEquipe(string $scoreEquipe): static
    {
        $this->scoreEquipe = $scoreEquipe;

        return $this;
    }
    public function getScoreEquipe1(): ?string
    {
        return $this->scoreEquipe1;
    }

    public function setScoreEquipe1(string $scoreEquipe1): static
    {
        $this->scoreEquipe1 = $scoreEquipe1;

        return $this;
    }
    public function getScoreClassement(): ?string
    {
        return $this->scoreClassement;
    }

    public function setScoreClassement(string $scoreClassement): static
    {
        $this->scoreClassement = $scoreClassement;

        return $this;
    }
    public function getScoreClassement1(): ?string
    {
        return $this->scoreClassement1;
    }

    public function setScoreClassement1(string $scoreClassement1): static
    {
        $this->scoreClassement1 = $scoreClassement1;

        return $this;
    }



    public function getIdEquipe(): ?Equipe
    {
        return $this->id_equipe;
    }

    public function setIdEquipe(?Equipe $id_equipe): static
    {
        $this->id_equipe = $id_equipe;

        return $this;
    }

    public function getIdEquipe1(): ?Equipe
    {
        return $this->id_equipe_1;
    }

    public function setIdEquipe1(?Equipe $id_equipe_1): static
    {
        $this->id_equipe_1 = $id_equipe_1;

        return $this;
    }
}
