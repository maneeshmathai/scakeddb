<?php

namespace Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entities\LoginAttempts
 */
class LoginAttempts
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $ipAddress
     */
    private $ipAddress;

    /**
     * @var string $login
     */
    private $login;

    /**
     * @var integer $time
     */
    private $time;


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
     * Set ipAddress
     *
     * @param string $ipAddress
     * @return LoginAttempts
     */
    public function setIpAddress($ipAddress)
    {
        $this->ipAddress = $ipAddress;
        return $this;
    }

    /**
     * Get ipAddress
     *
     * @return string 
     */
    public function getIpAddress()
    {
        return $this->ipAddress;
    }

    /**
     * Set login
     *
     * @param string $login
     * @return LoginAttempts
     */
    public function setLogin($login)
    {
        $this->login = $login;
        return $this;
    }

    /**
     * Get login
     *
     * @return string 
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set time
     *
     * @param integer $time
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
     * @return integer 
     */
    public function getTime()
    {
        return $this->time;
    }
}