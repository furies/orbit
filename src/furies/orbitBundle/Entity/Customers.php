<?php

namespace furies\orbitBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Customers
 *
 * @ORM\Table(name="customers")
 * @ORM\Entity
 */
class Customers
{
    /**
     * @var integer
     *
     * @ORM\Column(name="crn_no", type="integer", nullable=true)
     */
    private $crnNo;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=10, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=200, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="doorno", type="string", length=10, nullable=true)
     */
    private $doorno;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=200, nullable=true)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="address1", type="string", length=200, nullable=true)
     */
    private $address1;

    /**
     * @var string
     *
     * @ORM\Column(name="address2", type="string", length=200, nullable=true)
     */
    private $address2;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=200, nullable=true)
     */
    private $city;

    /**
     * @var integer
     *
     * @ORM\Column(name="pin", type="integer", nullable=true)
     */
    private $pin;

    /**
     * @var string
     *
     * @ORM\Column(name="cust_type", type="string", length=10, nullable=false)
     */
    private $custType;

    /**
     * @var string
     *
     * @ORM\Column(name="mobile", type="string", length=15, nullable=true)
     */
    private $mobile;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=200, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="cust_category", type="string", length=10, nullable=false)
     */
    private $custCategory;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="doe", type="date", nullable=false)
     */
    private $doe;

    /**
     * @var integer
     *
     * @ORM\Column(name="live", type="smallint", nullable=false)
     */
    private $live;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="string", length=45, nullable=true)
     */
    private $comment;

    /**
     * @var integer
     *
     * @ORM\Column(name="createdby", type="integer", nullable=true)
     */
    private $createdby;

    /**
     * @var integer
     *
     * @ORM\Column(name="modifiedby", type="integer", nullable=true)
     */
    private $modifiedby;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="insertdate", type="datetime", nullable=true)
     */
    private $insertdate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="modifieddate", type="datetime", nullable=true)
     */
    private $modifieddate;

    /**
     * @var integer
     *
     * @ORM\Column(name="companyid", type="integer", nullable=true)
     */
    private $companyid;

    /**
     * @var integer
     *
     * @ORM\Column(name="customers_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $customersId;



    /**
     * Set crnNo
     *
     * @param integer $crnNo
     * @return Customers
     */
    public function setCrnNo($crnNo)
    {
        $this->crnNo = $crnNo;

        return $this;
    }

    /**
     * Get crnNo
     *
     * @return integer 
     */
    public function getCrnNo()
    {
        return $this->crnNo;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Customers
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Customers
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set doorno
     *
     * @param string $doorno
     * @return Customers
     */
    public function setDoorno($doorno)
    {
        $this->doorno = $doorno;

        return $this;
    }

    /**
     * Get doorno
     *
     * @return string 
     */
    public function getDoorno()
    {
        return $this->doorno;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return Customers
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set address1
     *
     * @param string $address1
     * @return Customers
     */
    public function setAddress1($address1)
    {
        $this->address1 = $address1;

        return $this;
    }

    /**
     * Get address1
     *
     * @return string 
     */
    public function getAddress1()
    {
        return $this->address1;
    }

    /**
     * Set address2
     *
     * @param string $address2
     * @return Customers
     */
    public function setAddress2($address2)
    {
        $this->address2 = $address2;

        return $this;
    }

    /**
     * Get address2
     *
     * @return string 
     */
    public function getAddress2()
    {
        return $this->address2;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return Customers
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set pin
     *
     * @param integer $pin
     * @return Customers
     */
    public function setPin($pin)
    {
        $this->pin = $pin;

        return $this;
    }

    /**
     * Get pin
     *
     * @return integer 
     */
    public function getPin()
    {
        return $this->pin;
    }

    /**
     * Set custType
     *
     * @param string $custType
     * @return Customers
     */
    public function setCustType($custType)
    {
        $this->custType = $custType;

        return $this;
    }

    /**
     * Get custType
     *
     * @return string 
     */
    public function getCustType()
    {
        return $this->custType;
    }

    /**
     * Set mobile
     *
     * @param string $mobile
     * @return Customers
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;

        return $this;
    }

    /**
     * Get mobile
     *
     * @return string 
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Customers
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set custCategory
     *
     * @param string $custCategory
     * @return Customers
     */
    public function setCustCategory($custCategory)
    {
        $this->custCategory = $custCategory;

        return $this;
    }

    /**
     * Get custCategory
     *
     * @return string 
     */
    public function getCustCategory()
    {
        return $this->custCategory;
    }

    /**
     * Set doe
     *
     * @param \DateTime $doe
     * @return Customers
     */
    public function setDoe($doe)
    {
        $this->doe = $doe;

        return $this;
    }

    /**
     * Get doe
     *
     * @return \DateTime 
     */
    public function getDoe()
    {
        return $this->doe;
    }

    /**
     * Set live
     *
     * @param integer $live
     * @return Customers
     */
    public function setLive($live)
    {
        $this->live = $live;

        return $this;
    }

    /**
     * Get live
     *
     * @return integer 
     */
    public function getLive()
    {
        return $this->live;
    }

    /**
     * Set comment
     *
     * @param string $comment
     * @return Customers
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string 
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set createdby
     *
     * @param integer $createdby
     * @return Customers
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
     * Set modifiedby
     *
     * @param integer $modifiedby
     * @return Customers
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
     * Set insertdate
     *
     * @param \DateTime $insertdate
     * @return Customers
     */
    public function setInsertdate($insertdate)
    {
        $this->insertdate = $insertdate;

        return $this;
    }

    /**
     * Get insertdate
     *
     * @return \DateTime 
     */
    public function getInsertdate()
    {
        return $this->insertdate;
    }

    /**
     * Set modifieddate
     *
     * @param \DateTime $modifieddate
     * @return Customers
     */
    public function setModifieddate($modifieddate)
    {
        $this->modifieddate = $modifieddate;

        return $this;
    }

    /**
     * Get modifieddate
     *
     * @return \DateTime 
     */
    public function getModifieddate()
    {
        return $this->modifieddate;
    }

    /**
     * Set companyid
     *
     * @param integer $companyid
     * @return Customers
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
     * Get customersId
     *
     * @return integer 
     */
    public function getCustomersId()
    {
        return $this->customersId;
    }
}
