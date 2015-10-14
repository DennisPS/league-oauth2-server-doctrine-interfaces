<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OauthClientRedirectUri
 */
class OauthClientRedirectUri
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $client_id;

    /**
     * @var string
     */
    private $redirect_uri;

    /**
     * @var \Entity\OauthClient
     */
    private $oauthClient;


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
     * Set client_id
     *
     * @param string $clientId
     * @return OauthClientRedirectUri
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
     * Set redirect_uri
     *
     * @param string $redirectUri
     * @return OauthClientRedirectUri
     */
    public function setRedirectUri($redirectUri)
    {
        $this->redirect_uri = $redirectUri;

        return $this;
    }

    /**
     * Get redirect_uri
     *
     * @return string 
     */
    public function getRedirectUri()
    {
        return $this->redirect_uri;
    }

    /**
     * Set oauthClient
     *
     * @param \Entity\OauthClient $oauthClient
     * @return OauthClientRedirectUri
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
