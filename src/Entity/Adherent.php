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
     * @ORM\Column(type="string", length=50)
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
        ?int $id = null,
        string $nom,
        string $prenom,
        string $date_naissance,
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

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom): void
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom): void
    {
        $this->prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getDateNaissance()
    {
        return $this->date_naissance;
    }

    /**
     * @param mixed $date_naissance
     */
    public function setDateNaissance($date_naissance): void
    {
        $this->date_naissance = $date_naissance;
    }

    /**
     * @return mixed
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * @param mixed $sexe
     */
    public function setSexe($sexe): void
    {
        $this->sexe = $sexe;
    }

    /**
     * @return mixed
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * @param mixed $telephone
     */
    public function setTelephone($telephone): void
    {
        $this->telephone = $telephone;
    }

    /**
     * @return mixed
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * @param mixed $adresse
     */
    public function setAdresse($adresse): void
    {
        $this->adresse = $adresse;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getCertificat()
    {
        return $this->certificat;
    }

    /**
     * @param mixed $certificat
     */
    public function setCertificat($certificat): void
    {
        $this->certificat = $certificat;
    }

    /**
     * @return mixed
     */
    public function getNumeSecu()
    {
        return $this->nume_secu;
    }

    /**
     * @param mixed $nume_secu
     */
    public function setNumeSecu($nume_secu): void
    {
        $this->nume_secu = $nume_secu;
    }

    /**
     * @return mixed
     */
    public function getDocument()
    {
        return $this->document;
    }

    /**
     * @param mixed $document
     */
    public function setDocument($document): void
    {
        $this->document = $document;
    }

    /**
     * @return mixed
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * @param mixed $commentaire
     */
    public function setCommentaire($commentaire): void
    {
        $this->commentaire = $commentaire;
    }

    /**
     * @return mixed
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * @param mixed $photo
     */
    public function setPhoto($photo): void
    {
        $this->photo = $photo;
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
     * @param mixed $user
     */
    public function setUser($user): void
    {
        $this->user = $user;
    }


}
