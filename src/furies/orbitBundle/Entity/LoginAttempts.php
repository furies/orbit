<?php

namespace furies\orbitBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LoginAttempts
 *
 * @ORM\Table(name="login_attempts")
 * @ORM\Entity
 */
class LoginAttempts
{
    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     */
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="time", type="string", length=30, nullable=false)
     */
    private $time;

    /**
     * @var integer
     *
     * @ORM\Column(name="companyid", type="integer", nullable=true)
     */
    private $companyid;

    /**
     * @var integer
     *
     * @ORM\Column(name="login_attemptsid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $loginAttemptsid;



    /**
     * Set userId
     *
     * @param integer $userId
     * @return LoginAttempts
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return integer 
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set time
     *
     * @param string $time
     * @return LoginAttempts
     */
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * Get time
     *
     * @return string 
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Set companyid
     *
     * @param integer $companyid
     * @return LoginAttempts
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
     * Get loginAttemptsid
     *
     * @return integer 
     */
    public function getLoginAttemptsid()
    {
        return $this->loginAttemptsid;
    }
}
