<?php

namespace OAuth2\Repositories;

use League\OAuth2\Server\Entity\AbstractTokenEntity;
use League\OAuth2\Server\Entity\AccessTokenEntity;
use League\OAuth2\Server\Entity\ScopeEntity;
use League\OAuth2\Server\Storage\AbstractStorage;
use League\OAuth2\Server\Storage\AccessTokenInterface;

//use Illuminate\Database\Capsule\Manager as Capsule;

class AccessTokenStorage extends AbstractStorage implements AccessTokenInterface
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
        $query = $this->entitymanager->createQuery("
          SELECT oat
          FROM Entity\OauthAccessToken oat
          WHERE oat.access_token = :accessToken
        ");
        $query->setParameters(array(
            'accessToken' => $token
        ));

        $result = $query->getArrayResult();

        if (count($result) === 1) {
            $token = (new AccessTokenEntity($this->server))
                        ->setId($result[0]['access_token'])
                        ->setExpireTime($result[0]['expire_time']);

            return $token;
        }

        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function getScopes(AccessTokenEntity $token)
    {
        $query = $this->entitymanager->createQuery("
            SELECT os.id, os.description
            FROM Entity\OauthAccessTokenScope oats
            JOIN Entity\OauthScope os WITH os.id = oats.scope
            WHERE oats.access_token = :accessToken
        ");
        $query->setParameters(array(
            'accessToken' => $token->getId()
        ));

        $result = $query->getArrayResult();

        $response = [];

        if (count($result) > 0) {
            foreach ($result as $row) {
                $scope = (new ScopeEntity($this->server))->hydrate([
                    'id'            =>  $row['id'],
                    'description'   =>  $row['description']
                ]);
                $response[] = $scope;
            }
        }

        return $response;
    }

    /**
     * {@inheritdoc}
     */
    public function create($token, $expireTime, $sessionId)
    {
        $SessionAccessToken = new \Entity\OauthAccessToken();

        $SessionAccessToken->setOauthSession($this->entitymanager->getRepository('Entity\OauthSession')->findOneBy(array('id' => $sessionId)));
        $SessionAccessToken->setAccessToken($token);
        $SessionAccessToken->setExpireTime($expireTime);

        $this->entitymanager->persist($SessionAccessToken);
        $this->entitymanager->flush();

    }

    /**
     * {@inheritdoc}
     */
    public function associateScope(AccessTokenEntity $token, ScopeEntity $scope)
    {
        $SessionTokenScope = new \Entity\OauthAccessTokenScope();
        $SessionTokenScope->setOauthAccessToken($this->entitymanager->getRepository('Entity\OauthAccessToken')->findOneBy(array('id' => $token->getId())));
        $SessionTokenScope->setOauthScope($this->entitymanager->getRepository('Entity\OauthScope')->findOneBy(array('id' => $scope->getId())));

        $this->entitymanager->persist($SessionTokenScope);
        $this->entitymanager->flush();

    }

    /**
     * {@inheritdoc}
     */
    public function delete(AccessTokenEntity $token)
    {
        $qb = $this->entitymanager->createQueryBuilder();
        $qb
            ->delete('Entity\OauthAccessTokenScope', 'oats')
            ->where('oats.access_token = :token')
            ->setParameters(array(
                'token' => $token->getId()
            ));
        $qb->getQuery()->execute();

    }
}
