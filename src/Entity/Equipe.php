<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\EquipeRepository;

use Doctrine\Common\Collections\Collection;
use symfony\component\HttpFoundation\File\File;
use Doctrine\Common\Collections\ArrayCollection;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

#[ORM\Entity(repositoryClass: EquipeRepository::class)]

#[Vich\Uploadable]

class Equipe
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: "id_equipe")]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    private ?string $categorie = null;

    #[ORM\Column(length: 255)]
    private ?string $championnat = null;

    #[ORM\OneToMany(targetEntity: Opposition::class, mappedBy: 'equipe')]
    private Collection $oppositions;

    private ?int $nombreOppositions = null;
    private ?int $scoreChampionnat = null;

    #[ORM\Column(length: 100)]
    private ?string $fictif = null;

    // ce n'est pas un champ mappé de la métadonnée de l'entité mais juste une propriété simple.
    #[Vich\UploadableField(mapping: 'equipe_images', fileNameProperty: 'ImageName')]
    private ?File $imageFile = null;

    #[ORM\Column(type: 'string')]
    private ?string $imageName = null;

    #[ORM\Column]
    private ?int $total_point = null;
    //------------------------------------------------------------------------------------------
    
    public function __construct()
    {
        $this->oppositions = new ArrayCollection();
    }

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

    public function getCategorie(): ?string
    {
        return $this->categorie;
    }

    public function setCategorie(string $categorie): static
    {
        $this->categorie = $categorie;

        return $this;
    }

    public function getChampionnat(): ?string
    {
        return $this->championnat;
    }

    public function setChampionnat(string $championnat): static
    {
        $this->championnat = $championnat;

        return $this;
    }

    

    public function setImageFile(?File $imageFile = null): void
    {
        $this->imageFile = $imageFile;

        // if (null !== $imageFile) {
        //     $this->updatedAt = new \DataTimeImmutable();
        // }
    }

    public function getImageFile(): ?File
    {
        return $this->imageFile;
    }
    public function setImageName(?string $imageName): void
    {
        $this->imageName = $imageName;
    }
    public function getImageName(): ?string
    {
        return $this->imageName;
    }

    public function getTotalPoint(): ?int
    {
        return $this->total_point;
    }

    public function setTotalPoint(int $total_point): static
    {
        $this->total_point = $total_point;

        return $this;
    }

    /**
     * @return Collection<int, Opposition>
     */
    public function getOpposition(): Collection
    {
        return $this->oppositions;
    }

    public function getNombreOppositions(): ?int
    {
        $oppositions = $this->oppositions;

        $this->nombreOppositions = count($oppositions);
        return $this->nombreOppositions;
    }


}
