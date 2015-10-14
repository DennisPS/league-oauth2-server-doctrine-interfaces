<?php

namespace OAuth2\Repositories;

use League\OAuth2\Server\Entity\AuthCodeEntity;
use League\OAuth2\Server\Entity\ScopeEntity;
use League\OAuth2\Server\Storage\AbstractStorage;
use League\OAuth2\Server\Storage\AuthCodeInterface;

//use Illuminate\Database\Capsule\Manager as Capsule;

class AuthCodeStorage extends AbstractStorage implements AuthCodeInterface
{
    function __construct(\Doctrine\ORM\EntityManager $doctrine_em)
    {
        $this->entitymanager = $doctrine_em;
    }

    private $entitymanager;
    /**
     * {@inheritdoc}
     */
    public function get($code)
    {
        //TODO: AuthCodeStorage\get
        /*
        $result = Capsule::table('oauth_auth_codes')
                            ->where('auth_code', $code)
                            ->where('expire_time', '>=', time())
                            ->get();
        if (count($result) === 1) {
            $token = new AuthCodeEntity($this->server);
            $token->setId($result[0]['auth_code']);
            $token->setRedirectUri($result[0]['client_redirect_uri']);
            return $token;
        }
        return null;
        */
    }

    public function create($token, $expireTime, $sessionId, $redirectUri)
    {
        //TODO: AuthCodeStorage\create
        /*
        Capsule::table('oauth_auth_codes')
                    ->insert([
                        'auth_code'     =>  $token,
                        'client_redirect_uri'  =>  $redirectUri,
                        'session_id'    =>  $sessionId,
                        'expire_time'   =>  $expireTime,
                    ]);
        */
    }

    /**
     * {@inheritdoc}
     */
    public function getScopes(AuthCodeEntity $token)
    {
        //TODO: AuthCodeStorage\getScopes
        /*
        $result = Capsule::table('oauth_auth_code_scopes')
                                    ->select(['oauth_scopes.id', 'oauth_scopes.description'])
                                    ->join('oauth_scopes', 'oauth_auth_code_scopes.scope', '=', 'oauth_scopes.id')
                                    ->where('auth_code', $token->getId())
                                    ->get();
        $response = [];
        if (count($result) > 0) {
            foreach ($result as $row) {
                $scope = (new ScopeEntity($this->server))->hydrate([
                    'id'            =>  $row['id'],
                    'description'   =>  $row['description'],
                ]);
                $response[] = $scope;
            }
        }
        return $response;
        */
    }

    /**
     * {@inheritdoc}
     */
    public function associateScope(AuthCodeEntity $token, ScopeEntity $scope)
    {
        //TODO: AuthCodeStorage\getScopes
        /*
        Capsule::table('oauth_auth_code_scopes')
                    ->insert([
                        'auth_code' =>  $token->getId(),
                        'scope'     =>  $scope->getId(),
                    ]);
        */
    }

    /**
     * {@inheritdoc}
     */
    public function delete(AuthCodeEntity $token)
    {
        $qb = $this->entitymanager->createQueryBuilder();
        $qb
            ->delete('Entity\OauthAuthCode', 'oac')
            ->where('oac.auth_code = ?1')
            ->setParameter(1, $token->getId());

        $qb->getQuery()->execute();
    }
}
