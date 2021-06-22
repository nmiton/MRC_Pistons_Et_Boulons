<?php

namespace App\Entity;

use App\Repository\CollaborateurRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Serializer\Serializable;

/**
 * @ORM\Entity(repositoryClass=CollaborateurRepository::class)
 */
class Collaborateur implements UserInterface
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Le nom ne peut pas être vide.")
     * @Assert\Length(
     *      min = 1,
     *      max = 50,
     *      minMessage = "Le nom doit comporter au moins {{ limit }} caractères ",
     *      maxMessage = "Le nom ne doit pas comporter plus de  {{ limit }} caractères"
     * )
     * @Assert\Regex(
     *     pattern="/\d/",
     *     match=false,
     *     message="Le nom ne peut pas contenir de chiffre"
     * )
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Le prénom ne peut pas être vide.")
     * @Assert\Length(
     *      min = 1,
     *      max = 50,
     *      minMessage = "Le prénom doit comporter au moins {{ limit }} caractères ",
     *      maxMessage = "Le prénom ne doit pas comporter plus de  {{ limit }} caractères"
     * )
     * @Assert\Regex(
     *     pattern="/\d/",
     *     match=false,
     *     message="Le prénom ne peut pas contenir de chiffre"
     * )
     */
    private $prenom;

    /**
     * @ORM\Column(type="date")
     * @Assert\NotBlank(message="La date de naissance ne peut pas être vide.")
     * @Assert\Range(
     *      min = "-1000 years",
     *      max = "now",
     *      maxMessage="La date d'entrée en entreprise ne peut pas être supérieure à la date du jour.",
     *      minMessage="La date de première saisie est trop ancienne."
     * )
     */
    private $dateNaissance;

    /**
     * @ORM\Column(type="date")
     * @Assert\NotBlank(message="La date d'entrée en entreprise ne peut pas être vide.")
        * @Assert\Range(
     *      min = "-50 years",
     *      max = "now",
     *      maxMessage="La date d'entrée en entreprise ne peut pas être supérieure à la date du jour.",
     *      minMessage="La date de première saisie est trop ancienne."
     * )
     */
    private $dateEntreeEntreprise;

    /**
    * @ORM\Column(type="string", length=255)
    * @Assert\NotBlank(message="Le numéro de sécurité sociale ne peut pas être vide.")
    * @Assert\Length(
     *      min = 15,
     *      max = 15,
     *      exactMessage = "Le numéro de sécurité sociale est incorrecte, il ne comprend pas 15 caractères.",
     *  )
    */
    private $numSecuriteSocial;
    // regex:  '/^                # début de chaîne
    // [12]                      # 1 ou 2 pour le sexe
    // [0-9]{2}[0-1][0-9]        # ça je me rappelle plus
    // (2[AB]|[0-9]{2})          # le département
    // [0-9]{3}[0-9]{3}[0-9]{2}  # ça non plus je ne sais plus
    // $/                        # fin de chaîne
    

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Le type de contrat ne peut pas être vide.")
     */
    private $typeContrat;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $dateHeureDerniereConnexion;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="La durée de travail hebdomadaire ne peut pas être vide.")
     */
    private $dureeTravailHebdo;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="L'identifiant ne peut pas être vide.")
     */
    private $login;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Le mot de passe ne peut pas être vide.")
     */
    private $motDePasse;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $isAdmin;

     /**
     * @ORM\Column(type="boolean", nullable=true)
     * 
     */
    private $isActif;

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
        return $this->dateNaissance;
    }

    public function setDateNaissance(\DateTimeInterface $dateNaissance): self
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    public function getDateEntreeEntreprise(): ?\DateTimeInterface
    {
        return $this->dateEntreeEntreprise;
    }

    public function setDateEntreeEntreprise(\DateTimeInterface $dateEntreeEntreprise): self
    {
        $this->dateEntreeEntreprise = $dateEntreeEntreprise;

        return $this;
    }

    public function getNumSecuriteSocial(): ?string
    {
        return $this->numSecuriteSocial;
    }

    public function setNumSecuriteSocial(string $numSecuriteSocial): self
    {
        $this->numSecuriteSocial = $numSecuriteSocial;

        return $this;
    }

    public function getTypeContrat(): ?string
    {
        return $this->typeContrat;
    }

    public function setTypeContrat(string $typeContrat): self
    {
        $this->typeContrat = $typeContrat;

        return $this;
    }

    public function getDateHeureDerniereConnexion(): ?\DateTimeInterface
    {
        return $this->dateHeureDerniereConnexion;
    }

    public function setDateHeureDerniereConnexion(?\DateTimeInterface $dateHeureDerniereConnexion): self
    {
        $this->dateHeureDerniereConnexion = $dateHeureDerniereConnexion;

        return $this;
    }

    public function getDureeTravailHebdo(): ?string
    {
        return $this->dureeTravailHebdo;
    }

    public function setDureeTravailHebdo(string $dureeTravailHebdo): self
    {
        $this->dureeTravailHebdo = $dureeTravailHebdo;

        return $this;
    }

    public function getLogin(): ?string
    {
        return $this->login;
    }

    public function setLogin(string $login): self
    {
        $this->login = $login;

        return $this;
    }

    public function getMotDePasse(): ?string
    {
        return $this->motDePasse;
    }

    public function setMotDePasse(string $motDePasse): self
    {
        $this->motDePasse = $motDePasse;

        return $this;
    }

    public function getIsAdmin(): ?bool
    {
        return $this->isAdmin;
    }

    public function setIsAdmin(bool $isAdmin): self
    {
        $this->isAdmin = $isAdmin;

        return $this;
    }

     /**
     * Fonction qui permet de récupérer si le collabo est actif ou pas
     * 
     * @return isActif
     */
    public function getIsActif(): ?bool
    {
        return $this->isActif;
    }

    /**
     * Fonction qui permet de changer la valeur de l'activité du collabo
     * 
     * @param bool $isActif
     * 
     * @return isActif
     */
    public function setIsActif(?bool $isActif): self
    {
        $this->isActif = $isActif;

        return $this;
    }

    public function getCollaborateur(){
        return $this->nom .' '. $this->prenom;
    }

  

    public function getRoles()
    {

        $isAdmin = $this->getIsAdmin();
        if($isAdmin){
            return true;
        }else{
            return false;
        }
    }

    public function getPassword()
    {
        return $this->motDePasse;
    }

    public function getSalt()
    {
        
    }

    public function getUsername()
    {
        return $this->login;
    }

    public function eraseCredentials()
    {
    }

    public function isEqualTo(UserInterface $user)
    {
    
        if ($this->password !== $user->getPassword()) {
            return false;
        }

        if ($this->salt !== $user->getSalt()) {
            return false;
        }

        if ($this->username !== $user->getUsername()) {
            return false;
        }

        return true;
    }
}
