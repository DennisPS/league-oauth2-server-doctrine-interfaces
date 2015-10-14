<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OauthSession
 */
class OauthSession
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $owner_type;

    /**
     * @var string
     */
    private $owner_id;

    /**
     * @var string
     */
    private $client_id;

    /**
     * @var string
     */
    private $client_redirect_uri;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $oauthAccessTokens;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $oauthAuthCodes;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $oauthSessionScopes;

    /**
     * @var \Entity\OauthClient
     */
    private $oauthClient;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->oauthAccessTokens = new \Doctrine\Common\Collections\ArrayCollection();
        $this->oauthAuthCodes = new \Doctrine\Common\Collections\ArrayCollection();
        $this->oauthSessionScopes = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set owner_type
     *
     * @param string $ownerType
     * @return OauthSession
     */
    public function setOwnerType($ownerType)
    {
        $this->owner_type = $ownerType;

        return $this;
    }

    /**
     * Get owner_type
     *
     * @return string 
     */
    public function getOwnerType()
    {
        return $this->owner_type;
    }

    /**
     * Set owner_id
     *
     * @param string $ownerId
     * @return OauthSession
     */
    public function setOwnerId($ownerId)
    {
        $this->owner_id = $ownerId;

        return $this;
    }

    /**
     * Get owner_id
     *
     * @return string 
     */
    public function getOwnerId()
    {
        return $this->owner_id;
    }

    /**
     * Set client_id
     *
     * @param string $clientId
     * @return OauthSession
     */
    public function setClientId($clientId)
    {
        $this->client_id = $clientId;

        return $this;
    }

    /**
     * Get client_id
     *
     * @return string 
     */
    public function getClientId()
    {
        return $this->client_id;
    }

    /**
     * Set client_redirect_uri
     *
     * @param string $clientRedirectUri
     * @return OauthSession
     */
    public function setClientRedirectUri($clientRedirectUri)
    {
        $this->client_redirect_uri = $clientRedirectUri;

        return $this;
    }

    /**
     * Get client_redirect_uri
     *
     * @return string 
     */
    public function getClientRedirectUri()
    {
        return $this->client_redirect_uri;
    }

    /**
     * Add oauthAccessTokens
     *
     * @param \Entity\OauthAccessToken $oauthAccessTokens
     * @return OauthSession
     */
    public function addOauthAccessToken(\Entity\OauthAccessToken $oauthAccessTokens)
    {
        $this->oauthAccessTokens[] = $oauthAccessTokens;

        return $this;
    }

    /**
     * Remove oauthAccessTokens
     *
     * @param \Entity\OauthAccessToken $oauthAccessTokens
     */
    public function removeOauthAccessToken(\Entity\OauthAccessToken $oauthAccessTokens)
    {
        $this->oauthAccessTokens->removeElement($oauthAccessTokens);
    }

    /**
     * Get oauthAccessTokens
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getOauthAccessTokens()
    {
        return $this->oauthAccessTokens;
    }

    /**
     * Add oauthAuthCodes
     *
     * @param \Entity\OauthAuthCode $oauthAuthCodes
     * @return OauthSession
     */
    public function addOauthAuthCode(\Entity\OauthAuthCode $oauthAuthCodes)
    {
        $this->oauthAuthCodes[] = $oauthAuthCodes;

        return $this;
    }

    /**
     * Remove oauthAuthCodes
     *
     * @param \Entity\OauthAuthCode $oauthAuthCodes
     */
    public function removeOauthAuthCode(\Entity\OauthAuthCode $oauthAuthCodes)
    {
        $this->oauthAuthCodes->removeElement($oauthAuthCodes);
    }

    /**
     * Get oauthAuthCodes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getOauthAuthCodes()
    {
        return $this->oauthAuthCodes;
    }

    /**
     * Add oauthSessionScopes
     *
     * @param \Entity\OauthSessionScope $oauthSessionScopes
     * @return OauthSession
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

    /**
     * Set oauthClient
     *
     * @param \Entity\OauthClient $oauthClient
     * @return OauthSession
     */
    public function setOauthClient(\Entity\OauthClient $oauthClient = null)
    {
        $this->oauthClient = $oauthClient;

        return $this;
    }

    /**
     * Get oauthClient
     *
     * @return \Entity\OauthClient 
     */
    public function getOauthClient()
    {
        return $this->oauthClient;
    }
}
