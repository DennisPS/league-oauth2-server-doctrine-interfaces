<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OauthAuthCode
 */
class OauthAuthCode
{
    /**
     * @var string
     */
    private $auth_code;

    /**
     * @var integer
     */
    private $session_id;

    /**
     * @var integer
     */
    private $expire_time;

    /**
     * @var string
     */
    private $client_redirect_uri;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $oauthAuthCodeScopes;

    /**
     * @var \Entity\OauthSession
     */
    private $oauthSession;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->oauthAuthCodeScopes = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set auth_code
     *
     * @param string $authCode
     * @return OauthAuthCode
     */
    public function setAuthCode($authCode)
    {
        $this->auth_code = $authCode;

        return $this;
    }

    /**
     * Get auth_code
     *
     * @return string 
     */
    public function getAuthCode()
    {
        return $this->auth_code;
    }

    /**
     * Set session_id
     *
     * @param integer $sessionId
     * @return OauthAuthCode
     */
    public function setSessionId($sessionId)
    {
        $this->session_id = $sessionId;

        return $this;
    }

    /**
     * Get session_id
     *
     * @return integer 
     */
    public function getSessionId()
    {
        return $this->session_id;
    }

    /**
     * Set expire_time
     *
     * @param integer $expireTime
     * @return OauthAuthCode
     */
    public function setExpireTime($expireTime)
    {
        $this->expire_time = $expireTime;

        return $this;
    }

    /**
     * Get expire_time
     *
     * @return integer 
     */
    public function getExpireTime()
    {
        return $this->expire_time;
    }

    /**
     * Set client_redirect_uri
     *
     * @param string $clientRedirectUri
     * @return OauthAuthCode
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
     * Add oauthAuthCodeScopes
     *
     * @param \Entity\OauthAuthCodeScope $oauthAuthCodeScopes
     * @return OauthAuthCode
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
     * Set oauthSession
     *
     * @param \Entity\OauthSession $oauthSession
     * @return OauthAuthCode
     */
    public function setOauthSession(\Entity\OauthSession $oauthSession = null)
    {
        $this->oauthSession = $oauthSession;

        return $this;
    }

    /**
     * Get oauthSession
     *
     * @return \Entity\OauthSession 
     */
    public function getOauthSession()
    {
        return $this->oauthSession;
    }
}
