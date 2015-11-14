<?php

namespace Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entities\UserOpenids
 */
class UserOpenids
{
    /**
     * @var string $openidUrl
     */
    private $openidUrl;

    /**
     * @var integer $userId
     */
    private $userId;


    /**
     * Get openidUrl
     *
     * @return string 
     */
    public function getOpenidUrl()
    {
        return $this->openidUrl;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     * @return UserOpenids
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
}