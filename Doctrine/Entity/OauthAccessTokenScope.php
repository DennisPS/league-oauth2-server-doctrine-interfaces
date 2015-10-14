<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OauthAccessTokenScope
 */
class OauthAccessTokenScope
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
     * @var string
     */
    private $scope;

    /**
     * @var \Entity\OauthAccessToken
     */
    private $oauthAccessToken;

    /**
     * @var \Entity\OauthScope
     */
    private $oauthScope;


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
     * @return OauthAccessTokenScope
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
     * Set scope
     *
     * @param string $scope
     * @return OauthAccessTokenScope
     */
    public function setScope($scope)
    {
        $this->scope = $scope;

        return $this;
    }

    /**
     * Get scope
     *
     * @return string 
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * Set oauthAccessToken
     *
     * @param \Entity\OauthAccessToken $oauthAccessToken
     * @return OauthAccessTokenScope
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

    /**
     * Set oauthScope
     *
     * @param \Entity\OauthScope $oauthScope
     * @return OauthAccessTokenScope
     */
    public function setOauthScope(\Entity\OauthScope $oauthScope = null)
    {
        $this->oauthScope = $oauthScope;

        return $this;
    }

    /**
     * Get oauthScope
     *
     * @return \Entity\OauthScope 
     */
    public function getOauthScope()
    {
        return $this->oauthScope;
    }
}
