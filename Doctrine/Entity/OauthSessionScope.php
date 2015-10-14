<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OauthSessionScope
 */
class OauthSessionScope
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $session_id;

    /**
     * @var string
     */
    private $scope;

    /**
     * @var \Entity\OauthSession
     */
    private $oauthSession;

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
     * Set session_id
     *
     * @param integer $sessionId
     * @return OauthSessionScope
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
     * Set scope
     *
     * @param string $scope
     * @return OauthSessionScope
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
     * Set oauthSession
     *
     * @param \Entity\OauthSession $oauthSession
     * @return OauthSessionScope
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

    /**
     * Set oauthScope
     *
     * @param \Entity\OauthScope $oauthScope
     * @return OauthSessionScope
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
