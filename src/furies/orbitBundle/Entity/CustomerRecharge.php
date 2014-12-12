<?php

namespace furies\orbitBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CustomerRecharge
 *
 * @ORM\Table(name="customer_recharge", indexes={@ORM\Index(name="fk_customer_recharge_1_idx", columns={"customerid"}), @ORM\Index(name="index1", columns={"rechargeid", "rechargedate", "customerid", "rechargeplanid"}), @ORM\Index(name="fk_customer_recharge_2_idx", columns={"rechargeplanid"})})
 * @ORM\Entity
 */
class CustomerRecharge
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
     * @ORM\Column(name="rechargeid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $rechargeid;

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
     * @var \furies\orbitBundle\Entity\Customers
     *
     * @ORM\ManyToOne(targetEntity="furies\orbitBundle\Entity\Customers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="customerid", referencedColumnName="customers_id")
     * })
     */
    private $customerid;



    /**
     * Set rechargedate
     *
     * @param \DateTime $rechargedate
     * @return CustomerRecharge
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
     * @return CustomerRecharge
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
     * @return CustomerRecharge
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
     * @return CustomerRecharge
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
     * Get rechargeid
     *
     * @return integer 
     */
    public function getRechargeid()
    {
        return $this->rechargeid;
    }

    /**
     * Set rechargeplanid
     *
     * @param \furies\orbitBundle\Entity\PrepaidTariff $rechargeplanid
     * @return CustomerRecharge
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

    /**
     * Set customerid
     *
     * @param \furies\orbitBundle\Entity\Customers $customerid
     * @return CustomerRecharge
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
