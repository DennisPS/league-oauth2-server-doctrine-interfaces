<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OauthRefreshToken
 */
class OauthRefreshToken
{
    /**
     * @var string
     */
    private $refresh_token;

    /**
     * @var integer
     */
    private $expire_time;

    /**
     * @var integer
     */
    private $access_token;

    /**
     * @var \Entity\OauthAccessToken
     */
    private $oauthAccessToken;


    /**
     * Set refresh_token
     *
     * @param string $refreshToken
     * @return OauthRefreshToken
     */
    public function setRefreshToken($refreshToken)
    {
        $this->refresh_token = $refreshToken;

        return $this;
    }

    /**
     * Get refresh_token
     *
     * @return string 
     */
    public function getRefreshToken()
    {
        return $this->refresh_token;
    }

    /**
     * Set expire_time
     *
     * @param integer $expireTime
     * @return OauthRefreshToken
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
     * Set access_token
     *
     * @param integer $accessToken
     * @return OauthRefreshToken
     */
    public function setAccessToken($accessToken)
    {
        $this->access_token = $accessToken;

        return $this;
    }

    /**
     * Get access_token
     *
     * @return integer 
     */
    public function getAccessToken()
    {
        return $this->access_token;
    }

    /**
     * Set oauthAccessToken
     *
     * @param \Entity\OauthAccessToken $oauthAccessToken
     * @return OauthRefreshToken
     */
    public function setOauthAccessToken(\Entity\OauthAccessToken $oauthAccessToken = null)
    {
        $this->oauthAccessToken = $oauthAccessToken;

        return $this;
    }

    /**
     * Get oauthAccessToken
     *
     * @return \Entity\OauthAccessToken 
     */
    public function getOauthAccessToken()
    {
        return $this->oauthAccessToken;
    }
}
