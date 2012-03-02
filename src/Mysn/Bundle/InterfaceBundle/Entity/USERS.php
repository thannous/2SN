<?php

namespace Mysn\Bundle\InterfaceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mysn\Bundle\InterfaceBundle\Entity\USERS
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Mysn\Bundle\InterfaceBundle\Entity\USERSRepository")
 */
class USERS
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
     * @var string $EMAIL
     *
     * @ORM\Column(name="EMAIL", type="string", length=255)
     */
    private $EMAIL;

    /**
     * @var string $PASS
     *
     * @ORM\Column(name="PASS", type="string", length=255)
     */
    private $PASS;

    /**
     * @var string $FIRSTNAME
     *
     * @ORM\Column(name="FIRSTNAME", type="string", length=255)
     */
    private $FIRSTNAME;

    /**
     * @var string $LASTNAME
     *
     * @ORM\Column(name="LASTNAME", type="string", length=255)
     */
    private $LASTNAME;

    /**
     * @var string $ADDRESS
     *
     * @ORM\Column(name="ADDRESS", type="string", length=255)
     */
    private $ADDRESS;

    /**
     * @var string $CITY
     *
     * @ORM\Column(name="CITY", type="string", length=50)
     */
    private $CITY;

    /**
     * @var string $CP
     *
     * @ORM\Column(name="CP", type="string", length=5)
     */
    private $CP;

    /**
     * @var string $COUNTRY
     *
     * @ORM\Column(name="COUNTRY", type="string", length=20)
     */
    private $COUNTRY;

    /**
     * @var string $AVATAR
     *
     * @ORM\Column(name="AVATAR", type="string", length=255)
     */
    private $AVATAR;

    /**
     * @var datetime $BIRTHDAY
     *
     * @ORM\Column(name="BIRTHDAY", type="datetime")
     */
    private $BIRTHDAY;

    /**
     * @var string $STATUS
     *
     * @ORM\Column(name="STATUS", type="string", length=255)
     */
    private $STATUS;

    /**
     * @var datetime $LAST_LOGIN
     *
     * @ORM\Column(name="LAST_LOGIN", type="datetime")
     */
    private $LAST_LOGIN;

    /**
     * @var datetime $CREATE_DATE
     *
     * @ORM\Column(name="CREATE_DATE", type="datetime")
     */
    private $CREATE_DATE;

    /**
     * @var boolean $IS_ENABLE
     *
     * @ORM\Column(name="IS_ENABLE", type="boolean")
     */
    private $IS_ENABLE;


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
     * Set EMAIL
     *
     * @param string $eMAIL
     */
    public function setEMAIL($eMAIL)
    {
        $this->EMAIL = $eMAIL;
    }

    /**
     * Get EMAIL
     *
     * @return string 
     */
    public function getEMAIL()
    {
        return $this->EMAIL;
    }

    /**
     * Set PASS
     *
     * @param string $pASS
     */
    public function setPASS($pASS)
    {
        $this->PASS = $pASS;
    }

    /**
     * Get PASS
     *
     * @return string 
     */
    public function getPASS()
    {
        return $this->PASS;
    }

    /**
     * Set FIRSTNAME
     *
     * @param string $fIRSTNAME
     */
    public function setFIRSTNAME($fIRSTNAME)
    {
        $this->FIRSTNAME = $fIRSTNAME;
    }

    /**
     * Get FIRSTNAME
     *
     * @return string 
     */
    public function getFIRSTNAME()
    {
        return $this->FIRSTNAME;
    }

    /**
     * Set LASTNAME
     *
     * @param string $lASTNAME
     */
    public function setLASTNAME($lASTNAME)
    {
        $this->LASTNAME = $lASTNAME;
    }

    /**
     * Get LASTNAME
     *
     * @return string 
     */
    public function getLASTNAME()
    {
        return $this->LASTNAME;
    }

    /**
     * Set ADDRESS
     *
     * @param string $aDDRESS
     */
    public function setADDRESS($aDDRESS)
    {
        $this->ADDRESS = $aDDRESS;
    }

    /**
     * Get ADDRESS
     *
     * @return string 
     */
    public function getADDRESS()
    {
        return $this->ADDRESS;
    }

    /**
     * Set CITY
     *
     * @param string $cITY
     */
    public function setCITY($cITY)
    {
        $this->CITY = $cITY;
    }

    /**
     * Get CITY
     *
     * @return string 
     */
    public function getCITY()
    {
        return $this->CITY;
    }

    /**
     * Set CP
     *
     * @param string $cP
     */
    public function setCP($cP)
    {
        $this->CP = $cP;
    }

    /**
     * Get CP
     *
     * @return string 
     */
    public function getCP()
    {
        return $this->CP;
    }

    /**
     * Set COUNTRY
     *
     * @param string $cOUNTRY
     */
    public function setCOUNTRY($cOUNTRY)
    {
        $this->COUNTRY = $cOUNTRY;
    }

    /**
     * Get COUNTRY
     *
     * @return string 
     */
    public function getCOUNTRY()
    {
        return $this->COUNTRY;
    }

    /**
     * Set AVATAR
     *
     * @param string $aVATAR
     */
    public function setAVATAR($aVATAR)
    {
        $this->AVATAR = $aVATAR;
    }

    /**
     * Get AVATAR
     *
     * @return string 
     */
    public function getAVATAR()
    {
        return $this->AVATAR;
    }

    /**
     * Set BIRTHDAY
     *
     * @param datetime $bIRTHDAY
     */
    public function setBIRTHDAY($bIRTHDAY)
    {
        $this->BIRTHDAY = $bIRTHDAY;
    }

    /**
     * Get BIRTHDAY
     *
     * @return datetime 
     */
    public function getBIRTHDAY()
    {
        return $this->BIRTHDAY;
    }

    /**
     * Set STATUS
     *
     * @param string $sTATUS
     */
    public function setSTATUS($sTATUS)
    {
        $this->STATUS = $sTATUS;
    }

    /**
     * Get STATUS
     *
     * @return string 
     */
    public function getSTATUS()
    {
        return $this->STATUS;
    }

    /**
     * Set LAST_LOGIN
     *
     * @param datetime $lASTLOGIN
     */
    public function setLASTLOGIN($lASTLOGIN)
    {
        $this->LAST_LOGIN = $lASTLOGIN;
    }

    /**
     * Get LAST_LOGIN
     *
     * @return datetime 
     */
    public function getLASTLOGIN()
    {
        return $this->LAST_LOGIN;
    }

    /**
     * Set CREATE_DATE
     *
     * @param datetime $cREATEDATE
     */
    public function setCREATEDATE($cREATEDATE)
    {
        $this->CREATE_DATE = $cREATEDATE;
    }

    /**
     * Get CREATE_DATE
     *
     * @return datetime 
     */
    public function getCREATEDATE()
    {
        return $this->CREATE_DATE;
    }

    /**
     * Set IS_ENABLE
     *
     * @param boolean $iSENABLE
     */
    public function setISENABLE($iSENABLE)
    {
        $this->IS_ENABLE = $iSENABLE;
    }

    /**
     * Get IS_ENABLE
     *
     * @return boolean 
     */
    public function getISENABLE()
    {
        return $this->IS_ENABLE;
    }
}