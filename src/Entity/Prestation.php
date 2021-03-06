<?php

namespace App\Entity;

use App\Repository\PrestationRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=PrestationRepository::class)
 */
class Prestation
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
     *      min = 3,
     *      max = 50,
     *      minMessage = "Le nom de la prestation doit comporter au moins {{ limit }} caractères ",
     *      maxMessage = "Le nom de la prestation ne doit pas comporter plus de  {{ limit }} caractères"
     * )
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Le temps de réalisation ne peut pas être vide.")
     */
    private $tempsRealisation;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank(message="Le coût HT ne peut pas être vide.")
     * @Assert\Range(
     *      min = 0,
     *      minMessage = "Le coût HT ne peux pas être égale à zéro."
     * )
     */
    private $coutHT;

    /**
     * @ORM\Column(type="text")
     * @Assert\NotBlank(message="La description ne peut pas être vide.")
     * @Assert\Length(
     *      min = 3,
     *      minMessage = "La description doit comporter au moins {{ limit }} caractères ",
     * )
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Le type de prestation ne peut pas être vide.")
     */
    private $typePrestation;

    /**
     * @ORM\Column(type="boolean",nullable=true)
     */
    private $isActive;



    /**
     * Fonction qui permet de récupérer l'id de la prestation
     * 
     * @return id
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Fonction qui permet de récupérer le nom de la prestation
     * 
     * @return nom
     */
    public function getNom(): ?string
    {
        return $this->nom;
    }

    /**
     * Fonction qui permet de changer la valeur du nom de la prestation
     * 
     * @param string $nom 
     * 
     * @return string $nom
     */
    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Fonction qui permet de récupérer le temps de réalisation de la prestation
     * 
     * @return string tempsRealisation
     */
    public function getTempsRealisation(): ?string
    {
        return $this->tempsRealisation;
    }

    /**
     * Fonction qui permet de changer la valeur du tps de réalisation de la prestation
     * 
     * @param string $tempsRealisation 
     * 
     * @return string tempsRealisation
     */
    public function setTempsRealisation(string $tempsRealisation): self
    {
        $this->tempsRealisation = $tempsRealisation;

        return $this;
    }

    /**
     * Fonction qui permet de récupérer le cout HT de la prestation
     * 
     * @return string coutHT
     */
    public function getCoutHT(): ?string
    {
        return $this->coutHT;
    }

    /**
     * Fonction qui permet de changer la valeur du cout HT de la prestation
     * 
     * @param string $coutHT 
     * 
     * @return string coutHT
     */
    public function setCoutHT(string $coutHT): self
    {
        $this->coutHT = $coutHT;

        return $this;
    }

    /**
     * Fonction qui permet de récupérer la description de la prestation
     * 
     * @return string description
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Fonction qui permet de changer la valeur de la description de la prestation
     * 
     * @param string $description 
     * 
     * @return string description
     */
    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Fonction qui permet de récupérer le type de prestation de la prestation
     * 
     * @return string typePrestation
     */
    public function getTypePrestation(): ?string
    {
        return $this->typePrestation;
    }

    /**
     * Fonction qui permet de changer la valeur du type de prestation de la prestation
     * 
     * @param string $typePrestation 
     * 
     * @return string typePrestation
     */
    public function setTypePrestation(string $typePrestation): self
    {
        $this->typePrestation = $typePrestation;

        return $this;
    }

    /**
     * Fonction qui permet de récupérer le boolean estActif de la prestation
     * 
     * @return boolean isActive
     */
    public function getIsActive(): ?bool
    {
        return $this->isActive;
    }

    /**
     * Fonction qui permet de changer la valeur du boolean estActif de la prestation
     * 
     * @param Boolean $isActive 
     * 
     * @return Boolean isActive
     */
    public function setIsActive(bool $isActive): self
    {
        $this->isActive = $isActive;

        return $this;
    }
    /**
     * Fonction GETTER permettant de retourner des information sur la prestation  
     * @return String
     */
    public function getPrestation()
    {
        return $this->nom;
    }
}
