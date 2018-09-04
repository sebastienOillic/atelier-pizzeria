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

    /**
     * Get the corresponding row of the command
     * 
     * @return string corresponding row
     */
    public function generateTableRow($em)
    {
        $qbClient = $em->createQueryBuilder();
        $qbClient->SELECT('c')
            ->FROM('App\Entity\Client', 'c')
            ->WHERE('c.id = ?1')
            ->setParameter(1, $this->getClientId());
        $client = $qbClient->getQuery()->getResult();

        $qbLivrer = $em->createQueryBuilder();
        $qbLivrer->SELECT('c')
            ->FROM('App\Entity\Client', 'c')
            ->WHERE('c.id = ?1')
            ->setParameter(1, $this->getLivreurId());
        $livrer = $qbLivrer->getQuery()->getResult();
        $string = '<tr>
            <td>'.$this->getId().'</td>
            <td>'.$this->getNumeroCommande().'</td>
            <td>'.$this->getDateCommande()->format('Y-m-d').'</td>
            <td>'.$client[0]->getNom().' '.$client[0]->getPrenom().'</td>
            <td>'.$livrer[0]->getNom().' '.$livrer[0]->getPrenom().'</td>
            <td><a href="#">Modifier</a></td>
            <td><a href="#">Supprimer</a></td></tr>';
            return $string;
    }
}
