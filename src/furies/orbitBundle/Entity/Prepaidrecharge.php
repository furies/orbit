<?php

namespace furies\orbitBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Prepaidrecharge
 *
 * @ORM\Table(name="prepaidrecharge", indexes={@ORM\Index(name="index1", columns={"rechargeid", "rechargedate", "rechargeplanid"}), @ORM\Index(name="fk_customer_recharge_2_idx", columns={"rechargeplanid"}), @ORM\Index(name="fk_prepaidrecharge_circuitid_idx", columns={"circuitid"})})
 * @ORM\Entity
 */
class Prepaidrecharge
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="rechargedate", type="datetime", nullable=false)
     */
    private $rechargedate;

    /**
     * @var string
     *
     * @ORM\Column(name="rechargetype", type="string", length=45, nullable=false)
     */
    private $rechargetype;

    /**
     * @var string
     *
     * @ORM\Column(name="recharge_payment_mode", type="string", length=45, nullable=false)
     */
    private $rechargePaymentMode;

    /**
     * @var string
     *
     * @ORM\Column(name="rechargedby", type="string", length=45, nullable=true)
     */
    private $rechargedby;

    /**
     * @var integer
     *
     * @ORM\Column(name="companyid", type="integer", nullable=true)
     */
    private $companyid;

    /**
     * @var integer
     *
     * @ORM\Column(name="rechargeid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $rechargeid;

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
     * @var \furies\orbitBundle\Entity\PrepaidTariff
     *
     * @ORM\ManyToOne(targetEntity="furies\orbitBundle\Entity\PrepaidTariff")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rechargeplanid", referencedColumnName="idprepaid_tariff")
     * })
     */
    private $rechargeplanid;



    /**
     * Set rechargedate
     *
     * @param \DateTime $rechargedate
     * @return Prepaidrecharge
     */
    public function setRechargedate($rechargedate)
    {
        $this->rechargedate = $rechargedate;

        return $this;
    }

    /**
     * Get rechargedate
     *
     * @return \DateTime 
     */
    public function getRechargedate()
    {
        return $this->rechargedate;
    }

    /**
     * Set rechargetype
     *
     * @param string $rechargetype
     * @return Prepaidrecharge
     */
    public function setRechargetype($rechargetype)
    {
        $this->rechargetype = $rechargetype;

        return $this;
    }

    /**
     * Get rechargetype
     *
     * @return string 
     */
    public function getRechargetype()
    {
        return $this->rechargetype;
    }

    /**
     * Set rechargePaymentMode
     *
     * @param string $rechargePaymentMode
     * @return Prepaidrecharge
     */
    public function setRechargePaymentMode($rechargePaymentMode)
    {
        $this->rechargePaymentMode = $rechargePaymentMode;

        return $this;
    }

    /**
     * Get rechargePaymentMode
     *
     * @return string 
     */
    public function getRechargePaymentMode()
    {
        return $this->rechargePaymentMode;
    }

    /**
     * Set rechargedby
     *
     * @param string $rechargedby
     * @return Prepaidrecharge
     */
    public function setRechargedby($rechargedby)
    {
        $this->rechargedby = $rechargedby;

        return $this;
    }

    /**
     * Get rechargedby
     *
     * @return string 
     */
    public function getRechargedby()
    {
        return $this->rechargedby;
    }

    /**
     * Set companyid
     *
     * @param integer $companyid
     * @return Prepaidrecharge
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
     * Get rechargeid
     *
     * @return integer 
     */
    public function getRechargeid()
    {
        return $this->rechargeid;
    }

    /**
     * Set circuitid
     *
     * @param \furies\orbitBundle\Entity\Prepaidcircuits $circuitid
     * @return Prepaidrecharge
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

    /**
     * Set rechargeplanid
     *
     * @param \furies\orbitBundle\Entity\PrepaidTariff $rechargeplanid
     * @return Prepaidrecharge
     */
    public function setRechargeplanid(\furies\orbitBundle\Entity\PrepaidTariff $rechargeplanid = null)
    {
        $this->rechargeplanid = $rechargeplanid;

        return $this;
    }

    /**
     * Get rechargeplanid
     *
     * @return \furies\orbitBundle\Entity\PrepaidTariff 
     */
    public function getRechargeplanid()
    {
        return $this->rechargeplanid;
    }
}
