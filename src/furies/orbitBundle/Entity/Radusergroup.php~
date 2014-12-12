<?php

namespace furies\orbitBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Radusergroup
 *
 * @ORM\Table(name="radusergroup", indexes={@ORM\Index(name="username", columns={"username"}), @ORM\Index(name="fk_radusergroup_1_idx", columns={"circuitid"})})
 * @ORM\Entity
 */
class Radusergroup
{
    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=64, nullable=false)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="groupname", type="string", length=64, nullable=false)
     */
    private $groupname;

    /**
     * @var integer
     *
     * @ORM\Column(name="priority", type="integer", nullable=false)
     */
    private $priority;

    /**
     * @var integer
     *
     * @ORM\Column(name="companyid", type="integer", nullable=true)
     */
    private $companyid;

    /**
     * @var integer
     *
     * @ORM\Column(name="radusergroupid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $radusergroupid;

    /**
     * @var \furies\orbitBundle\Entity\Prepaidcircuits
     *
     * @ORM\ManyToOne(targetEntity="furies\orbitBundle\Entity\Prepaidcircuits")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="circuitid", referencedColumnName="circuitid")
     * })
     */
    private $circuitid;



    /**
     * Set username
     *
     * @param string $username
     * @return Radusergroup
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set groupname
     *
     * @param string $groupname
     * @return Radusergroup
     */
    public function setGroupname($groupname)
    {
        $this->groupname = $groupname;

        return $this;
    }

    /**
     * Get groupname
     *
     * @return string 
     */
    public function getGroupname()
    {
        return $this->groupname;
    }

    /**
     * Set priority
     *
     * @param integer $priority
     * @return Radusergroup
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;

        return $this;
    }

    /**
     * Get priority
     *
     * @return integer 
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Set companyid
     *
     * @param integer $companyid
     * @return Radusergroup
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
     * Get radusergroupid
     *
     * @return integer 
     */
    public function getRadusergroupid()
    {
        return $this->radusergroupid;
    }

    /**
     * Set circuitid
     *
     * @param \furies\orbitBundle\Entity\Prepaidcircuits $circuitid
     * @return Radusergroup
     */
    public function setCircuitid(\furies\orbitBundle\Entity\Prepaidcircuits $circuitid = null)
    {
        $this->circuitid = $circuitid;

        return $this;
    }

    /**
     * Get circuitid
     *
     * @return \furies\orbitBundle\Entity\Prepaidcircuits 
     */
    public function getCircuitid()
    {
        return $this->circuitid;
    }
}
