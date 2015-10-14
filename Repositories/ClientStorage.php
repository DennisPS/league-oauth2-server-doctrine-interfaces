<?php

namespace OAuth2\Repositories;

use League\OAuth2\Server\Entity\ClientEntity;
use League\OAuth2\Server\Entity\SessionEntity;
use League\OAuth2\Server\Storage\AbstractStorage;
use League\OAuth2\Server\Storage\ClientInterface;


class ClientStorage extends AbstractStorage implements ClientInterface
{
    function __construct($doctrine_em)
    {
        $this->entitymanager = $doctrine_em;
    }

    private $entitymanager;
    /**
     * {@inheritdoc}
     */
    public function get($clientId, $clientSecret = null, $redirectUri = null, $grantType = null)
    {
        $qb = $this->entitymanager->createQueryBuilder();
        $qb
            ->select('oc.id', 'oc.secret', 'oc.name' )
            ->from('Entity\OauthClient', 'oc')
            ->where('oc.id = :clientId');
            $qb->setParameters(array(
                'clientId' => $clientId
            ));


        if ($clientSecret !== null) {
            $qb->andWhere('oc.secret = :clientSecret');
            $qb->setParameters(array(
                'clientId' => $clientId,
                'clientSecret' => $clientSecret
            ));
        }

        if ($redirectUri) {
            //TODO
        }


        $result = $qb->getQuery()->getArrayResult();

        if (count($result) === 1) {
            $client = new ClientEntity($this->server);
            $client->hydrate([
                'id'    =>  $result[0]['id'],
                'name'  =>  $result[0]['name']
            ]);

            return $client;
        }

        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function getBySession(SessionEntity $session)
    {
        //TODO: ClientStorage\getBySession
        /*
        $result = Capsule::table('oauth_clients')
                            ->select(['oauth_clients.id', 'oauth_clients.name'])
                            ->join('oauth_sessions', 'oauth_clients.id', '=', 'oauth_sessions.client_id')
                            ->where('oauth_sessions.id', $session->getId())
                            ->get();

        if (count($result) === 1) {
            $client = new ClientEntity($this->server);
            $client->hydrate([
                'id'    =>  $result[0]['id'],
                'name'  =>  $result[0]['name']
            ]);

            return $client;
        }

        return null;*/
    }
}
