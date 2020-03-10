<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\BlogRepository")
 */
class Blog
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Title;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Contenu;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Createur;

    /**
     * @ORM\Column(type="datetime")
     */
    private $DateCreation;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $SrcPhoto;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $Id): self
    {
        $this->Id = $Id;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->Title;
    }

    public function setTitle(string $Title): self
    {
        $this->Title = $Title;

        return $this;
    }

    public function getContenu(): ?string
    {
        return $this->Contenu;
    }

    public function setContenu(string $Contenu): self
    {
        $this->Contenu = $Contenu;

        return $this;
    }

    public function getCreateur(): ?string
    {
        return $this->Createur;
    }

    public function setCreateur(string $Createur): self
    {
        $this->Createur = $Createur;

        return $this;
    }

    public function getDateCreation(): ?\DateTimeInterface
    {
        return $this->DateCreation;
    }

    public function setDateCreation(\DateTimeInterface $DateCreation): self
    {
        $this->DateCreation = $DateCreation;

        return $this;
    }

    public function getSrcPhoto(): ?string
    {
        return $this->SrcPhoto;
    }

    public function setSrcPhoto(?string $SrcPhoto): self
    {
        $this->SrcPhoto = $SrcPhoto;

        return $this;
    }
}
