<?php

namespace furies\orbitBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Supportedrouters
 *
 * @ORM\Table(name="supportedrouters")
 * @ORM\Entity
 */
class Supportedrouters
{
    /**
     * @var string
     *
     * @ORM\Column(name="routername", type="string", length=45, nullable=false)
     */
    private $routername;

    /**
     * @var string
     *
     * @ORM\Column(name="routerdesc", type="string", length=45, nullable=true)
     */
    private $routerdesc;

    /**
     * @var integer
     *
     * @ORM\Column(name="companyid", type="integer", nullable=true)
     */
    private $companyid;

    /**
     * @var integer
     *
     * @ORM\Column(name="routerid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $routerid;



    /**
     * Set routername
     *
     * @param string $routername
     * @return Supportedrouters
     */
    public function setRoutername($routername)
    {
        $this->routername = $routername;

        return $this;
    }

    /**
     * Get routername
     *
     * @return string 
     */
    public function getRoutername()
    {
        return $this->routername;
    }

    /**
     * Set routerdesc
     *
     * @param string $routerdesc
     * @return Supportedrouters
     */
    public function setRouterdesc($routerdesc)
    {
        $this->routerdesc = $routerdesc;

        return $this;
    }

    /**
     * Get routerdesc
     *
     * @return string 
     */
    public function getRouterdesc()
    {
        return $this->routerdesc;
    }

    /**
     * Set companyid
     *
     * @param integer $companyid
     * @return Supportedrouters
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
     * Get routerid
     *
     * @return integer 
     */
    public function getRouterid()
    {
        return $this->routerid;
    }
}
