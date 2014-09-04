<?php

namespace TefNetweb\AncestryBundle\Entity\Ancestry;

use Doctrine\ORM\Mapping as ORM;

/**
 * Death
 */
class Death
{

    /**
     * @var \DateTime
     */
    private $deathDate;

    /**
     * @var \DateTime
     */
    private $deathTime;

    /**
     * @var \DateTime
     */
    private $registrationDate;

    /**
     * @var string
     */
    private $DeathPlace;

    /**
     * @var string
     */
    private $Parish;

    /**
     * @var string
     */
    private $probandSurname;

    /**
     * @var string
     */
    private $probandName;

    /**
     * @var string
     */
    private $probandName2;

    /**
     * @var string
     */
    private $probandName3;

    /**
     * @var string
     */
    private $probandSex;

    /**
     * @var integer
     */
    private $probandStatus;

    /**
     * @var integer
     */
    private $probandAge;

    /**
     * @var \DateTime
     */
    private $birthDate;

    /**
     * @var string
     */
    private $probandBirthPlace;

    /**
     * @var string
     */
    private $probandResidence;

    /**
     * @var string
     */
    private $probandResidenceParish;

    /**
     * @var string
     */
    private $probandProfession;

    /**
     * @var string
     */
    private $fatherSurname;

    /**
     * @var string
     */
    private $fatherName;

    /**
     * @var string
     */
    private $fatherName2;

    /**
     * @var string
     */
    private $fatherName3;

    /**
     * @var boolean
     */
    private $IsFatherDead;

    /**
     * @var integer
     */
    private $fatherAge;

    /**
     * @var integer
     */
    private $fatherStatus;

    /**
     * @var string
     */
    private $fatherResidence;

    /**
     * @var string
     */
    private $fatherProfession;

    /**
     * @var string
     */
    private $motherSurname;

    /**
     * @var string
     */
    private $motherName;

    /**
     * @var string
     */
    private $motherName2;

    /**
     * @var string
     */
    private $motherName3;

    /**
     * @var boolean
     */
    private $IsMotherDead;

    /**
     * @var integer
     */
    private $motherAge;

    /**
     * @var integer
     */
    private $motherStatus;

    /**
     * @var string
     */
    private $motherResidence;

    /**
     * @var string
     */
    private $motherProfession;

    /**
     * @var string
     */
    private $notes;

    /**
     * @var integer
     */
    private $id;

    /**
     * Set deathDate
     *
     * @param \DateTime $deathDate
     * @return Death
     */
    public function setDeathDate($deathDate)
    {
        $this->deathDate = $deathDate;

        return $this;
    }

    /**
     * Get deathDate
     *
     * @return \DateTime
     */
    public function getDeathDate()
    {
        return $this->deathDate;
    }

    /**
     * Set deathTime
     *
     * @param \DateTime $deathTime
     * @return Death
     */
    public function setDeathTime($deathTime)
    {
        $this->deathTime = $deathTime;

        return $this;
    }

    /**
     * Get deathTime
     *
     * @return \DateTime
     */
    public function getDeathTime()
    {
        return $this->deathTime;
    }

    /**
     * Set registrationDate
     *
     * @param \DateTime $registrationDate
     * @return Death
     */
    public function setRegistrationDate($registrationDate)
    {
        $this->registrationDate = $registrationDate;

        return $this;
    }

    /**
     * Get registrationDate
     *
     * @return \DateTime
     */
    public function getRegistrationDate()
    {
        return $this->registrationDate;
    }

    /**
     * Set DeathPlace
     *
     * @param string $deathPlace
     * @return Death
     */
    public function setDeathPlace($deathPlace)
    {
        $this->DeathPlace = $deathPlace;

        return $this;
    }

    /**
     * Get DeathPlace
     *
     * @return string
     */
    public function getDeathPlace()
    {
        return $this->DeathPlace;
    }

    /**
     * Set Parish
     *
     * @param string $parish
     * @return Death
     */
    public function setParish($parish)
    {
        $this->Parish = $parish;

        return $this;
    }

    /**
     * Get Parish
     *
     * @return string
     */
    public function getParish()
    {
        return $this->Parish;
    }

    /**
     * Set probandSurname
     *
     * @param string $probandSurname
     * @return Death
     */
    public function setProbandSurname($probandSurname)
    {
        $this->probandSurname = $probandSurname;

        return $this;
    }

    /**
     * Get probandSurname
     *
     * @return string
     */
    public function getProbandSurname()
    {
        return $this->probandSurname;
    }

    /**
     * Set probandName
     *
     * @param string $probandName
     * @return Death
     */
    public function setProbandName($probandName)
    {
        $this->probandName = $probandName;

        return $this;
    }

    /**
     * Get probandName
     *
     * @return string
     */
    public function getProbandName()
    {
        return $this->probandName;
    }

    /**
     * Set probandName2
     *
     * @param string $probandName2
     * @return Death
     */
    public function setProbandName2($probandName2)
    {
        $this->probandName2 = $probandName2;

        return $this;
    }

    /**
     * Get probandName2
     *
     * @return string
     */
    public function getProbandName2()
    {
        return $this->probandName2;
    }

    /**
     * Set probandName3
     *
     * @param string $probandName3
     * @return Death
     */
    public function setProbandName3($probandName3)
    {
        $this->probandName3 = $probandName3;

        return $this;
    }

    /**
     * Get probandName3
     *
     * @return string
     */
    public function getProbandName3()
    {
        return $this->probandName3;
    }

    /**
     * Set probandSex
     *
     * @param string $probandSex
     * @return Death
     */
    public function setProbandSex($probandSex)
    {
        $this->probandSex = $probandSex;

        return $this;
    }

    /**
     * Get probandSex
     *
     * @return string
     */
    public function getProbandSex()
    {
        return $this->probandSex;
    }

    /**
     * Set probandStatus
     *
     * @param integer $probandStatus
     * @return Death
     */
    public function setProbandStatus($probandStatus)
    {
        $this->probandStatus = $probandStatus;

        return $this;
    }

    /**
     * Get probandStatus
     *
     * @return integer
     */
    public function getProbandStatus()
    {
        return $this->probandStatus;
    }

    /**
     * Set probandAge
     *
     * @param integer $probandAge
     * @return Death
     */
    public function setProbandAge($probandAge)
    {
        $this->probandAge = $probandAge;

        return $this;
    }

    /**
     * Get probandAge
     *
     * @return integer
     */
    public function getProbandAge()
    {
        return $this->probandAge;
    }

    /**
     * Set birthDate
     *
     * @param \DateTime $birthDate
     * @return Death
     */
    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;

        return $this;
    }

    /**
     * Get birthDate
     *
     * @return \DateTime
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * Set probandBirthPlace
     *
     * @param string $probandBirthPlace
     * @return Death
     */
    public function setProbandBirthPlace($probandBirthPlace)
    {
        $this->probandBirthPlace = $probandBirthPlace;

        return $this;
    }

    /**
     * Get probandBirthPlace
     *
     * @return string
     */
    public function getProbandBirthPlace()
    {
        return $this->probandBirthPlace;
    }

    /**
     * Set probandResidence
     *
     * @param string $probandResidence
     * @return Death
     */
    public function setProbandResidence($probandResidence)
    {
        $this->probandResidence = $probandResidence;

        return $this;
    }

    /**
     * Get probandResidence
     *
     * @return string
     */
    public function getProbandResidence()
    {
        return $this->probandResidence;
    }

    /**
     * Set probandResidenceParish
     *
     * @param string $probandResidenceParish
     * @return Death
     */
    public function setProbandResidenceParish($probandResidenceParish)
    {
        $this->probandResidenceParish = $probandResidenceParish;

        return $this;
    }

    /**
     * Get probandResidenceParish
     *
     * @return string
     */
    public function getProbandResidenceParish()
    {
        return $this->probandResidenceParish;
    }

    /**
     * Set probandProfession
     *
     * @param string $probandProfession
     * @return Death
     */
    public function setProbandProfession($probandProfession)
    {
        $this->probandProfession = $probandProfession;

        return $this;
    }

    /**
     * Get probandProfession
     *
     * @return string
     */
    public function getProbandProfession()
    {
        return $this->probandProfession;
    }

    /**
     * Set fatherSurname
     *
     * @param string $fatherSurname
     * @return Death
     */
    public function setFatherSurname($fatherSurname)
    {
        $this->fatherSurname = $fatherSurname;

        return $this;
    }

    /**
     * Get fatherSurname
     *
     * @return string
     */
    public function getFatherSurname()
    {
        return $this->fatherSurname;
    }

    /**
     * Set fatherName
     *
     * @param string $fatherName
     * @return Death
     */
    public function setFatherName($fatherName)
    {
        $this->fatherName = $fatherName;

        return $this;
    }

    /**
     * Get fatherName
     *
     * @return string
     */
    public function getFatherName()
    {
        return $this->fatherName;
    }

    /**
     * Set fatherName2
     *
     * @param string $fatherName2
     * @return Death
     */
    public function setFatherName2($fatherName2)
    {
        $this->fatherName2 = $fatherName2;

        return $this;
    }

    /**
     * Get fatherName2
     *
     * @return string
     */
    public function getFatherName2()
    {
        return $this->fatherName2;
    }

    /**
     * Set fatherName3
     *
     * @param string $fatherName3
     * @return Death
     */
    public function setFatherName3($fatherName3)
    {
        $this->fatherName3 = $fatherName3;

        return $this;
    }

    /**
     * Get fatherName3
     *
     * @return string
     */
    public function getFatherName3()
    {
        return $this->fatherName3;
    }

    /**
     * Set IsFatherDead
     *
     * @param boolean $isFatherDead
     * @return Death
     */
    public function setIsFatherDead($isFatherDead)
    {
        $this->IsFatherDead = $isFatherDead;

        return $this;
    }

    /**
     * Get IsFatherDead
     *
     * @return boolean
     */
    public function getIsFatherDead()
    {
        return $this->IsFatherDead;
    }

    /**
     * Set fatherAge
     *
     * @param integer $fatherAge
     * @return Death
     */
    public function setFatherAge($fatherAge)
    {
        $this->fatherAge = $fatherAge;

        return $this;
    }

    /**
     * Get fatherAge
     *
     * @return integer
     */
    public function getFatherAge()
    {
        return $this->fatherAge;
    }

    /**
     * Set fatherStatus
     *
     * @param integer $fatherStatus
     * @return Death
     */
    public function setFatherStatus($fatherStatus)
    {
        $this->fatherStatus = $fatherStatus;

        return $this;
    }

    /**
     * Get fatherStatus
     *
     * @return integer
     */
    public function getFatherStatus()
    {
        return $this->fatherStatus;
    }

    /**
     * Set fatherResidence
     *
     * @param string $fatherResidence
     * @return Death
     */
    public function setFatherResidence($fatherResidence)
    {
        $this->fatherResidence = $fatherResidence;

        return $this;
    }

    /**
     * Get fatherResidence
     *
     * @return string
     */
    public function getFatherResidence()
    {
        return $this->fatherResidence;
    }

    /**
     * Set fatherProfession
     *
     * @param string $fatherProfession
     * @return Death
     */
    public function setFatherProfession($fatherProfession)
    {
        $this->fatherProfession = $fatherProfession;

        return $this;
    }

    /**
     * Get fatherProfession
     *
     * @return string
     */
    public function getFatherProfession()
    {
        return $this->fatherProfession;
    }

    /**
     * Set motherSurname
     *
     * @param string $motherSurname
     * @return Death
     */
    public function setMotherSurname($motherSurname)
    {
        $this->motherSurname = $motherSurname;

        return $this;
    }

    /**
     * Get motherSurname
     *
     * @return string
     */
    public function getMotherSurname()
    {
        return $this->motherSurname;
    }

    /**
     * Set motherName
     *
     * @param string $motherName
     * @return Death
     */
    public function setMotherName($motherName)
    {
        $this->motherName = $motherName;

        return $this;
    }

    /**
     * Get motherName
     *
     * @return string
     */
    public function getMotherName()
    {
        return $this->motherName;
    }

    /**
     * Set motherName2
     *
     * @param string $motherName2
     * @return Death
     */
    public function setMotherName2($motherName2)
    {
        $this->motherName2 = $motherName2;

        return $this;
    }

    /**
     * Get motherName2
     *
     * @return string
     */
    public function getMotherName2()
    {
        return $this->motherName2;
    }

    /**
     * Set motherName3
     *
     * @param string $motherName3
     * @return Death
     */
    public function setMotherName3($motherName3)
    {
        $this->motherName3 = $motherName3;

        return $this;
    }

    /**
     * Get motherName3
     *
     * @return string
     */
    public function getMotherName3()
    {
        return $this->motherName3;
    }

    /**
     * Set IsMotherDead
     *
     * @param boolean $isMotherDead
     * @return Death
     */
    public function setIsMotherDead($isMotherDead)
    {
        $this->IsMotherDead = $isMotherDead;

        return $this;
    }

    /**
     * Get IsMotherDead
     *
     * @return boolean
     */
    public function getIsMotherDead()
    {
        return $this->IsMotherDead;
    }

    /**
     * Set motherAge
     *
     * @param integer $motherAge
     * @return Death
     */
    public function setMotherAge($motherAge)
    {
        $this->motherAge = $motherAge;

        return $this;
    }

    /**
     * Get motherAge
     *
     * @return integer
     */
    public function getMotherAge()
    {
        return $this->motherAge;
    }

    /**
     * Set motherStatus
     *
     * @param integer $motherStatus
     * @return Death
     */
    public function setMotherStatus($motherStatus)
    {
        $this->motherStatus = $motherStatus;

        return $this;
    }

    /**
     * Get motherStatus
     *
     * @return integer
     */
    public function getMotherStatus()
    {
        return $this->motherStatus;
    }

    /**
     * Set motherResidence
     *
     * @param string $motherResidence
     * @return Death
     */
    public function setMotherResidence($motherResidence)
    {
        $this->motherResidence = $motherResidence;

        return $this;
    }

    /**
     * Get motherResidence
     *
     * @return string
     */
    public function getMotherResidence()
    {
        return $this->motherResidence;
    }

    /**
     * Set motherProfession
     *
     * @param string $motherProfession
     * @return Death
     */
    public function setMotherProfession($motherProfession)
    {
        $this->motherProfession = $motherProfession;

        return $this;
    }

    /**
     * Get motherProfession
     *
     * @return string
     */
    public function getMotherProfession()
    {
        return $this->motherProfession;
    }

    /**
     * Set notes
     *
     * @param string $notes
     * @return Death
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;

        return $this;
    }

    /**
     * Get notes
     *
     * @return string
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
