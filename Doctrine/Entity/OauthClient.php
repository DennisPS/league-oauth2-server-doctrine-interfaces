<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OauthClient
 */
class OauthClient
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $secret;

    /**
     * @var string
     */
    private $name;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $oauthClientRedirectUris;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $oauthSessions;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->oauthClientRedirectUris = new \Doctrine\Common\Collections\ArrayCollection();
        $this->oauthSessions = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set id
     *
     * @param string $id
     * @return OauthClient
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return string 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set secret
     *
     * @param string $secret
     * @return OauthClient
     */
    public function setSecret($secret)
    {
        $this->secret = $secret;

        return $this;
    }

    /**
     * Get secret
     *
     * @return string 
     */
    public function getSecret()
    {
        return $this->secret;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return OauthClient
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
     * Add oauthClientRedirectUris
     *
     * @param \Entity\OauthClientRedirectUri $oauthClientRedirectUris
     * @return OauthClient
     */
    public function addOauthClientRedirectUri(\Entity\OauthClientRedirectUri $oauthClientRedirectUris)
    {
        $this->oauthClientRedirectUris[] = $oauthClientRedirectUris;

        return $this;
    }

    /**
     * Remove oauthClientRedirectUris
     *
     * @param \Entity\OauthClientRedirectUri $oauthClientRedirectUris
     */
    public function removeOauthClientRedirectUri(\Entity\OauthClientRedirectUri $oauthClientRedirectUris)
    {
        $this->oauthClientRedirectUris->removeElement($oauthClientRedirectUris);
    }

    /**
     * Get oauthClientRedirectUris
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getOauthClientRedirectUris()
    {
        return $this->oauthClientRedirectUris;
    }

    /**
     * Add oauthSessions
     *
     * @param \Entity\OauthSession $oauthSessions
     * @return OauthClient
     */
    public function addOauthSession(\Entity\OauthSession $oauthSessions)
    {
        $this->oauthSessions[] = $oauthSessions;

        return $this;
    }

    /**
     * Remove oauthSessions
     *
     * @param \Entity\OauthSession $oauthSessions
     */
    public function removeOauthSession(\Entity\OauthSession $oauthSessions)
    {
        $this->oauthSessions->removeElement($oauthSessions);
    }

    /**
     * Get oauthSessions
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getOauthSessions()
    {
        return $this->oauthSessions;
    }
}
