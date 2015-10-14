<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OauthScope
 */
class OauthScope
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $description;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $oauthAccessTokenScopes;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $oauthAuthCodeScopes;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $oauthSessionScopes;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->oauthAccessTokenScopes = new \Doctrine\Common\Collections\ArrayCollection();
        $this->oauthAuthCodeScopes = new \Doctrine\Common\Collections\ArrayCollection();
        $this->oauthSessionScopes = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set id
     *
     * @param string $id
     * @return OauthScope
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
     * Set description
     *
     * @param string $description
     * @return OauthScope
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Add oauthAccessTokenScopes
     *
     * @param \Entity\OauthAccessTokenScope $oauthAccessTokenScopes
     * @return OauthScope
     */
    public function addOauthAccessTokenScope(\Entity\OauthAccessTokenScope $oauthAccessTokenScopes)
    {
        $this->oauthAccessTokenScopes[] = $oauthAccessTokenScopes;

        return $this;
    }

    /**
     * Remove oauthAccessTokenScopes
     *
     * @param \Entity\OauthAccessTokenScope $oauthAccessTokenScopes
     */
    public function removeOauthAccessTokenScope(\Entity\OauthAccessTokenScope $oauthAccessTokenScopes)
    {
        $this->oauthAccessTokenScopes->removeElement($oauthAccessTokenScopes);
    }

    /**
     * Get oauthAccessTokenScopes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getOauthAccessTokenScopes()
    {
        return $this->oauthAccessTokenScopes;
    }

    /**
     * Add oauthAuthCodeScopes
     *
     * @param \Entity\OauthAuthCodeScope $oauthAuthCodeScopes
     * @return OauthScope
     */
    public function addOauthAuthCodeScope(\Entity\OauthAuthCodeScope $oauthAuthCodeScopes)
    {
        $this->oauthAuthCodeScopes[] = $oauthAuthCodeScopes;

        return $this;
    }

    /**
     * Remove oauthAuthCodeScopes
     *
     * @param \Entity\OauthAuthCodeScope $oauthAuthCodeScopes
     */
    public function removeOauthAuthCodeScope(\Entity\OauthAuthCodeScope $oauthAuthCodeScopes)
    {
        $this->oauthAuthCodeScopes->removeElement($oauthAuthCodeScopes);
    }

    /**
     * Get oauthAuthCodeScopes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getOauthAuthCodeScopes()
    {
        return $this->oauthAuthCodeScopes;
    }

    /**
     * Add oauthSessionScopes
     *
     * @param \Entity\OauthSessionScope $oauthSessionScopes
     * @return OauthScope
     */
    public function addOauthSessionScope(\Entity\OauthSessionScope $oauthSessionScopes)
    {
        $this->oauthSessionScopes[] = $oauthSessionScopes;

        return $this;
    }

    /**
     * Remove oauthSessionScopes
     *
     * @param \Entity\OauthSessionScope $oauthSessionScopes
     */
    public function removeOauthSessionScope(\Entity\OauthSessionScope $oauthSessionScopes)
    {
        $this->oauthSessionScopes->removeElement($oauthSessionScopes);
    }

    /**
     * Get oauthSessionScopes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getOauthSessionScopes()
    {
        return $this->oauthSessionScopes;
    }
}
