<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CommandePizza
 *
 * @ORM\Table(name="commande_pizza")
 * @ORM\Entity(repositoryClass="App\Entity\CommandePizza")
 */
class CommandePizza
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
     * @ORM\Column(name="commande_id", type="integer", nullable=false)
     */
    private $commandeId;

    /**
     * @var int
     *
     * @ORM\Column(name="pizza_id", type="integer", nullable=false)
     */
    private $pizzaId;



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
     * Get the value of commandeId
     *
     * @return  int
     */ 
    public function getCommandeId()
    {
        return $this->commandeId;
    }

    /**
     * Set the value of commandeId
     *
     * @param  int  $commandeId
     *
     * @return  self
     */ 
    public function setCommandeId(int $commandeId)
    {
        $this->commandeId = $commandeId;

        return $this;
    }

    /**
     * Get the value of pizzaId
     *
     * @return  int
     */ 
    public function getPizzaId()
    {
        return $this->pizzaId;
    }

    /**
     * Set the value of pizzaId
     *
     * @param  int  $pizzaId
     *
     * @return  self
     */ 
    public function setPizzaId(int $pizzaId)
    {
        $this->pizzaId = $pizzaId;

        return $this;
    }
}
