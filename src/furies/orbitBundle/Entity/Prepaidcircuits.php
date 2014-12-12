<?php

namespace furies\orbitBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Prepaidcircuits
 *
 * @ORM\Table(name="prepaidcircuits", indexes={@ORM\Index(name="fk_prepaidcircuits_1_idx", columns={"customerid"}), @ORM\Index(name="fk_prepaidcircuits_2_idx", columns={"routerid"})})
 * @ORM\Entity
 */
class Prepaidcircuits
{
    /**
     * @var string
     *
     * @ORM\Column(name="contactperson", type="string", length=200, nullable=true)
     */
    private $contactperson;

    /**
     * @var string
     *
     * @ORM\Column(name="contactmobile", type="string", length=45, nullable=true)
     */
    private $contactmobile;

    /**
     * @var string
     *
     * @ORM\Column(name="contactemail", type="string", length=200, nullable=true)
     */
    private $contactemail;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="startdate", type="datetime", nullable=true)
     */
    private $startdate;

    /**
     * @var string
     *
     * @ORM\Column(name="noofstaticips", type="string", length=150, nullable=true)
     */
    private $noofstaticips;

    /**
     * @var string
     *
     * @ORM\Column(name="staticipaddress", type="string", length=150, nullable=true)
     */
    private $staticipaddress;

    /**
     * @var integer
     *
     * @ORM\Column(name="createdby", type="integer", nullable=true)
     */
    private $createdby;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createddate", type="datetime", nullable=true)
     */
    private $createddate;

    /**
     * @var integer
     *
     * @ORM\Column(name="modifiedby", type="integer", nullable=true)
     */
    private $modifiedby;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="modifieddatetime", type="datetime", nullable=true)
     */
    private $modifieddatetime;

    /**
     * @var integer
     *
     * @ORM\Column(name="companyid", type="integer", nullable=true)
     */
    private $companyid;

    /**
     * @var integer
     *
     * @ORM\Column(name="circuitid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $circuitid;

    /**
     * @var \furies\orbitBundle\Entity\Supportedrouters
     *
     * @ORM\ManyToOne(targetEntity="furies\orbitBundle\Entity\Supportedrouters")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="routerid", referencedColumnName="routerid")
     * })
     */
    private $routerid;

    /**
     * @var \furies\orbitBundle\Entity\Customers
     *
     * @ORM\ManyToOne(targetEntity="furies\orbitBundle\Entity\Customers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="customerid", referencedColumnName="customers_id")
     * })
     */
    private $customerid;



    /**
     * Set contactperson
     *
     * @param string $contactperson
     * @return Prepaidcircuits
     */
    public function setContactperson($contactperson)
    {
        $this->contactperson = $contactperson;

        return $this;
    }

    /**
     * Get contactperson
     *
     * @return string 
     */
    public function getContactperson()
    {
        return $this->contactperson;
    }

    /**
     * Set contactmobile
     *
     * @param string $contactmobile
     * @return Prepaidcircuits
     */
    public function setContactmobile($contactmobile)
    {
        $this->contactmobile = $contactmobile;

        return $this;
    }

    /**
     * Get contactmobile
     *
     * @return string 
     */
    public function getContactmobile()
    {
        return $this->contactmobile;
    }

    /**
     * Set contactemail
     *
     * @param string $contactemail
     * @return Prepaidcircuits
     */
    public function setContactemail($contactemail)
    {
        $this->contactemail = $contactemail;

        return $this;
    }

    /**
     * Get contactemail
     *
     * @return string 
     */
    public function getContactemail()
    {
        return $this->contactemail;
    }

    /**
     * Set startdate
     *
     * @param \DateTime $startdate
     * @return Prepaidcircuits
     */
    public function setStartdate($startdate)
    {
        $this->startdate = $startdate;

        return $this;
    }

    /**
     * Get startdate
     *
     * @return \DateTime 
     */
    public function getStartdate()
    {
        return $this->startdate;
    }

    /**
     * Set noofstaticips
     *
     * @param string $noofstaticips
     * @return Prepaidcircuits
     */
    public function setNoofstaticips($noofstaticips)
    {
        $this->noofstaticips = $noofstaticips;

        return $this;
    }

    /**
     * Get noofstaticips
     *
     * @return string 
     */
    public function getNoofstaticips()
    {
        return $this->noofstaticips;
    }

    /**
     * Set staticipaddress
     *
     * @param string $staticipaddress
     * @return Prepaidcircuits
     */
    public function setStaticipaddress($staticipaddress)
    {
        $this->staticipaddress = $staticipaddress;

        return $this;
    }

    /**
     * Get staticipaddress
     *
     * @return string 
     */
    public function getStaticipaddress()
    {
        return $this->staticipaddress;
    }

    /**
     * Set createdby
     *
     * @param integer $createdby
     * @return Prepaidcircuits
     */
    public function setCreatedby($createdby)
    {
        $this->createdby = $createdby;

        return $this;
    }

    /**
     * Get createdby
     *
     * @return integer 
     */
    public function getCreatedby()
    {
        return $this->createdby;
    }

    /**
     * Set createddate
     *
     * @param \DateTime $createddate
     * @return Prepaidcircuits
     */
    public function setCreateddate($createddate)
    {
        $this->createddate = $createddate;

        return $this;
    }

    /**
     * Get createddate
     *
     * @return \DateTime 
     */
    public function getCreateddate()
    {
        return $this->createddate;
    }

    /**
     * Set modifiedby
     *
     * @param integer $modifiedby
     * @return Prepaidcircuits
     */
    public function setModifiedby($modifiedby)
    {
        $this->modifiedby = $modifiedby;

        return $this;
    }

    /**
     * Get modifiedby
     *
     * @return integer 
     */
    public function getModifiedby()
    {
        return $this->modifiedby;
    }

    /**
     * Set modifieddatetime
     *
     * @param \DateTime $modifieddatetime
     * @return Prepaidcircuits
     */
    public function setModifieddatetime($modifieddatetime)
    {
        $this->modifieddatetime = $modifieddatetime;

        return $this;
    }

    /**
     * Get modifieddatetime
     *
     * @return \DateTime 
     */
    public function getModifieddatetime()
    {
        return $this->modifieddatetime;
    }

    /**
     * Set companyid
     *
     * @param integer $companyid
     * @return Prepaidcircuits
     */
    public function setCompanyid($companyid)
    {
        $this->companyid = $companyid;

        return $this;
    }

    /**
     * Get companyid
     *
     * @return integer 
     */
    public function getCompanyid()
    {
        return $this->companyid;
    }

    /**
     * Get circuitid
     *
     * @return integer 
     */
    public function getCircuitid()
    {
        return $this->circuitid;
    }

    /**
     * Set routerid
     *
     * @param \furies\orbitBundle\Entity\Supportedrouters $routerid
     * @return Prepaidcircuits
     */
    public function setRouterid(\furies\orbitBundle\Entity\Supportedrouters $routerid = null)
    {
        $this->routerid = $routerid;

        return $this;
    }

    /**
     * Get routerid
     *
     * @return \furies\orbitBundle\Entity\Supportedrouters 
     */
    public function getRouterid()
    {
        return $this->routerid;
    }

    /**
     * Set customerid
     *
     * @param \furies\orbitBundle\Entity\Customers $customerid
     * @return Prepaidcircuits
     */
    public function setCustomerid(\furies\orbitBundle\Entity\Customers $customerid = null)
    {
        $this->customerid = $customerid;

        return $this;
    }

    /**
     * Get customerid
     *
     * @return \furies\orbitBundle\Entity\Customers 
     */
    public function getCustomerid()
    {
        return $this->customerid;
    }
}
