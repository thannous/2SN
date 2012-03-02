<?php

namespace Mysn\Bundle\InterfaceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Mysn\Bundle\InterfaceBundle\Entity\ARTICLES
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Mysn\Bundle\InterfaceBundle\Entity\ARTICLESRepository")
 */
class ARTICLES
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer $ID_USER
     *
     * @ORM\Column(name="ID_USER", type="integer")
     * @ORM\ManyToOne(targetEntity="Mysn\Bundle\InterfaceBundle\Entity\USERS")
     */
    private $ID_USER;

    /**
     * @var integer $ID_GROUP
     *
     * @ORM\Column(name="ID_GROUP", type="integer")
     */
    private $ID_GROUP;

    /**
     * @var datetime $DATEPUB
     *
     * @ORM\Column(name="DATEPUB", type="datetime")
     * @Assert\Date
     */
    private $DATEPUB;

    /**
     * @var text $CONTENT
     *
     * @ORM\Column(name="CONTENT", type="text")
     */
    private $CONTENT;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set ID_USER
     *
     * @param integer $iDUSER
     */
    public function setIDUSER($iDUSER)
    {
        $this->ID_USER = $iDUSER;
    }

    /**
     * Get ID_USER
     *
     * @return integer
     */
    public function getIDUSER()
    {
        return $this->ID_USER;
    }

    /**
     * Set ID_GROUP
     *
     * @param integer $iDGROUP
     */
    public function setIDGROUP($iDGROUP)
    {
        $this->ID_GROUP = $iDGROUP;
    }

    /**
     * Get ID_GROUP
     *
     * @return integer
     */
    public function getIDGROUP()
    {
        return $this->ID_GROUP;
    }

    /**
     * Set DATEPUB
     *
     * @param datetime $dATEPUB
     */
    public function setDATEPUB($dATEPUB)
    {
        $this->DATEPUB = $dATEPUB;
    }

    /**
     * Get DATEPUB
     *
     * @return datetime
     */
    public function getDATEPUB()
    {
        return $this->DATEPUB;
    }

    /**
     * Set CONTENT
     *
     * @param text $cONTENT
     */
    public function setCONTENT($cONTENT)
    {
        $this->CONTENT = $cONTENT;
    }

    /**
     * Get CONTENT
     *
     * @return text
     */
    public function getCONTENT()
    {
        return $this->CONTENT;
    }
}