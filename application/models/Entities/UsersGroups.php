<?php

namespace Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entities\UsersGroups
 */
class UsersGroups
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var Entities\Groups
     */
    private $group;

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
     * Set group
     *
     * @param Entities\Groups $group
     * @return UsersGroups
     */
    public function setGroup(\Entities\Groups $group = null)
    {
        $this->group = $group;
        return $this;
    }

    /**
     * Get group
     *
     * @return Entities\Groups 
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * Set user
     *
     * @param Entities\Users $user
     * @return UsersGroups
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