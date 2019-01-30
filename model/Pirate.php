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


/**
 * Class Pirate
 * @Entity
 */
class Pirate
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
private $blase;
    /**
     * @Column
     */
private $picture;
    /**
     * @return mixed
     */
    public function getButin()
    {
        return $this->butin;
    }

    /**
     * @param mixed $butin
     * @return Pirate
     */
    public function setButin($butin)
    {
        $this->butin = $butin;
        return $this;
    }

    /**
     * @Column(type="integer")
     */
    private $butin;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return Pirate
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBlase()
    {
        return $this->blase;
    }

    /**
     * @param mixed $blase
     * @return Pirate
     */
    public function setBlase($blase)
    {
        $this->blase = $blase;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * @param mixed $picture
     * @return Pirate
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;
        return $this;
    }

}