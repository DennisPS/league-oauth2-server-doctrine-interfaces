<?php

namespace OAuth2\Repositories;

use League\OAuth2\Server\Entity\RefreshTokenEntity;
use League\OAuth2\Server\Storage\AbstractStorage;
use League\OAuth2\Server\Storage\RefreshTokenInterface;

//use Illuminate\Database\Capsule\Manager as Capsule;

class RefreshTokenStorage extends AbstractStorage implements RefreshTokenInterface
{
    function __construct(\Doctrine\ORM\EntityManager $doctrine_em)
    {
        $this->entitymanager = $doctrine_em;
    }

    private $entitymanager;
    /**
     * {@inheritdoc}
     */
    public function get($token)
    {
        //TODO: RefreshTokenStorage\get
        /*
        $result = Capsule::table('oauth_refresh_tokens')
                            ->where('refresh_token', $token)
                            ->get();
        if (count($result) === 1) {
            $token = (new RefreshTokenEntity($this->server))
                        ->setId($result[0]['refresh_token'])
                        ->setExpireTime($result[0]['expire_time'])
                        ->setAccessTokenId($result[0]['access_token']);
            return $token;
        }
        return null;*/
    }

    /**
     * {@inheritdoc}
     */
    public function create($token, $expireTime, $accessToken)
    {
        //TODO: RefreshTokenStorage\create
        /*
        Capsule::table('oauth_refresh_tokens')
                    ->insert([
                        'refresh_token'     =>  $token,
                        'access_token'    =>  $accessToken,
                        'expire_time'   =>  $expireTime,
                    ]);*/
    }

    /**
     * {@inheritdoc}
     */
    public function delete(RefreshTokenEntity $token)
    {
       //TODO: RefreshTokenStorage\delete
        /*
        Capsule::table('oauth_refresh_tokens')
                            ->where('refresh_token', $token->getId())
                            ->delete();
        */
    }

}
