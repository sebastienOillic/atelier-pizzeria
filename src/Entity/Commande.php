<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commande
 *
 * @ORM\Table(name="commande")
 * @ORM\Entity(repositoryClass="App\Entity\Commande")
 */
class Commande
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
     * @var int
     *
     * @ORM\Column(name="numero_commande", type="integer", nullable=false)
     */
    private $numeroCommande;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_commande", type="date", nullable=false)
     */
    private $dateCommande;

    /**
     * @var int
     *
     * @ORM\Column(name="livreur_id", type="integer", nullable=false)
     */
    private $livreurId;

    /**
     * @var int
     *
     * @ORM\Column(name="client_id", type="integer", nullable=false)
     */
    private $clientId;



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
     * Get the value of numeroCommande
     *
     * @return  int
     */ 
    public function getNumeroCommande()
    {
        return $this->numeroCommande;
    }

    /**
     * Set the value of numeroCommande
     *
     * @param  int  $numeroCommande
     *
     * @return  self
     */ 
    public function setNumeroCommande(int $numeroCommande)
    {
        $this->numeroCommande = $numeroCommande;

        return $this;
    }

    /**
     * Get the value of dateCommande
     *
     * @return  \DateTime
     */ 
    public function getDateCommande()
    {
        return $this->dateCommande;
    }

    /**
     * Set the value of dateCommande
     *
     * @param  \DateTime  $dateCommande
     *
     * @return  self
     */ 
    public function setDateCommande(\DateTime $dateCommande)
    {
        $this->dateCommande = $dateCommande;

        return $this;
    }

    /**
     * Get the value of livreurId
     *
     * @return  int
     */ 
    public function getLivreurId()
    {
        return $this->livreurId;
    }

    /**
     * Set the value of livreurId
     *
     * @param  int  $livreurId
     *
     * @return  self
     */ 
    public function setLivreurId(int $livreurId)
    {
        $this->livreurId = $livreurId;

        return $this;
    }

    /**
     * Get the value of clientId
     *
     * @return  int
     */ 
    public function getClientId()
    {
        return $this->clientId;
    }

    /**
     * Set the value of clientId
     *
     * @param  int  $clientId
     *
     * @return  self
     */ 
    public function setClientId(int $clientId)
    {
        $this->clientId = $clientId;

        return $this;
    }
}
