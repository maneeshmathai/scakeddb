<?php

namespace Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entities\Moves
 */
class Moves
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var text $accessToken
     */
    private $accessToken;

    /**
     * @var integer $expiresIn
     */
    private $expiresIn;

    /**
     * @var text $refreshToken
     */
    private $refreshToken;

    /**
     * @var text $movesUserId
     */
    private $movesUserId;

    /**
     * @var Entities\UserApps
     */
    private $userApps;


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
     * Set accessToken
     *
     * @param text $accessToken
     * @return Moves
     */
    public function setAccessToken($accessToken)
    {
        $this->accessToken = $accessToken;
        return $this;
    }

    /**
     * Get accessToken
     *
     * @return text 
     */
    public function getAccessToken()
    {
        return $this->accessToken;
    }

    /**
     * Set expiresIn
     *
     * @param integer $expiresIn
     * @return Moves
     */
    public function setExpiresIn($expiresIn)
    {
        $this->expiresIn = $expiresIn;
        return $this;
    }

    /**
     * Get expiresIn
     *
     * @return integer 
     */
    public function getExpiresIn()
    {
        return $this->expiresIn;
    }

    /**
     * Set refreshToken
     *
     * @param text $refreshToken
     * @return Moves
     */
    public function setRefreshToken($refreshToken)
    {
        $this->refreshToken = $refreshToken;
        return $this;
    }

    /**
     * Get refreshToken
     *
     * @return text 
     */
    public function getRefreshToken()
    {
        return $this->refreshToken;
    }

    /**
     * Set movesUserId
     *
     * @param text $movesUserId
     * @return Moves
     */
    public function setMovesUserId($movesUserId)
    {
        $this->movesUserId = $movesUserId;
        return $this;
    }

    /**
     * Get movesUserId
     *
     * @return text 
     */
    public function getMovesUserId()
    {
        return $this->movesUserId;
    }

    /**
     * Set userApps
     *
     * @param Entities\UserApps $userApps
     * @return Moves
     */
    public function setUserApps(\Entities\UserApps $userApps = null)
    {
        $this->userApps = $userApps;
        return $this;
    }

    /**
     * Get userApps
     *
     * @return Entities\UserApps 
     */
    public function getUserApps()
    {
        return $this->userApps;
    }
}