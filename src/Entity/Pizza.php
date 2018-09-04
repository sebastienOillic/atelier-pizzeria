<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pizza
 *
 * @ORM\Table(name="pizza")
 * @ORM\Entity(repositoryClass="App\Entity\Pizza")
 */
class Pizza
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=255, nullable=false)
     */
    private $libelle;

    /**
     * @var string
     *
     * @ORM\Column(name="reference", type="string", length=10, nullable=false)
     */
    private $reference;

    /**
     * @var int
     *
     * @ORM\Column(name="prix", type="integer", nullable=false)
     */
    private $prix;

    /**
     * @var string
     *
     * @ORM\Column(name="url_image", type="string", length=255, nullable=false)
     */
    private $urlImage;



    /**
     * Get the value of id
     *
     * @return  int
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @param  int  $id
     *
     * @return  self
     */ 
    public function setId(int $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of libelle
     *
     * @return  string
     */ 
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set the value of libelle
     *
     * @param  string  $libelle
     *
     * @return  self
     */ 
    public function setLibelle(string $libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get the value of reference
     *
     * @return  string
     */ 
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set the value of reference
     *
     * @param  string  $reference
     *
     * @return  self
     */ 
    public function setReference(string $reference)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Get the value of prix
     *
     * @return  int
     */ 
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set the value of prix
     *
     * @param  int  $prix
     *
     * @return  self
     */ 
    public function setPrix(int $prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get the value of urlImage
     *
     * @return  string
     */ 
    public function getUrlImage()
    {
        return $this->urlImage;
    }

    /**
     * Set the value of urlImage
     *
     * @param  string  $urlImage
     *
     * @return  self
     */ 
    public function setUrlImage(string $urlImage)
    {
        $this->urlImage = $urlImage;

        return $this;
    }
}
