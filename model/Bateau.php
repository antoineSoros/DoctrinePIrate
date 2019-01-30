<?php
/**
 * Created by PhpStorm.
 * User: antoine
 * Date: 29/01/19
 * Time: 09:31
 */

namespace model;

use Doctrine\ORM\Persisters\Entity;
use  Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\GeneratedValue;
use model\Pirate;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Class Bateau
 * @Entity
 */
class Bateau
{
    /**
     * @Id
     * @GeneratedValue
     * @Column(type="integer")
     */
    private $id;
    /**
     * @Column
     */
    private $nom;
    /**
     * @Column
     */
    private $image;

    /**
     * @ManyToMany(targetEntity="Pirate")
     * @JoinTable(name="bateau_pirate",
     *      joinColumns={@JoinColumn(name="bateau_id", referencedColumnName="id")},
     *      inverseJoinColumns={@JoinColumn(name="pirate_id", referencedColumnName="id")}
     *      )
     */
    private $pirates;

    /**
     * Bateau constructor.
     */
    public function __construct()
    {
        $this->pirates = new ArrayCollection();
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
     * @return Bateau
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
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
     * @return Bateau
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPirates()
    {
        return $this->pirates;
    }

    /**
     * @param mixed $pirates
     * @return Bateau
     */
    public function setPirates($pirates)
    {
        $this->pirates = $pirates;
        return $this;
    }

    public function addPirate($pirate){
        $this->pirates->add($pirate);
    }

    public function addPirates(...$pirates){
         foreach ($pirates as $value){

             $this->addPirate($value);
         }

}

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     * @return Bateau
     */
    public function setImage($image)
    {
        $this->image = $image;
        return $this;
    }

}