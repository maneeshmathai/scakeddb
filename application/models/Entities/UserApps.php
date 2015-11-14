<?php

namespace Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entities\UserApps
 */
class UserApps
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var text $name
     */
    private $name;

    /**
     * @var text $code
     */
    private $code;

    /**
     * @var Entities\Users
     */
    private $user;


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
     * Set name
     *
     * @param text $name
     * @return UserApps
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Get name
     *
     * @return text 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set code
     *
     * @param text $code
     * @return UserApps
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Get code
     *
     * @return text 
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set user
     *
     * @param Entities\Users $user
     * @return UserApps
     */
    public function setUser(\Entities\Users $user = null)
    {
        $this->user = $user;
        return $this;
    }

    /**
     * Get user
     *
     * @return Entities\Users 
     */
    public function getUser()
    {
        return $this->user;
    }
}