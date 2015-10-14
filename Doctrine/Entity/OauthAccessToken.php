<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OauthAccessToken
 */
class OauthAccessToken
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $access_token;

    /**
     * @var integer
     */
    private $session_id;

    /**
     * @var integer
     */
    private $expire_time;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $oauthRefreshTokens;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $oauthAccessTokenScopes;

    /**
     * @var \Entity\OauthSession
     */
    private $oauthSession;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->oauthRefreshTokens = new \Doctrine\Common\Collections\ArrayCollection();
        $this->oauthAccessTokenScopes = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set access_token
     *
     * @param string $accessToken
     * @return OauthAccessToken
     */
    public function setAccessToken($accessToken)
    {
        $this->access_token = $accessToken;

        return $this;
    }

    /**
     * Get access_token
     *
     * @return string 
     */
    public function getAccessToken()
    {
        return $this->access_token;
    }

    /**
     * Set session_id
     *
     * @param integer $sessionId
     * @return OauthAccessToken
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
     * @return OauthAccessToken
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
     * Add oauthRefreshTokens
     *
     * @param \Entity\OauthRefreshToken $oauthRefreshTokens
     * @return OauthAccessToken
     */
    public function addOauthRefreshToken(\Entity\OauthRefreshToken $oauthRefreshTokens)
    {
        $this->oauthRefreshTokens[] = $oauthRefreshTokens;

        return $this;
    }

    /**
     * Remove oauthRefreshTokens
     *
     * @param \Entity\OauthRefreshToken $oauthRefreshTokens
     */
    public function removeOauthRefreshToken(\Entity\OauthRefreshToken $oauthRefreshTokens)
    {
        $this->oauthRefreshTokens->removeElement($oauthRefreshTokens);
    }

    /**
     * Get oauthRefreshTokens
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getOauthRefreshTokens()
    {
        return $this->oauthRefreshTokens;
    }

    /**
     * Add oauthAccessTokenScopes
     *
     * @param \Entity\OauthAccessTokenScope $oauthAccessTokenScopes
     * @return OauthAccessToken
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
     * Set oauthSession
     *
     * @param \Entity\OauthSession $oauthSession
     * @return OauthAccessToken
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
