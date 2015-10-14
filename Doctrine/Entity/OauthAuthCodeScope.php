<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OauthAuthCodeScope
 */
class OauthAuthCodeScope
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $auth_code;

    /**
     * @var string
     */
    private $scope;

    /**
     * @var \Entity\OauthAuthCode
     */
    private $oauthAuthCode;

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
     * Set auth_code
     *
     * @param string $authCode
     * @return OauthAuthCodeScope
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
     * Set scope
     *
     * @param string $scope
     * @return OauthAuthCodeScope
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
     * Set oauthAuthCode
     *
     * @param \Entity\OauthAuthCode $oauthAuthCode
     * @return OauthAuthCodeScope
     */
    public function setOauthAuthCode(\Entity\OauthAuthCode $oauthAuthCode = null)
    {
        $this->oauthAuthCode = $oauthAuthCode;

        return $this;
    }

    /**
     * Get oauthAuthCode
     *
     * @return \Entity\OauthAuthCode 
     */
    public function getOauthAuthCode()
    {
        return $this->oauthAuthCode;
    }

    /**
     * Set oauthScope
     *
     * @param \Entity\OauthScope $oauthScope
     * @return OauthAuthCodeScope
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
