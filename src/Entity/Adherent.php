<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AdherentRepository")
 */
class Adherent
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $prenom;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date_naissance;

    /**
     * @ORM\Column(type="string", length=15)
     */
    private $sexe;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $telephone;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresse;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=3)
     */
    private $certificat;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nume_secu;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $document;

    /**
     * @ORM\Column(type="text")
     */
    private $commentaire;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $photo;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date_creation;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $user = "bara";

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $situation;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Abonnement", mappedBy="adherent")
     */
    private $abonnements;

    /**
     * Adherent constructor.
     * @param $date_creation
     */
    public function __construct()
    {
        $this->date_creation = new \DateTime();
        $this->abonnements = new ArrayCollection();
    }

    public static function create(
        ?int $id,
        string $nom,
        string $prenom,
        \DateTime $date_naissance,
        string $sexe,
        string $tel,
        string $adresse,
        string $email,
        string $certficat,
        string $num_secu,
        string $document,
        string $commentaire,
        string $photo,
        string $situation
    )
    {
        $adherent =  new self();
        $adherent->id =$id;
        $adherent->nom = $nom;
        $adherent->prenom = $prenom;
        $adherent->date_naissance = $date_naissance;
        $adherent->sexe = $sexe;
        $adherent->telephone = $tel;
        $adherent->adresse = $adresse;
        $adherent->email = $email;
        $adherent->certificat = $certficat;
        $adherent->nume_secu = $num_secu;
        $adherent->document = $document;
        $adherent->commentaire = $commentaire;
        $adherent->photo = $photo;
        $adherent->situation = $situation;
        return $adherent;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getDateNaissance(): ?\DateTimeInterface
    {
        return $this->date_naissance;
    }

    public function setDateNaissance(\DateTimeInterface $date_naissance): self
    {
        $this->date_naissance = $date_naissance;

        return $this;
    }

    public function getSexe(): ?string
    {
        return $this->sexe;
    }

    public function setSexe(string $sexe): self
    {
        $this->sexe = $sexe;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(string $telephone): self
    {
        $this->telephone = $telephone;

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

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getCertificat(): ?string
    {
        return $this->certificat;
    }

    public function setCertificat(string $certificat): self
    {
        $this->certificat = $certificat;

        return $this;
    }

    public function getNumeSecu(): ?string
    {
        return $this->nume_secu;
    }

    public function setNumeSecu(string $nume_secu): self
    {
        $this->nume_secu = $nume_secu;

        return $this;
    }

    public function getDocument(): ?string
    {
        return $this->document;
    }

    public function setDocument(string $document): self
    {
        $this->document = $document;

        return $this;
    }

    public function getCommentaire(): ?string
    {
        return $this->commentaire;
    }

    public function setCommentaire(string $commentaire): self
    {
        $this->commentaire = $commentaire;

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

    /**
     * @return mixed
     */
    public function getDateCreation()
    {
        return $this->date_creation;
    }

    /**
     * @param mixed $date_creation
     */
    public function setDateCreation($date_creation): void
    {
        $this->date_creation = $date_creation;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $users
     */
    public function setUser($user): void
    {
        $this->user = $user;
    }

    /**
     * @return mixed
     */
    public function getAbonnements()
    {
        return $this->abonnements;
    }

    /**
     * @param mixed $abonnements
     */
    public function setAbonnements($abonnements): void
    {
        $this->abonnements = $abonnements;
    }

    /**
     * @return mixed
     */
    public function getSituation()
    {
        return $this->situation;
    }

    /**
     * @param mixed $situation
     */
    public function setSituation($situation): void
    {
        $this->situation = $situation;
    }
}
