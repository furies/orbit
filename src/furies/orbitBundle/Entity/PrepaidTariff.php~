<?php

namespace furies\orbitBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PrepaidTariff
 *
 * @ORM\Table(name="prepaid_tariff")
 * @ORM\Entity
 */
class PrepaidTariff
{
    /**
     * @var string
     *
     * @ORM\Column(name="prepaid_tariff_name", type="string", length=45, nullable=false)
     */
    private $prepaidTariffName;

    /**
     * @var integer
     *
     * @ORM\Column(name="prepaid_tariff_validitydays", type="integer", nullable=false)
     */
    private $prepaidTariffValiditydays;

    /**
     * @var float
     *
     * @ORM\Column(name="prepaid_tariff_usagelimit", type="float", precision=10, scale=0, nullable=false)
     */
    private $prepaidTariffUsagelimit;

    /**
     * @var float
     *
     * @ORM\Column(name="prepaid_tariff_downloadspeed", type="float", precision=10, scale=0, nullable=false)
     */
    private $prepaidTariffDownloadspeed;

    /**
     * @var float
     *
     * @ORM\Column(name="prepaid_tariff_capdownloadspeed", type="float", precision=10, scale=0, nullable=false)
     */
    private $prepaidTariffCapdownloadspeed;

    /**
     * @var float
     *
     * @ORM\Column(name="prepaid_tariff_uploadspeed", type="float", precision=10, scale=0, nullable=false)
     */
    private $prepaidTariffUploadspeed;

    /**
     * @var float
     *
     * @ORM\Column(name="prepaid_tariff_capuploadspeed", type="float", precision=10, scale=0, nullable=false)
     */
    private $prepaidTariffCapuploadspeed;

    /**
     * @var boolean
     *
     * @ORM\Column(name="prepaid_tariff_active", type="boolean", nullable=false)
     */
    private $prepaidTariffActive;

    /**
     * @var boolean
     *
     * @ORM\Column(name="prepaid_tariff_billafterlimit", type="boolean", nullable=false)
     */
    private $prepaidTariffBillafterlimit;

    /**
     * @var float
     *
     * @ORM\Column(name="prepaid_tariff_amountpermb", type="float", precision=10, scale=0, nullable=true)
     */
    private $prepaidTariffAmountpermb;

    /**
     * @var float
     *
     * @ORM\Column(name="prepaid_tariff_amount", type="float", precision=10, scale=0, nullable=true)
     */
    private $prepaidTariffAmount;

    /**
     * @var integer
     *
     * @ORM\Column(name="companyid", type="integer", nullable=true)
     */
    private $companyid;

    /**
     * @var integer
     *
     * @ORM\Column(name="idprepaid_tariff", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idprepaidTariff;



    /**
     * Set prepaidTariffName
     *
     * @param string $prepaidTariffName
     * @return PrepaidTariff
     */
    public function setPrepaidTariffName($prepaidTariffName)
    {
        $this->prepaidTariffName = $prepaidTariffName;

        return $this;
    }

    /**
     * Get prepaidTariffName
     *
     * @return string 
     */
    public function getPrepaidTariffName()
    {
        return $this->prepaidTariffName;
    }

    /**
     * Set prepaidTariffValiditydays
     *
     * @param integer $prepaidTariffValiditydays
     * @return PrepaidTariff
     */
    public function setPrepaidTariffValiditydays($prepaidTariffValiditydays)
    {
        $this->prepaidTariffValiditydays = $prepaidTariffValiditydays;

        return $this;
    }

    /**
     * Get prepaidTariffValiditydays
     *
     * @return integer 
     */
    public function getPrepaidTariffValiditydays()
    {
        return $this->prepaidTariffValiditydays;
    }

    /**
     * Set prepaidTariffUsagelimit
     *
     * @param float $prepaidTariffUsagelimit
     * @return PrepaidTariff
     */
    public function setPrepaidTariffUsagelimit($prepaidTariffUsagelimit)
    {
        $this->prepaidTariffUsagelimit = $prepaidTariffUsagelimit;

        return $this;
    }

    /**
     * Get prepaidTariffUsagelimit
     *
     * @return float 
     */
    public function getPrepaidTariffUsagelimit()
    {
        return $this->prepaidTariffUsagelimit;
    }

    /**
     * Set prepaidTariffDownloadspeed
     *
     * @param float $prepaidTariffDownloadspeed
     * @return PrepaidTariff
     */
    public function setPrepaidTariffDownloadspeed($prepaidTariffDownloadspeed)
    {
        $this->prepaidTariffDownloadspeed = $prepaidTariffDownloadspeed;

        return $this;
    }

    /**
     * Get prepaidTariffDownloadspeed
     *
     * @return float 
     */
    public function getPrepaidTariffDownloadspeed()
    {
        return $this->prepaidTariffDownloadspeed;
    }

    /**
     * Set prepaidTariffCapdownloadspeed
     *
     * @param float $prepaidTariffCapdownloadspeed
     * @return PrepaidTariff
     */
    public function setPrepaidTariffCapdownloadspeed($prepaidTariffCapdownloadspeed)
    {
        $this->prepaidTariffCapdownloadspeed = $prepaidTariffCapdownloadspeed;

        return $this;
    }

    /**
     * Get prepaidTariffCapdownloadspeed
     *
     * @return float 
     */
    public function getPrepaidTariffCapdownloadspeed()
    {
        return $this->prepaidTariffCapdownloadspeed;
    }

    /**
     * Set prepaidTariffUploadspeed
     *
     * @param float $prepaidTariffUploadspeed
     * @return PrepaidTariff
     */
    public function setPrepaidTariffUploadspeed($prepaidTariffUploadspeed)
    {
        $this->prepaidTariffUploadspeed = $prepaidTariffUploadspeed;

        return $this;
    }

    /**
     * Get prepaidTariffUploadspeed
     *
     * @return float 
     */
    public function getPrepaidTariffUploadspeed()
    {
        return $this->prepaidTariffUploadspeed;
    }

    /**
     * Set prepaidTariffCapuploadspeed
     *
     * @param float $prepaidTariffCapuploadspeed
     * @return PrepaidTariff
     */
    public function setPrepaidTariffCapuploadspeed($prepaidTariffCapuploadspeed)
    {
        $this->prepaidTariffCapuploadspeed = $prepaidTariffCapuploadspeed;

        return $this;
    }

    /**
     * Get prepaidTariffCapuploadspeed
     *
     * @return float 
     */
    public function getPrepaidTariffCapuploadspeed()
    {
        return $this->prepaidTariffCapuploadspeed;
    }

    /**
     * Set prepaidTariffActive
     *
     * @param boolean $prepaidTariffActive
     * @return PrepaidTariff
     */
    public function setPrepaidTariffActive($prepaidTariffActive)
    {
        $this->prepaidTariffActive = $prepaidTariffActive;

        return $this;
    }

    /**
     * Get prepaidTariffActive
     *
     * @return boolean 
     */
    public function getPrepaidTariffActive()
    {
        return $this->prepaidTariffActive;
    }

    /**
     * Set prepaidTariffBillafterlimit
     *
     * @param boolean $prepaidTariffBillafterlimit
     * @return PrepaidTariff
     */
    public function setPrepaidTariffBillafterlimit($prepaidTariffBillafterlimit)
    {
        $this->prepaidTariffBillafterlimit = $prepaidTariffBillafterlimit;

        return $this;
    }

    /**
     * Get prepaidTariffBillafterlimit
     *
     * @return boolean 
     */
    public function getPrepaidTariffBillafterlimit()
    {
        return $this->prepaidTariffBillafterlimit;
    }

    /**
     * Set prepaidTariffAmountpermb
     *
     * @param float $prepaidTariffAmountpermb
     * @return PrepaidTariff
     */
    public function setPrepaidTariffAmountpermb($prepaidTariffAmountpermb)
    {
        $this->prepaidTariffAmountpermb = $prepaidTariffAmountpermb;

        return $this;
    }

    /**
     * Get prepaidTariffAmountpermb
     *
     * @return float 
     */
    public function getPrepaidTariffAmountpermb()
    {
        return $this->prepaidTariffAmountpermb;
    }

    /**
     * Set prepaidTariffAmount
     *
     * @param float $prepaidTariffAmount
     * @return PrepaidTariff
     */
    public function setPrepaidTariffAmount($prepaidTariffAmount)
    {
        $this->prepaidTariffAmount = $prepaidTariffAmount;

        return $this;
    }

    /**
     * Get prepaidTariffAmount
     *
     * @return float 
     */
    public function getPrepaidTariffAmount()
    {
        return $this->prepaidTariffAmount;
    }

    /**
     * Set companyid
     *
     * @param integer $companyid
     * @return PrepaidTariff
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
     * Get idprepaidTariff
     *
     * @return integer 
     */
    public function getIdprepaidTariff()
    {
        return $this->idprepaidTariff;
    }
}
