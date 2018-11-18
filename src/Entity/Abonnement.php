<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AbonnementRepository")
 */
class Abonnement
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date_certificat;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date_abonnement;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $duree_abonnement;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date_fin_abonnement;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $montant;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Adherent", inversedBy="abonnements")
     * @ORM\JoinColumn(nullable=false)
     */
    private $adherent;

    /**
     * Abonnement constructor.
     */
    public function __construct()
    {
        $this->date_abonnement = new \DateTime();
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateCertificat(): ?\DateTimeInterface
    {
        return $this->date_certificat;
    }

    public function setDateCertificat(\DateTimeInterface $date_certificat): self
    {
        $this->date_certificat = $date_certificat;

        return $this;
    }

    public function getDateAbonnement(): ?\DateTimeInterface
    {
        return $this->date_abonnement;
    }

    public function setDateAbonnement(\DateTimeInterface $date_abonnement): self
    {
        $this->date_abonnement = $date_abonnement;

        return $this;
    }

    public function getDureeAbonnement(): ?string
    {
        return $this->duree_abonnement;
    }

    public function setDureeAbonnement(string $duree_abonnement): self
    {
        $this->duree_abonnement = $duree_abonnement;

        return $this;
    }

    public function getDateFinAbonnement(): ?\DateTimeInterface
    {
        return $this->date_fin_abonnement;
    }

    public function setDateFinAbonnement(\DateTimeInterface $date_fin_abonnement): self
    {
        $this->date_fin_abonnement = $date_fin_abonnement;

        return $this;
    }

    public function getMontant(): ?string
    {
        return $this->montant;
    }

    public function setMontant(string $montant): self
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAdherent()
    {
        return $this->adherent;
    }

    /**
     * @param mixed $adherent
     */
    public function setAdherent($adherent): void
    {
        $this->adherent = $adherent;
    }

}
