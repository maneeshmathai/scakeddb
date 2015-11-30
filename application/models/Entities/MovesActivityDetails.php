<?php

namespace Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entities\MovesActivityDetails
 */
class MovesActivityDetails
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var text $activity
     */
    private $activity;

    /**
     * @var integer $steps
     */
    private $steps;

    /**
     * @var integer $distance
     */
    private $distance;

    /**
     * @var Entities\MovesActivity
     */
    private $movesActivity;


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
     * Set activity
     *
     * @param text $activity
     * @return MovesActivityDetails
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
     * Set steps
     *
     * @param integer $steps
     * @return MovesActivityDetails
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
     * Set distance
     *
     * @param integer $distance
     * @return MovesActivityDetails
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
     * Set movesActivity
     *
     * @param Entities\MovesActivity $movesActivity
     * @return MovesActivityDetails
     */
    public function setMovesActivity(\Entities\MovesActivity $movesActivity = null)
    {
        $this->movesActivity = $movesActivity;
        return $this;
    }

    /**
     * Get movesActivity
     *
     * @return Entities\MovesActivity 
     */
    public function getMovesActivity()
    {
        return $this->movesActivity;
    }
}