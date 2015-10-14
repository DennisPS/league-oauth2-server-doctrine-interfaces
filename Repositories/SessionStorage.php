<?php

namespace OAuth2\Repositories;

use League\OAuth2\Server\Entity\AccessTokenEntity;
use League\OAuth2\Server\Entity\AuthCodeEntity;
use League\OAuth2\Server\Entity\ScopeEntity;
use League\OAuth2\Server\Entity\SessionEntity;
use League\OAuth2\Server\Storage\AbstractStorage;
use League\OAuth2\Server\Storage\SessionInterface;

//use Illuminate\Database\Capsule\Manager as Capsule;

class SessionStorage extends AbstractStorage implements SessionInterface
{
    function __construct(\Doctrine\ORM\EntityManager $doctrine_em)
    {
        $this->entitymanager = $doctrine_em;
    }

    private $entitymanager;

    /**
     * {@inheritdoc}
     */
    public function getByAccessToken(AccessTokenEntity $accessToken)
    {
        $query = $this->entitymanager->createQuery("
          SELECT os.id, os.owner_type, os.owner_id, os.client_id, os.client_redirect_uri
          FROM Entity\OauthSession os
          JOIN Entity\OauthAccessToken oat WITH oat.session_id = os.id
          WHERE oat.access_token = :accesstoken
        ");
        $query->setParameters(array(
            'accesstoken' => $accessToken->getId()
        ));

        $result = $query->getArrayResult();

        if (count($result) === 1) {
            $session = new SessionEntity($this->server);
            $session->setId($result[0]['id']);
            $session->setOwner($result[0]['owner_type'], $result[0]['owner_id']);

            return $session;
        }

        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function getByAuthCode(AuthCodeEntity $authCode)
    {
       //TODO: SessionStorage\getByAuthCode
        /*
        $result = Capsule::table('oauth_sessions')
                            ->select(['oauth_sessions.id', 'oauth_sessions.owner_type', 'oauth_sessions.owner_id', 'oauth_sessions.client_id', 'oauth_sessions.client_redirect_uri'])
                            ->join('oauth_auth_codes', 'oauth_auth_codes.session_id', '=', 'oauth_sessions.id')
                            ->where('oauth_auth_codes.auth_code', $authCode->getId())
                            ->get();
        if (count($result) === 1) {
            $session = new SessionEntity($this->server);
            $session->setId($result[0]['id']);
            $session->setOwner($result[0]['owner_type'], $result[0]['owner_id']);
            return $session;
        }
        return null;
        */
    }

    /**
     * {@inheritdoc}
     */
    public function getScopes(SessionEntity $session)
    {
        $query = $this->entitymanager->createQuery("
            SELECT osco.id, osco.description
            FROM Entity\OauthSession osess
            JOIN Entity\OauthSessionScope oss WITH osess.id = oss.session_id
            JOIN Entity\OauthScope osco WITH osco.id = oss.scope
            WHERE osess.id = :sessionId
        ");
        $query->setParameters(array(
            'sessionId' => $session->getId()
        ));

        $result = $query->getArrayResult();

        $scopes = [];

        foreach ($result as $scope) {
            $scopes[] = (new ScopeEntity($this->server))->hydrate([
                'id'            =>  $scope['id'],
                'description'   =>  $scope['description']
            ]);
        }

        return $scopes;

    }

    /**
     * {@inheritdoc}
     */
    public function create($ownerType, $ownerId, $clientId, $clientRedirectUri = null)
    {
        $session = new \Entity\OauthSession();

        $session->setOauthClient($this->entitymanager->getRepository('Entity\OauthClient')->findOneBy(array('id' => $clientId)));
        $session->setOwnerType($ownerType);
        $session->setOwnerId($ownerId);

        $this->entitymanager->persist($session);
        $this->entitymanager->flush();

        return $session->getId();
    }

    /**
     * {@inheritdoc}
     */
    public function associateScope(SessionEntity $session, ScopeEntity $scope)
    {
        $SessionTokenScope = new \Entity\OauthSessionScope();

        $SessionTokenScope->setOauthSession($this->entitymanager->getRepository('Entity\OauthSession')->findOneBy(array('id' => $session->getId() )));
        $SessionTokenScope->setOauthScope($this->entitymanager->getRepository('Entity\OauthScope')->findOneBy(array('id' => $scope->getId() )));

        $this->entitymanager->persist($SessionTokenScope);
        $this->entitymanager->flush();
    }
}
