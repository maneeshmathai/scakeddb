<?php

namespace Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entities\MovesActivity
 */
class MovesActivity
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var integer $steps
     */
    private $steps;

    /**
     * @var text $activity
     */
    private $activity;

    /**
     * @var date $dateUpdated
     */
    private $dateUpdated;

    /**
     * @var integer $distance
     */
    private $distance;

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
     * Set steps
     *
     * @param integer $steps
     * @return MovesActivity
     */
    public function setSteps($steps)
    {
        $this->steps = $steps;
        return $this;
    }

    /**
     * Get steps
     *
     * @return integer 
     */
    public function getSteps()
    {
        return $this->steps;
    }

    /**
     * Set activity
     *
     * @param text $activity
     * @return MovesActivity
     */
    public function setActivity($activity)
    {
        $this->activity = $activity;
        return $this;
    }

    /**
     * Get activity
     *
     * @return text 
     */
    public function getActivity()
    {
        return $this->activity;
    }

    /**
     * Set dateUpdated
     *
     * @param date $dateUpdated
     * @return MovesActivity
     */
    public function setDateUpdated($dateUpdated)
    {
        $this->dateUpdated = $dateUpdated;
        return $this;
    }

    /**
     * Get dateUpdated
     *
     * @return date 
     */
    public function getDateUpdated()
    {
        return $this->dateUpdated;
    }

    /**
     * Set distance
     *
     * @param integer $distance
     * @return MovesActivity
     */
    public function setDistance($distance)
    {
        $this->distance = $distance;
        return $this;
    }

    /**
     * Get distance
     *
     * @return integer 
     */
    public function getDistance()
    {
        return $this->distance;
    }

    /**
     * Set userApps
     *
     * @param Entities\UserApps $userApps
     * @return MovesActivity
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