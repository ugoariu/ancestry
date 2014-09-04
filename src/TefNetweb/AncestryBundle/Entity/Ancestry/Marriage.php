<?php

namespace TefNetweb\AncestryBundle\Entity\Ancestry;

use Doctrine\ORM\Mapping as ORM;

/**
 * Marriage
 */
class Marriage
{

    /**
     * @var string
     */
    private $husbandSurname;

    /**
     * @var string
     */
    private $husbandName;

    /**
     * @var string
     */
    private $husbandName2;

    /**
     * @var string
     */
    private $husbandName3;

    /**
     * @var integer
     */
    private $husbandAge;

    /**
     * @var integer
     */
    private $husbandStatus;

    /**
     * @var \DateTime
     */
    private $husbandBirthDate;

    /**
     * @var string
     */
    private $husbandBirthPlace;

    /**
     * @var string
     */
    private $husbandParish;

    /**
     * @var string
     */
    private $husbandResidence;

    /**
     * @var string
     */
    private $husbandProfession;

    /**
     * @var string
     */
    private $husbandFatherSurname;

    /**
     * @var string
     */
    private $husbandFatherName;

    /**
     * @var string
     */
    private $husbandFatherName2;

    /**
     * @var string
     */
    private $husbandFatherName3;

    /**
     * @var integer
     */
    private $husbandFatherAge;

    /**
     * @var integer
     */
    private $husbandFatherStatus;

    /**
     * @var string
     */
    private $husbandFatherProfession;

    /**
     * @var string
     */
    private $husbandMotherSurname;

    /**
     * @var string
     */
    private $husbandMotherName;

    /**
     * @var string
     */
    private $husbandMotherName2;

    /**
     * @var string
     */
    private $husbandMotherName3;

    /**
     * @var integer
     */
    private $husbandMotherAge;

    /**
     * @var integer
     */
    private $husbandMotherStatus;

    /**
     * @var string
     */
    private $husbandMotherProfession;

    /**
     * @var string
     */
    private $wifeSurname;

    /**
     * @var string
     */
    private $wifeName;

    /**
     * @var string
     */
    private $wifeName2;

    /**
     * @var string
     */
    private $wifeName3;

    /**
     * @var integer
     */
    private $wifeAge;

    /**
     * @var integer
     */
    private $wifeStatus;

    /**
     * @var \DateTime
     */
    private $wifeBirthDate;

    /**
     * @var string
     */
    private $wifeBirthPlace;

    /**
     * @var string
     */
    private $wifeParish;

    /**
     * @var string
     */
    private $wifeResidence;

    /**
     * @var string
     */
    private $wifeProfession;

    /**
     * @var string
     */
    private $wifeFatherSurname;

    /**
     * @var string
     */
    private $wifeFatherName;

    /**
     * @var string
     */
    private $wifeFatherName2;

    /**
     * @var string
     */
    private $wifeFatherName3;

    /**
     * @var integer
     */
    private $wifeFatherAge;

    /**
     * @var integer
     */
    private $wifeFatherStatus;

    /**
     * @var string
     */
    private $wifeFatherProfession;

    /**
     * @var string
     */
    private $wifeMotherSurname;

    /**
     * @var string
     */
    private $wifeMotherName;

    /**
     * @var string
     */
    private $wifeMotherName2;

    /**
     * @var string
     */
    private $wifeMotherName3;

    /**
     * @var integer
     */
    private $wifeMotherAge;

    /**
     * @var integer
     */
    private $wifeMotherStatus;

    /**
     * @var string
     */
    private $wifeMotherProfession;

    /**
     * @var \DateTime
     */
    private $marriageDate;

    /**
     * @var \DateTime
     */
    private $marriageTime;

    /**
     * @var \DateTime
     */
    private $registrationDate;

    /**
     * @var string
     */
    private $marriagePlace;

    /**
     * @var string
     */
    private $marriageParish;

    /**
     * @var string
     */
    private $notes;

    /**
     * @var integer
     */
    private $id;

    /**
     * Set husbandSurname
     *
     * @param string $husbandSurname
     * @return Marriage
     */
    public function setHusbandSurname($husbandSurname)
    {
        $this->husbandSurname = $husbandSurname;

        return $this;
    }

    /**
     * Get husbandSurname
     *
     * @return string
     */
    public function getHusbandSurname()
    {
        return $this->husbandSurname;
    }

    /**
     * Set husbandName
     *
     * @param string $husbandName
     * @return Marriage
     */
    public function setHusbandName($husbandName)
    {
        $this->husbandName = $husbandName;

        return $this;
    }

    /**
     * Get husbandName
     *
     * @return string
     */
    public function getHusbandName()
    {
        return $this->husbandName;
    }

    /**
     * Set husbandName2
     *
     * @param string $husbandName2
     * @return Marriage
     */
    public function setHusbandName2($husbandName2)
    {
        $this->husbandName2 = $husbandName2;

        return $this;
    }

    /**
     * Get husbandName2
     *
     * @return string
     */
    public function getHusbandName2()
    {
        return $this->husbandName2;
    }

    /**
     * Set husbandName3
     *
     * @param string $husbandName3
     * @return Marriage
     */
    public function setHusbandName3($husbandName3)
    {
        $this->husbandName3 = $husbandName3;

        return $this;
    }

    /**
     * Get husbandName3
     *
     * @return string
     */
    public function getHusbandName3()
    {
        return $this->husbandName3;
    }

    /**
     * Set husbandAge
     *
     * @param integer $husbandAge
     * @return Marriage
     */
    public function setHusbandAge($husbandAge)
    {
        $this->husbandAge = $husbandAge;

        return $this;
    }

    /**
     * Get husbandAge
     *
     * @return integer
     */
    public function getHusbandAge()
    {
        return $this->husbandAge;
    }

    /**
     * Set husbandStatus
     *
     * @param integer $husbandStatus
     * @return Marriage
     */
    public function setHusbandStatus($husbandStatus)
    {
        $this->husbandStatus = $husbandStatus;

        return $this;
    }

    /**
     * Get husbandStatus
     *
     * @return integer
     */
    public function getHusbandStatus()
    {
        return $this->husbandStatus;
    }

    /**
     * Set husbandBirthDate
     *
     * @param \DateTime $husbandBirthDate
     * @return Marriage
     */
    public function setHusbandBirthDate($husbandBirthDate)
    {
        $this->husbandBirthDate = $husbandBirthDate;

        return $this;
    }

    /**
     * Get husbandBirthDate
     *
     * @return \DateTime
     */
    public function getHusbandBirthDate()
    {
        return $this->husbandBirthDate;
    }

    /**
     * Set husbandBirthPlace
     *
     * @param string $husbandBirthPlace
     * @return Marriage
     */
    public function setHusbandBirthPlace($husbandBirthPlace)
    {
        $this->husbandBirthPlace = $husbandBirthPlace;

        return $this;
    }

    /**
     * Get husbandBirthPlace
     *
     * @return string
     */
    public function getHusbandBirthPlace()
    {
        return $this->husbandBirthPlace;
    }

    /**
     * Set husbandParish
     *
     * @param string $husbandParish
     * @return Marriage
     */
    public function setHusbandParish($husbandParish)
    {
        $this->husbandParish = $husbandParish;

        return $this;
    }

    /**
     * Get husbandParish
     *
     * @return string
     */
    public function getHusbandParish()
    {
        return $this->husbandParish;
    }

    /**
     * Set husbandResidence
     *
     * @param string $husbandResidence
     * @return Marriage
     */
    public function setHusbandResidence($husbandResidence)
    {
        $this->husbandResidence = $husbandResidence;

        return $this;
    }

    /**
     * Get husbandResidence
     *
     * @return string
     */
    public function getHusbandResidence()
    {
        return $this->husbandResidence;
    }

    /**
     * Set husbandProfession
     *
     * @param string $husbandProfession
     * @return Marriage
     */
    public function setHusbandProfession($husbandProfession)
    {
        $this->husbandProfession = $husbandProfession;

        return $this;
    }

    /**
     * Get husbandProfession
     *
     * @return string
     */
    public function getHusbandProfession()
    {
        return $this->husbandProfession;
    }

    /**
     * Set husbandFatherSurname
     *
     * @param string $husbandFatherSurname
     * @return Marriage
     */
    public function setHusbandFatherSurname($husbandFatherSurname)
    {
        $this->husbandFatherSurname = $husbandFatherSurname;

        return $this;
    }

    /**
     * Get husbandFatherSurname
     *
     * @return string
     */
    public function getHusbandFatherSurname()
    {
        return $this->husbandFatherSurname;
    }

    /**
     * Set husbandFatherName
     *
     * @param string $husbandFatherName
     * @return Marriage
     */
    public function setHusbandFatherName($husbandFatherName)
    {
        $this->husbandFatherName = $husbandFatherName;

        return $this;
    }

    /**
     * Get husbandFatherName
     *
     * @return string
     */
    public function getHusbandFatherName()
    {
        return $this->husbandFatherName;
    }

    /**
     * Set husbandFatherName2
     *
     * @param string $husbandFatherName2
     * @return Marriage
     */
    public function setHusbandFatherName2($husbandFatherName2)
    {
        $this->husbandFatherName2 = $husbandFatherName2;

        return $this;
    }

    /**
     * Get husbandFatherName2
     *
     * @return string
     */
    public function getHusbandFatherName2()
    {
        return $this->husbandFatherName2;
    }

    /**
     * Set husbandFatherName3
     *
     * @param string $husbandFatherName3
     * @return Marriage
     */
    public function setHusbandFatherName3($husbandFatherName3)
    {
        $this->husbandFatherName3 = $husbandFatherName3;

        return $this;
    }

    /**
     * Get husbandFatherName3
     *
     * @return string
     */
    public function getHusbandFatherName3()
    {
        return $this->husbandFatherName3;
    }

    /**
     * Set husbandFatherAge
     *
     * @param integer $husbandFatherAge
     * @return Marriage
     */
    public function setHusbandFatherAge($husbandFatherAge)
    {
        $this->husbandFatherAge = $husbandFatherAge;

        return $this;
    }

    /**
     * Get husbandFatherAge
     *
     * @return integer
     */
    public function getHusbandFatherAge()
    {
        return $this->husbandFatherAge;
    }

    /**
     * Set husbandFatherStatus
     *
     * @param integer $husbandFatherStatus
     * @return Marriage
     */
    public function setHusbandFatherStatus($husbandFatherStatus)
    {
        $this->husbandFatherStatus = $husbandFatherStatus;

        return $this;
    }

    /**
     * Get husbandFatherStatus
     *
     * @return integer
     */
    public function getHusbandFatherStatus()
    {
        return $this->husbandFatherStatus;
    }

    /**
     * Set husbandFatherProfession
     *
     * @param string $husbandFatherProfession
     * @return Marriage
     */
    public function setHusbandFatherProfession($husbandFatherProfession)
    {
        $this->husbandFatherProfession = $husbandFatherProfession;

        return $this;
    }

    /**
     * Get husbandFatherProfession
     *
     * @return string
     */
    public function getHusbandFatherProfession()
    {
        return $this->husbandFatherProfession;
    }

    /**
     * Set husbandMotherSurname
     *
     * @param string $husbandMotherSurname
     * @return Marriage
     */
    public function setHusbandMotherSurname($husbandMotherSurname)
    {
        $this->husbandMotherSurname = $husbandMotherSurname;

        return $this;
    }

    /**
     * Get husbandMotherSurname
     *
     * @return string
     */
    public function getHusbandMotherSurname()
    {
        return $this->husbandMotherSurname;
    }

    /**
     * Set husbandMotherName
     *
     * @param string $husbandMotherName
     * @return Marriage
     */
    public function setHusbandMotherName($husbandMotherName)
    {
        $this->husbandMotherName = $husbandMotherName;

        return $this;
    }

    /**
     * Get husbandMotherName
     *
     * @return string
     */
    public function getHusbandMotherName()
    {
        return $this->husbandMotherName;
    }

    /**
     * Set husbandMotherName2
     *
     * @param string $husbandMotherName2
     * @return Marriage
     */
    public function setHusbandMotherName2($husbandMotherName2)
    {
        $this->husbandMotherName2 = $husbandMotherName2;

        return $this;
    }

    /**
     * Get husbandMotherName2
     *
     * @return string
     */
    public function getHusbandMotherName2()
    {
        return $this->husbandMotherName2;
    }

    /**
     * Set husbandMotherName3
     *
     * @param string $husbandMotherName3
     * @return Marriage
     */
    public function setHusbandMotherName3($husbandMotherName3)
    {
        $this->husbandMotherName3 = $husbandMotherName3;

        return $this;
    }

    /**
     * Get husbandMotherName3
     *
     * @return string
     */
    public function getHusbandMotherName3()
    {
        return $this->husbandMotherName3;
    }

    /**
     * Set husbandMotherAge
     *
     * @param integer $husbandMotherAge
     * @return Marriage
     */
    public function setHusbandMotherAge($husbandMotherAge)
    {
        $this->husbandMotherAge = $husbandMotherAge;

        return $this;
    }

    /**
     * Get husbandMotherAge
     *
     * @return integer
     */
    public function getHusbandMotherAge()
    {
        return $this->husbandMotherAge;
    }

    /**
     * Set husbandMotherStatus
     *
     * @param integer $husbandMotherStatus
     * @return Marriage
     */
    public function setHusbandMotherStatus($husbandMotherStatus)
    {
        $this->husbandMotherStatus = $husbandMotherStatus;

        return $this;
    }

    /**
     * Get husbandMotherStatus
     *
     * @return integer
     */
    public function getHusbandMotherStatus()
    {
        return $this->husbandMotherStatus;
    }

    /**
     * Set husbandMotherProfession
     *
     * @param string $husbandMotherProfession
     * @return Marriage
     */
    public function setHusbandMotherProfession($husbandMotherProfession)
    {
        $this->husbandMotherProfession = $husbandMotherProfession;

        return $this;
    }

    /**
     * Get husbandMotherProfession
     *
     * @return string
     */
    public function getHusbandMotherProfession()
    {
        return $this->husbandMotherProfession;
    }

    /**
     * Set wifeSurname
     *
     * @param string $wifeSurname
     * @return Marriage
     */
    public function setWifeSurname($wifeSurname)
    {
        $this->wifeSurname = $wifeSurname;

        return $this;
    }

    /**
     * Get wifeSurname
     *
     * @return string
     */
    public function getWifeSurname()
    {
        return $this->wifeSurname;
    }

    /**
     * Set wifeName
     *
     * @param string $wifeName
     * @return Marriage
     */
    public function setWifeName($wifeName)
    {
        $this->wifeName = $wifeName;

        return $this;
    }

    /**
     * Get wifeName
     *
     * @return string
     */
    public function getWifeName()
    {
        return $this->wifeName;
    }

    /**
     * Set wifeName2
     *
     * @param string $wifeName2
     * @return Marriage
     */
    public function setWifeName2($wifeName2)
    {
        $this->wifeName2 = $wifeName2;

        return $this;
    }

    /**
     * Get wifeName2
     *
     * @return string
     */
    public function getWifeName2()
    {
        return $this->wifeName2;
    }

    /**
     * Set wifeName3
     *
     * @param string $wifeName3
     * @return Marriage
     */
    public function setWifeName3($wifeName3)
    {
        $this->wifeName3 = $wifeName3;

        return $this;
    }

    /**
     * Get wifeName3
     *
     * @return string
     */
    public function getWifeName3()
    {
        return $this->wifeName3;
    }

    /**
     * Set wifeAge
     *
     * @param integer $wifeAge
     * @return Marriage
     */
    public function setWifeAge($wifeAge)
    {
        $this->wifeAge = $wifeAge;

        return $this;
    }

    /**
     * Get wifeAge
     *
     * @return integer
     */
    public function getWifeAge()
    {
        return $this->wifeAge;
    }

    /**
     * Set wifeStatus
     *
     * @param integer $wifeStatus
     * @return Marriage
     */
    public function setWifeStatus($wifeStatus)
    {
        $this->wifeStatus = $wifeStatus;

        return $this;
    }

    /**
     * Get wifeStatus
     *
     * @return integer
     */
    public function getWifeStatus()
    {
        return $this->wifeStatus;
    }

    /**
     * Set wifeBirthDate
     *
     * @param \DateTime $wifeBirthDate
     * @return Marriage
     */
    public function setWifeBirthDate($wifeBirthDate)
    {
        $this->wifeBirthDate = $wifeBirthDate;

        return $this;
    }

    /**
     * Get wifeBirthDate
     *
     * @return \DateTime
     */
    public function getWifeBirthDate()
    {
        return $this->wifeBirthDate;
    }

    /**
     * Set wifeBirthPlace
     *
     * @param string $wifeBirthPlace
     * @return Marriage
     */
    public function setWifeBirthPlace($wifeBirthPlace)
    {
        $this->wifeBirthPlace = $wifeBirthPlace;

        return $this;
    }

    /**
     * Get wifeBirthPlace
     *
     * @return string
     */
    public function getWifeBirthPlace()
    {
        return $this->wifeBirthPlace;
    }

    /**
     * Set wifeParish
     *
     * @param string $wifeParish
     * @return Marriage
     */
    public function setWifeParish($wifeParish)
    {
        $this->wifeParish = $wifeParish;

        return $this;
    }

    /**
     * Get wifeParish
     *
     * @return string
     */
    public function getWifeParish()
    {
        return $this->wifeParish;
    }

    /**
     * Set wifeResidence
     *
     * @param string $wifeResidence
     * @return Marriage
     */
    public function setWifeResidence($wifeResidence)
    {
        $this->wifeResidence = $wifeResidence;

        return $this;
    }

    /**
     * Get wifeResidence
     *
     * @return string
     */
    public function getWifeResidence()
    {
        return $this->wifeResidence;
    }

    /**
     * Set wifeProfession
     *
     * @param string $wifeProfession
     * @return Marriage
     */
    public function setWifeProfession($wifeProfession)
    {
        $this->wifeProfession = $wifeProfession;

        return $this;
    }

    /**
     * Get wifeProfession
     *
     * @return string
     */
    public function getWifeProfession()
    {
        return $this->wifeProfession;
    }

    /**
     * Set wifeFatherSurname
     *
     * @param string $wifeFatherSurname
     * @return Marriage
     */
    public function setWifeFatherSurname($wifeFatherSurname)
    {
        $this->wifeFatherSurname = $wifeFatherSurname;

        return $this;
    }

    /**
     * Get wifeFatherSurname
     *
     * @return string
     */
    public function getWifeFatherSurname()
    {
        return $this->wifeFatherSurname;
    }

    /**
     * Set wifeFatherName
     *
     * @param string $wifeFatherName
     * @return Marriage
     */
    public function setWifeFatherName($wifeFatherName)
    {
        $this->wifeFatherName = $wifeFatherName;

        return $this;
    }

    /**
     * Get wifeFatherName
     *
     * @return string
     */
    public function getWifeFatherName()
    {
        return $this->wifeFatherName;
    }

    /**
     * Set wifeFatherName2
     *
     * @param string $wifeFatherName2
     * @return Marriage
     */
    public function setWifeFatherName2($wifeFatherName2)
    {
        $this->wifeFatherName2 = $wifeFatherName2;

        return $this;
    }

    /**
     * Get wifeFatherName2
     *
     * @return string
     */
    public function getWifeFatherName2()
    {
        return $this->wifeFatherName2;
    }

    /**
     * Set wifeFatherName3
     *
     * @param string $wifeFatherName3
     * @return Marriage
     */
    public function setWifeFatherName3($wifeFatherName3)
    {
        $this->wifeFatherName3 = $wifeFatherName3;

        return $this;
    }

    /**
     * Get wifeFatherName3
     *
     * @return string
     */
    public function getWifeFatherName3()
    {
        return $this->wifeFatherName3;
    }

    /**
     * Set wifeFatherAge
     *
     * @param integer $wifeFatherAge
     * @return Marriage
     */
    public function setWifeFatherAge($wifeFatherAge)
    {
        $this->wifeFatherAge = $wifeFatherAge;

        return $this;
    }

    /**
     * Get wifeFatherAge
     *
     * @return integer
     */
    public function getWifeFatherAge()
    {
        return $this->wifeFatherAge;
    }

    /**
     * Set wifeFatherStatus
     *
     * @param integer $wifeFatherStatus
     * @return Marriage
     */
    public function setWifeFatherStatus($wifeFatherStatus)
    {
        $this->wifeFatherStatus = $wifeFatherStatus;

        return $this;
    }

    /**
     * Get wifeFatherStatus
     *
     * @return integer
     */
    public function getWifeFatherStatus()
    {
        return $this->wifeFatherStatus;
    }

    /**
     * Set wifeFatherProfession
     *
     * @param string $wifeFatherProfession
     * @return Marriage
     */
    public function setWifeFatherProfession($wifeFatherProfession)
    {
        $this->wifeFatherProfession = $wifeFatherProfession;

        return $this;
    }

    /**
     * Get wifeFatherProfession
     *
     * @return string
     */
    public function getWifeFatherProfession()
    {
        return $this->wifeFatherProfession;
    }

    /**
     * Set wifeMotherSurname
     *
     * @param string $wifeMotherSurname
     * @return Marriage
     */
    public function setWifeMotherSurname($wifeMotherSurname)
    {
        $this->wifeMotherSurname = $wifeMotherSurname;

        return $this;
    }

    /**
     * Get wifeMotherSurname
     *
     * @return string
     */
    public function getWifeMotherSurname()
    {
        return $this->wifeMotherSurname;
    }

    /**
     * Set wifeMotherName
     *
     * @param string $wifeMotherName
     * @return Marriage
     */
    public function setWifeMotherName($wifeMotherName)
    {
        $this->wifeMotherName = $wifeMotherName;

        return $this;
    }

    /**
     * Get wifeMotherName
     *
     * @return string
     */
    public function getWifeMotherName()
    {
        return $this->wifeMotherName;
    }

    /**
     * Set wifeMotherName2
     *
     * @param string $wifeMotherName2
     * @return Marriage
     */
    public function setWifeMotherName2($wifeMotherName2)
    {
        $this->wifeMotherName2 = $wifeMotherName2;

        return $this;
    }

    /**
     * Get wifeMotherName2
     *
     * @return string
     */
    public function getWifeMotherName2()
    {
        return $this->wifeMotherName2;
    }

    /**
     * Set wifeMotherName3
     *
     * @param string $wifeMotherName3
     * @return Marriage
     */
    public function setWifeMotherName3($wifeMotherName3)
    {
        $this->wifeMotherName3 = $wifeMotherName3;

        return $this;
    }

    /**
     * Get wifeMotherName3
     *
     * @return string
     */
    public function getWifeMotherName3()
    {
        return $this->wifeMotherName3;
    }

    /**
     * Set wifeMotherAge
     *
     * @param integer $wifeMotherAge
     * @return Marriage
     */
    public function setWifeMotherAge($wifeMotherAge)
    {
        $this->wifeMotherAge = $wifeMotherAge;

        return $this;
    }

    /**
     * Get wifeMotherAge
     *
     * @return integer
     */
    public function getWifeMotherAge()
    {
        return $this->wifeMotherAge;
    }

    /**
     * Set wifeMotherStatus
     *
     * @param integer $wifeMotherStatus
     * @return Marriage
     */
    public function setWifeMotherStatus($wifeMotherStatus)
    {
        $this->wifeMotherStatus = $wifeMotherStatus;

        return $this;
    }

    /**
     * Get wifeMotherStatus
     *
     * @return integer
     */
    public function getWifeMotherStatus()
    {
        return $this->wifeMotherStatus;
    }

    /**
     * Set wifeMotherProfession
     *
     * @param string $wifeMotherProfession
     * @return Marriage
     */
    public function setWifeMotherProfession($wifeMotherProfession)
    {
        $this->wifeMotherProfession = $wifeMotherProfession;

        return $this;
    }

    /**
     * Get wifeMotherProfession
     *
     * @return string
     */
    public function getWifeMotherProfession()
    {
        return $this->wifeMotherProfession;
    }

    /**
     * Set marriageDate
     *
     * @param \DateTime $marriageDate
     * @return Marriage
     */
    public function setMarriageDate($marriageDate)
    {
        $this->marriageDate = $marriageDate;

        return $this;
    }

    /**
     * Get marriageDate
     *
     * @return \DateTime
     */
    public function getMarriageDate()
    {
        return $this->marriageDate;
    }

    /**
     * Set marriageTime
     *
     * @param \DateTime $marriageTime
     * @return Marriage
     */
    public function setMarriageTime($marriageTime)
    {
        $this->marriageTime = $marriageTime;

        return $this;
    }

    /**
     * Get marriageTime
     *
     * @return \DateTime
     */
    public function getMarriageTime()
    {
        return $this->marriageTime;
    }

    /**
     * Set registrationDate
     *
     * @param \DateTime $registrationDate
     * @return Marriage
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
     * Set marriagePlace
     *
     * @param string $marriagePlace
     * @return Marriage
     */
    public function setMarriagePlace($marriagePlace)
    {
        $this->marriagePlace = $marriagePlace;

        return $this;
    }

    /**
     * Get marriagePlace
     *
     * @return string
     */
    public function getMarriagePlace()
    {
        return $this->marriagePlace;
    }

    /**
     * Set marriageParish
     *
     * @param string $marriageParish
     * @return Marriage
     */
    public function setMarriageParish($marriageParish)
    {
        $this->marriageParish = $marriageParish;

        return $this;
    }

    /**
     * Get marriageParish
     *
     * @return string
     */
    public function getMarriageParish()
    {
        return $this->marriageParish;
    }

    /**
     * Set notes
     *
     * @param string $notes
     * @return Marriage
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
