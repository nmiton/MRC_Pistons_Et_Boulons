<?php

namespace App\Entity;

use App\Repository\CollaborateurRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CollaborateurRepository::class)
 */
class Collaborateur
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
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenom;

    /**
     * @ORM\Column(type="date")
     */
    private $dateNaissance;

    /**
     * @ORM\Column(type="date")
     */
    private $dateEntreeEntreprise;

    /**
     * @ORM\Column(type="bigint")
     */
    private $numSecuriteSocial;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $typeContrat;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $dateHeureDerniereConnexion;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $dureeTravailHebdo;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $login;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $motDePasse;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isAdmin;

    /**
     * Fonction qui permet de récupérer l'identifiant du collaborateur
     * 
     * @return id
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Fonction qui permet de récupérer le nom du collaborateur
     * 
     * @return nom
     */
    public function getNom(): ?string
    {
        return $this->nom;
    }

    /**
     * Fonction qui permet de changer la valeur du nom du collaborateur
     * 
     * @param string $nom 
     * 
     * @return nom
     */
    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Fonction qui permet de récupérer le prénom du collaborateur
     * 
     * @return prenom
     */
    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    /**
     * Fonction qui permet de changer la valeur du prénom du collaborateur
     * 
     * @param string $prenom 
     * 
     * @return prenom
     */
    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Fonction qui permet de récupérer la date de naissance du collaborateur
     * 
     * @return dateNaissance
     */
    public function getDateNaissance(): ?\DateTimeInterface
    {
        return $this->dateNaissance;
    }

    /**
     * Fonction qui permet de changer la valeur de la date de naissance du collaborateur
     * 
     * @param \DateTimeInterface $dateNaissance
     * 
     * @return dateNaissance
     */
    public function setDateNaissance(\DateTimeInterface $dateNaissance): self
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    /**
     * Fonction qui permet de récupérer la date d'entrée en entreprise du collaborateur
     * 
     * @return dateEntreeEntreprise
     */
    public function getDateEntreeEntreprise(): ?\DateTimeInterface
    {
        return $this->dateEntreeEntreprise;
    }

    /**
     * Fonction qui permet de changer la valeur de la date d'entrée en entreprise du collaborateur
     * 
     * @param \DateTimeInterface $dateEntreeEntreprise
     * 
     * @return dateEntreeEntreprise
     */
    public function setDateEntreeEntreprise(\DateTimeInterface $dateEntreeEntreprise): self
    {
        $this->dateEntreeEntreprise = $dateEntreeEntreprise;

        return $this;
    }

    /**
     * Fonction qui permet de récupérer le numéro de Sécurité Sociale du collaborateur
     * 
     * @return numSecuriteSocial
     */
    public function getNumSecuriteSocial(): ?string
    {
        return $this->numSecuriteSocial;
    }

    /**
     * Fonction qui permet de changer la valeur du numéro de Sécurité Sociale du collaborateur
     * 
     * @param $numSecuriteSocial
     * 
     * @return numSecuriteSocial
     */
    public function setNumSecuriteSocial(string $numSecuriteSocial): self
    {
        $this->numSecuriteSocial = $numSecuriteSocial;

        return $this;
    }

    /**
     * Fonction qui permet de récupérer le type de contrat de travail du collaborateur
     * 
     * @return typeContrat
     */
    public function getTypeContrat(): ?string
    {
        return $this->typeContrat;
    }

    /**
     * Fonction qui permet de changer la valeur du type de contrat de travail du collaborateur
     * 
     * @param $typeContrat
     * 
     * @return typeContrat
     */
    public function setTypeContrat(string $typeContrat): self
    {
        $this->typeContrat = $typeContrat;

        return $this;
    }

    /**
     * Fonction qui permet de récupérer la date et l'heure de dernière connexion sur le site du collaborateur
     * 
     * @return dateHeureDerniereConnexion
     */
    public function getDateHeureDerniereConnexion(): ?\DateTimeInterface
    {
        return $this->dateHeureDerniereConnexion;
    }

    /**
     * Fonction qui permet de changer la valeur du numéro de Sécurité Sociale du collaborateur
     * 
     * @param \DateTimeInterface $dateHeureDerniereConnexion
     * 
     * @return dateHeureDerniereConnexion
     */
    public function setDateHeureDerniereConnexion(?\DateTimeInterface $dateHeureDerniereConnexion): self
    {
        $this->dateHeureDerniereConnexion = $dateHeureDerniereConnexion;

        return $this;
    }

    /**
     * Fonction qui permet de récupérer la durée de travail hebdomadaire du collaborateur
     * 
     * @return dureeTravailHebdo
     */
    public function getDureeTravailHebdo(): ?string
    {
        return $this->dureeTravailHebdo;
    }

    /**
     * Fonction qui permet de changer la valeur de la durée de travail hebdomadaire du collaborateur
     * 
     * @param $dureeTravailHebdo
     * 
     * @return dureeTravailHebdo
     */
    public function setDureeTravailHebdo(string $dureeTravailHebdo): self
    {
        $this->dureeTravailHebdo = $dureeTravailHebdo;

        return $this;
    }

    /**
     * Fonction qui permet de récupérer le login du collaborateur
     * 
     * @return login
     */
    public function getLogin(): ?string
    {
        return $this->login;
    }

    /**
     * Fonction qui permet de changer la valeur du login du collaborateur
     * 
     * @param $login
     * 
     * @return login
     */
    public function setLogin(string $login): self
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Fonction qui permet de récupérer le mot de passe du collaborateur
     * 
     * @return motDePasse
     */
    public function getMotDePasse(): ?string
    {
        return $this->motDePasse;
    }

    /**
     * Fonction qui permet de changer la valeur du mot de passe du collaborateur
     * 
     * @param $motDePasse
     * 
     * @return motDePasse
     */
    public function setMotDePasse(string $motDePasse): self
    {
        $this->motDePasse = $motDePasse;

        return $this;
    }

    /**
     * Fonction qui permet de récupérer un booléen pour indiquer si le collaborateur est l'administrateur du site ou non
     * 
     * @return isAdmin
     */
    public function getIsAdmin(): ?bool
    {
        return $this->isAdmin;
    }

    /**
     * Fonction qui permet de changer la valeur du statut du collaborateur: admin ou pas
     * 
     * @param bool $isAdmin
     * 
     * @return isAdmin
     */
    public function setIsAdmin(bool $isAdmin): self
    {
        $this->isAdmin = $isAdmin;

        return $this;
    }
}
