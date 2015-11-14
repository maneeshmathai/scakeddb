<?php

namespace Proxies\__CG__\Entities;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Users extends \Entities\Users implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function setIpAddress($ipAddress)
    {
        $this->__load();
        return parent::setIpAddress($ipAddress);
    }

    public function getIpAddress()
    {
        $this->__load();
        return parent::getIpAddress();
    }

    public function setUsername($username)
    {
        $this->__load();
        return parent::setUsername($username);
    }

    public function getUsername()
    {
        $this->__load();
        return parent::getUsername();
    }

    public function setPassword($password)
    {
        $this->__load();
        return parent::setPassword($password);
    }

    public function getPassword()
    {
        $this->__load();
        return parent::getPassword();
    }

    public function setSalt($salt)
    {
        $this->__load();
        return parent::setSalt($salt);
    }

    public function getSalt()
    {
        $this->__load();
        return parent::getSalt();
    }

    public function setEmail($email)
    {
        $this->__load();
        return parent::setEmail($email);
    }

    public function getEmail()
    {
        $this->__load();
        return parent::getEmail();
    }

    public function setGender($gender)
    {
        $this->__load();
        return parent::setGender($gender);
    }

    public function getGender()
    {
        $this->__load();
        return parent::getGender();
    }

    public function setActivationCode($activationCode)
    {
        $this->__load();
        return parent::setActivationCode($activationCode);
    }

    public function getActivationCode()
    {
        $this->__load();
        return parent::getActivationCode();
    }

    public function setForgottenPasswordCode($forgottenPasswordCode)
    {
        $this->__load();
        return parent::setForgottenPasswordCode($forgottenPasswordCode);
    }

    public function getForgottenPasswordCode()
    {
        $this->__load();
        return parent::getForgottenPasswordCode();
    }

    public function setForgottenPasswordTime($forgottenPasswordTime)
    {
        $this->__load();
        return parent::setForgottenPasswordTime($forgottenPasswordTime);
    }

    public function getForgottenPasswordTime()
    {
        $this->__load();
        return parent::getForgottenPasswordTime();
    }

    public function setRememberCode($rememberCode)
    {
        $this->__load();
        return parent::setRememberCode($rememberCode);
    }

    public function getRememberCode()
    {
        $this->__load();
        return parent::getRememberCode();
    }

    public function setCreatedOn($createdOn)
    {
        $this->__load();
        return parent::setCreatedOn($createdOn);
    }

    public function getCreatedOn()
    {
        $this->__load();
        return parent::getCreatedOn();
    }

    public function setLastLogin($lastLogin)
    {
        $this->__load();
        return parent::setLastLogin($lastLogin);
    }

    public function getLastLogin()
    {
        $this->__load();
        return parent::getLastLogin();
    }

    public function setActive($active)
    {
        $this->__load();
        return parent::setActive($active);
    }

    public function getActive()
    {
        $this->__load();
        return parent::getActive();
    }

    public function setFirstName($firstName)
    {
        $this->__load();
        return parent::setFirstName($firstName);
    }

    public function getFirstName()
    {
        $this->__load();
        return parent::getFirstName();
    }

    public function setLastName($lastName)
    {
        $this->__load();
        return parent::setLastName($lastName);
    }

    public function getLastName()
    {
        $this->__load();
        return parent::getLastName();
    }

    public function setCompany($company)
    {
        $this->__load();
        return parent::setCompany($company);
    }

    public function getCompany()
    {
        $this->__load();
        return parent::getCompany();
    }

    public function setPhone($phone)
    {
        $this->__load();
        return parent::setPhone($phone);
    }

    public function getPhone()
    {
        $this->__load();
        return parent::getPhone();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'ipAddress', 'username', 'password', 'salt', 'email', 'gender', 'activationCode', 'forgottenPasswordCode', 'forgottenPasswordTime', 'rememberCode', 'createdOn', 'lastLogin', 'active', 'firstName', 'lastName', 'company', 'phone');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields AS $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}