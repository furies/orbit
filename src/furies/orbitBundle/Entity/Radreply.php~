<?php

namespace furies\orbitBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Radreply
 *
 * @ORM\Table(name="radreply", indexes={@ORM\Index(name="username", columns={"username"}), @ORM\Index(name="fk_radreply_circuitid_idx", columns={"circuitid"})})
 * @ORM\Entity
 */
class Radreply
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
     * @ORM\Column(name="attribute", type="string", length=64, nullable=false)
     */
    private $attribute;

    /**
     * @var string
     *
     * @ORM\Column(name="op", type="string", length=2, nullable=false)
     */
    private $op;

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="string", length=253, nullable=false)
     */
    private $value;

    /**
     * @var integer
     *
     * @ORM\Column(name="companyid", type="integer", nullable=true)
     */
    private $companyid;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

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
     * @return Radreply
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
     * Set attribute
     *
     * @param string $attribute
     * @return Radreply
     */
    public function setAttribute($attribute)
    {
        $this->attribute = $attribute;

        return $this;
    }

    /**
     * Get attribute
     *
     * @return string 
     */
    public function getAttribute()
    {
        return $this->attribute;
    }

    /**
     * Set op
     *
     * @param string $op
     * @return Radreply
     */
    public function setOp($op)
    {
        $this->op = $op;

        return $this;
    }

    /**
     * Get op
     *
     * @return string 
     */
    public function getOp()
    {
        return $this->op;
    }

    /**
     * Set value
     *
     * @param string $value
     * @return Radreply
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return string 
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set companyid
     *
     * @param integer $companyid
     * @return Radreply
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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set circuitid
     *
     * @param \furies\orbitBundle\Entity\Prepaidcircuits $circuitid
     * @return Radreply
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
