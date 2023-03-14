<?php

namespace App\Entity;

use App\Repository\AvisRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AvisRepository::class)]
class Avis
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(nullable: true)]
    private ?int $Note = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $Commentaire = null;

    #[ORM\Column]
    private ?bool $Is_Valid = null;

    #[ORM\ManyToOne(inversedBy: 'avis')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Jeux $Jeux = null;

    #[ORM\ManyToOne(inversedBy: 'avis')]
    private ?Utilisateurs $Utilisateurs = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNote(): ?int
    {
        return $this->Note;
    }

    public function setNote(?int $Note): self
    {
        $this->Note = $Note;

        return $this;
    }

    public function getCommentaire(): ?string
    {
        return $this->Commentaire;
    }

    public function setCommentaire(string $Commentaire): self
    {
        $this->Commentaire = $Commentaire;

        return $this;
    }

    public function isIsValid(): ?bool
    {
        return $this->Is_Valid;
    }

    public function setIsValid(bool $Is_Valid): self
    {
        $this->Is_Valid = $Is_Valid;

        return $this;
    }

    public function getJeux(): ?Jeux
    {
        return $this->Jeux;
    }

    public function setJeux(?Jeux $Jeux): self
    {
        $this->Jeux = $Jeux;

        return $this;
    }

    public function getUtilisateurs(): ?Utilisateurs
    {
        return $this->Utilisateurs;
    }

    public function setUtilisateurs(?Utilisateurs $Utilisateurs): self
    {
        $this->Utilisateurs = $Utilisateurs;

        return $this;
    }
}
