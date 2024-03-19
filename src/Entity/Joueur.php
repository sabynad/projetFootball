<?php

namespace App\Entity;

use App\Repository\JoueurRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: JoueurRepository::class)]
class Joueur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: "id_joueur")]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    private ?string $prenom = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $dateNaissance = null;

    #[ORM\Column]
    private ?int $numero = null;

    #[ORM\Column(length: 255)]
    private ?string $poste = null;

    #[ORM\Column]
    private ?int $numeroLicence = null;

    #[ORM\Column]
    private ?int $cartonJaune = null;

    #[ORM\Column]
    private ?int $cartonRouge = null;

    #[ORM\Column]
    private ?int $matchJoue = null;

    #[ORM\Column(nullable: true)]
    private ?int $nbrPasse = null;

    #[ORM\Column(nullable: true)]
    private ?int $nbrPasseDecisif = null;

    #[ORM\Column(nullable: true)]
    private ?int $nbrTir = null;

    #[ORM\Column(nullable: true)]
    private ?int $nbrBut = null;

    #[ORM\Column(nullable: true)]
    private ?int $arretGardien = null;

    #[ORM\Column(nullable: true)]
    private ?int $butEncaisse = null;

    #[ORM\Column(nullable: true)]
    private ?int $penaltyDispute = null;

    #[ORM\Column(nullable: true)]
    private ?int $penaltyArrete = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false, name:'id_equipe', referencedColumnName:'id_equipe')]
    private ?Equipe $equipe = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): static
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getDateNaissance(): ?\DateTimeInterface
    {
        return $this->dateNaissance;
    }

    public function setDateNaissance(\DateTimeInterface $dateNaissance): static
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    public function getNumero(): ?int
    {
        return $this->numero;
    }

    public function setNumero(int $numero): static
    {
        $this->numero = $numero;

        return $this;
    }

    public function getPoste(): ?string
    {
        return $this->poste;
    }

    public function setPoste(string $poste): static
    {
        $this->poste = $poste;

        return $this;
    }

    public function getNumeroLicence(): ?int
    {
        return $this->numeroLicence;
    }

    public function setNumeroLicence(int $numeroLicence): static
    {
        $this->numeroLicence = $numeroLicence;

        return $this;
    }

    public function getCartonJaune(): ?int
    {
        return $this->cartonJaune;
    }

    public function setCartonJaune(int $cartonJaune): static
    {
        $this->cartonJaune = $cartonJaune;

        return $this;
    }

    public function getCartonRouge(): ?int
    {
        return $this->cartonRouge;
    }

    public function setCartonRouge(int $cartonRouge): static
    {
        $this->cartonRouge = $cartonRouge;

        return $this;
    }

    public function getMatchJoue(): ?int
    {
        return $this->matchJoue;
    }

    public function setMatchJoue(int $matchJoue): static
    {
        $this->matchJoue = $matchJoue;

        return $this;
    }

    public function getNbrPasse(): ?int
    {
        return $this->nbrPasse;
    }

    public function setNbrPasse(int $nbrPasse): static
    {
        $this->nbrPasse = $nbrPasse;

        return $this;
    }

    public function getNbrPasseDecisif(): ?int
    {
        return $this->nbrPasseDecisif;
    }

    public function setNbrPasseDecisif(int $nbrPasseDecisif): static
    {
        $this->nbrPasseDecisif = $nbrPasseDecisif;

        return $this;
    }

    public function getNbrTir(): ?int
    {
        return $this->nbrTir;
    }

    public function setNbrTir(int $nbrTir): static
    {
        $this->nbrTir = $nbrTir;

        return $this;
    }

    public function getNbrBut(): ?int
    {
        return $this->nbrBut;
    }

    public function setNbrBut(int $nbrBut): static
    {
        $this->nbrBut = $nbrBut;

        return $this;
    }

    public function getArretGardien(): ?int
    {
        return $this->arretGardien;
    }

    public function setArretGardien(int $arretGardien): static
    {
        $this->arretGardien = $arretGardien;

        return $this;
    }

    public function getButEncaisse(): ?int
    {
        return $this->butEncaisse;
    }

    public function setButEncaisse(int $butEncaisse): static
    {
        $this->butEncaisse = $butEncaisse;

        return $this;
    }

    public function getPenaltyDispute(): ?int
    {
        return $this->penaltyDispute;
    }

    public function setPenaltyDispute(int $penaltyDispute): static
    {
        $this->penaltyDispute = $penaltyDispute;

        return $this;
    }

    public function getPenaltyArrete(): ?int
    {
        return $this->penaltyArrete;
    }

    public function setPenaltyArrete(int $penaltyArrete): static
    {
        $this->penaltyArrete = $penaltyArrete;

        return $this;
    }

    public function getEquipe(): ?Equipe
    {
        return $this->equipe;
    }

    public function setEquipe(?Equipe $equipe): static
    {
        $this->equipe = $equipe;

        return $this;
    }
}
