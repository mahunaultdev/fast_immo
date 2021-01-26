<?php

namespace App\Entity;

use App\Repository\AnnoncesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
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
     * @ORM\Column(type="string", length=255)
     */
    private $titre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresse;

    /**
     * @ORM\Column(type="string", length=5)
     */
    private $cp;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $ville;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    /**
     * @ORM\Column(type="float")
     */
    private $surface;

    /**
     * @ORM\Column(type="integer")
     */
    private $nbr_de_pieces;

    /**
     * @ORM\Column(type="integer")
     */
    private $nbr_de_chambres;

    /**
     * @ORM\Column(type="float")
     */
    private $prix;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $photo;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $telephone_pr;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom_pr;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $mail_pr;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $nbr_sdb;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $nbr_garage;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getCp(): ?string
    {
        return $this->cp;
    }

    public function setCp(string $cp): self
    {
        $this->cp = $cp;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): self
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

    public function getSurface(): ?float
    {
        return $this->surface;
    }

    public function setSurface(float $surface): self
    {
        $this->surface = $surface;

        return $this;
    }

    public function getNbrDePieces(): ?int
    {
        return $this->nbr_de_pieces;
    }

    public function setNbrDePieces(int $nbr_de_pieces): self
    {
        $this->nbr_de_pieces = $nbr_de_pieces;

        return $this;
    }

    public function getNbrDeChambres(): ?int
    {
        return $this->nbr_de_chambres;
    }

    public function setNbrDeChambres(int $nbr_de_chambres): self
    {
        $this->nbr_de_chambres = $nbr_de_chambres;

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(string $photo): self
    {
        $this->photo = $photo;

        return $this;
    }

    public function getTelephonePr(): ?string
    {
        return $this->telephone_pr;
    }

    public function setTelephonePr(string $telephone_pr): self
    {
        $this->telephone_pr = $telephone_pr;

        return $this;
    }

    public function getNomPr(): ?string
    {
        return $this->nom_pr;
    }

    public function setNomPr(string $nom_pr): self
    {
        $this->nom_pr = $nom_pr;

        return $this;
    }

    public function getMailPr(): ?string
    {
        return $this->mail_pr;
    }

    public function setMailPr(?string $mail_pr): self
    {
        $this->mail_pr = $mail_pr;

        return $this;
    }

    public function getNbrSdb(): ?string
    {
        return $this->nbr_sdb;
    }

    public function setNbrSdb(?string $nbr_sdb): self
    {
        $this->nbr_sdb = $nbr_sdb;

        return $this;
    }

    public function getNbrGarage(): ?string
    {
        return $this->nbr_garage;
    }

    public function setNbrGarage(?string $nbr_garage): self
    {
        $this->nbr_garage = $nbr_garage;

        return $this;
    }
}
