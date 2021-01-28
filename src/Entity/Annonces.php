<?php

namespace App\Entity;

use App\Repository\AnnoncesRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @Vich\Uploadable
 * @ORM\Entity(repositoryClass=AnnoncesRepository::class)
 */
class Annonces
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $titre;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $adresse;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    private $cp;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $ville;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    /**
     * @ORM\Column(type="decimal", precision=5, scale=2, nullable=true)
     */
    private $surface;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $nbrDePieces;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $nbrDeChambres;

    /**
     * @ORM\Column(type="decimal", precision=5, scale=2, nullable=true)
     */
    private $prix;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $photo;

    

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $telephonePr;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nomPr;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $mailPr;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nbrSdb;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $nbrGarage;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(?string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(?string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getCp(): ?string
    {
        return $this->cp;
    }

    public function setCp(?string $cp): self
    {
        $this->cp = $cp;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(?string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getSurface(): ?string
    {
        return $this->surface;
    }

    public function setSurface(?string $surface): self
    {
        $this->surface = $surface;

        return $this;
    }

    public function getNbrDePieces(): ?int
    {
        return $this->nbrDePieces;
    }

    public function setNbrDePieces(?int $nbrDePieces): self
    {
        $this->nbrDePieces = $nbrDePieces;

        return $this;
    }

    public function getNbrDeChambres(): ?int
    {
        return $this->nbrDeChambres;
    }

    public function setNbrDeChambres(?int $nbrDeChambres): self
    {
        $this->nbrDeChambres = $nbrDeChambres;

        return $this;
    }

    public function getPrix(): ?string
    {
        return $this->prix;
    }

    public function setPrix(?string $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(?string $photo): self
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * @return File/null
     */
    public function getImageFile(): ?File
    {
        return $this->ImageFile;
    }


    /**
     * @param File/null $ImageFile
     */
    public function setImageFile(File $ImageFile = null)
    {
        $this->ImageFile = $ImageFile;

        if (null !== $ImageFile) {

            $this->updated = new \Datetime();

        }

    }

    public function getTelephonePr(): ?string
    {
        return $this->telephonePr;
    }

    public function setTelephonePr(?string $telephonePr): self
    {
        $this->telephonePr = $telephonePr;

        return $this;
    }

    public function getNomPr(): ?string
    {
        return $this->nomPr;
    }

    public function setNomPr(?string $nomPr): self
    {
        $this->nomPr = $nomPr;

        return $this;
    }

    public function getMailPr(): ?string
    {
        return $this->mailPr;
    }

    public function setMailPr(?string $mailPr): self
    {
        $this->mailPr = $mailPr;

        return $this;
    }

    public function getNbrSdb(): ?string
    {
        return $this->nbrSdb;
    }

    public function setNbrSdb(?string $nbrSdb): self
    {
        $this->nbrSdb = $nbrSdb;

        return $this;
    }

    public function getNbrGarage(): ?int
    {
        return $this->nbrGarage;
    }

    public function setNbrGarage(?int $nbrGarage): self
    {
        $this->nbrGarage = $nbrGarage;

        return $this;
    }
}
