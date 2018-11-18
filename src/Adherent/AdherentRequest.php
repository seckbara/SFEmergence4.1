<?php

namespace App\Adherent;

class AdherentRequest
{
    private $id;
    private $nom;
    private $prenom;
    private $date_naissance;
    private $sexe;
    private $telephone;
    private $adresse;
    private $email;
    private $certificat;
    private $nume_secu;
    private $document;
    private $commentaire;
    private $photo;
    private $date_creation;
    private $user;
    private $situation;
    private $abonnements;

    /**
     * AdherentRequest constructor.
     */
    public function __construct()
    {
        $this->date_creation = new \DateTime();
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
     * @return \DateTime
     */
    public function getDateCreation(): \DateTime
    {
        return $this->date_creation;
    }

    /**
     * @param \DateTime $date_creation
     */
    public function setDateCreation(\DateTime $date_creation): void
    {
        $this->date_creation = $date_creation;
    }

    /**
     * @return string
     */
    public function getUser(): string
    {
        return $this->user;
    }

    /**
     * @param string $user
     */
    public function setUser(string $user): void
    {
        $this->user = $user;
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

}