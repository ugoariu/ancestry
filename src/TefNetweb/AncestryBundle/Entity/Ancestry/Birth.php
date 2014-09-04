<?php

namespace TefNetweb\AncestryBundle\Entity\Ancestry;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Birth
 */
class Birth
{
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
     * @var string
     */
    private $probandBirthExitus;

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
    private $motherProfession;

    /**
     * @var \DateTime
     * @Assert\NotNull()
     */
    private $birthDate;

    /**
     * @var \DateTime
     */
    private $birthTime;

    /**
     * @var \DateTime
     */
    private $registrationDate;

    /**
     * @var string
     */
    private $birthPlace;

    /**
     * @var string
     */
    private $birthParish;

    /**
     * @var string
     */
    private $residence;

    /**
     * @var string
     */
    private $residenceParish;

    /**
     * @var string
     */
    private $notes;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set probandSurname
     *
     * @param string $probandSurname
     * @return Birth
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
     * @return Birth
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
     * @return Birth
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
     * @return Birth
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
     * @return Birth
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
     * Set probandBirthExitus
     *
     * @param string $probandBirthExitus
     * @return Birth
     */
    public function setProbandBirthExitus($probandBirthExitus)
    {
        $this->probandBirthExitus = $probandBirthExitus;

        return $this;
    }

    /**
     * Get probandBirthExitus
     *
     * @return string
     */
    public function getProbandBirthExitus()
    {
        return $this->probandBirthExitus;
    }

    /**
     * Set fatherSurname
     *
     * @param string $fatherSurname
     * @return Birth
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
     * @return Birth
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
     * @return Birth
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
     * @return Birth
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
     * Set fatherAge
     *
     * @param integer $fatherAge
     * @return Birth
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
     * @return Birth
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
     * Set fatherProfession
     *
     * @param string $fatherProfession
     * @return Birth
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
     * @return Birth
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
     * @return Birth
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
     * @return Birth
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
     * @return Birth
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
     * Set motherAge
     *
     * @param integer $motherAge
     * @return Birth
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
     * @return Birth
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
     * Set motherProfession
     *
     * @param string $motherProfession
     * @return Birth
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
     * Set birthDate
     *
     * @param \DateTime $birthDate
     * @return Birth
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
     * Set birthTime
     *
     * @param \DateTime $birthTime
     * @return Birth
     */
    public function setBirthTime($birthTime)
    {
        $this->birthTime = $birthTime;

        return $this;
    }

    /**
     * Get birthTime
     *
     * @return \DateTime
     */
    public function getBirthTime()
    {
        return $this->birthTime;
    }

    /**
     * Set registrationDate
     *
     * @param \DateTime $registrationDate
     * @return Birth
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
     * Set birthPlace
     *
     * @param string $birthPlace
     * @return Birth
     */
    public function setBirthPlace($birthPlace)
    {
        $this->birthPlace = $birthPlace;

        return $this;
    }

    /**
     * Get birthPlace
     *
     * @return string
     */
    public function getBirthPlace()
    {
        return $this->birthPlace;
    }

    /**
     * Set birthParish
     *
     * @param string $birthParish
     * @return Birth
     */
    public function setBirthParish($birthParish)
    {
        $this->birthParish = $birthParish;

        return $this;
    }

    /**
     * Get birthParish
     *
     * @return string
     */
    public function getBirthParish()
    {
        return $this->birthParish;
    }

    /**
     * Set residence
     *
     * @param string $residence
     * @return Birth
     */
    public function setResidence($residence)
    {
        $this->residence = $residence;

        return $this;
    }

    /**
     * Get residence
     *
     * @return string
     */
    public function getResidence()
    {
        return $this->residence;
    }

    /**
     * Set residenceParish
     *
     * @param string $residenceParish
     * @return Birth
     */
    public function setResidenceParish($residenceParish)
    {
        $this->residenceParish = $residenceParish;

        return $this;
    }

    /**
     * Get residenceParish
     *
     * @return string
     */
    public function getResidenceParish()
    {
        return $this->residenceParish;
    }

    /**
     * Set notes
     *
     * @param string $notes
     * @return Birth
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
