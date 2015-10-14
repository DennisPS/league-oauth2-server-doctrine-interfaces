<?php

namespace OAuth2\Repositories;

use League\OAuth2\Server\Entity\ScopeEntity;
use League\OAuth2\Server\Storage\AbstractStorage;
use League\OAuth2\Server\Storage\ScopeInterface;

//use Illuminate\Database\Capsule\Manager as Capsule;

class ScopeStorage extends AbstractStorage implements ScopeInterface
{
    function __construct(\Doctrine\ORM\EntityManager $doctrine_em)
    {
        $this->entitymanager = $doctrine_em;
    }

    private $entitymanager;
    /**
     * {@inheritdoc}
     */
    public function get($scope, $clientId = null, $grantType = null)
    {
        $query = $this->entitymanager->createQuery("
          SELECT os.id
          FROM Entity\OauthScope os
          WHERE os.id = :scope
        ");
        $query->setParameters(array(
            'scope' => $scope
        ));

        $result = $query->getArrayResult();

        if (count($result) === 0) {
            return null;
        }

        return (new ScopeEntity($this->server))->hydrate([
            'id'            =>  $result[0]['id'],
            'description'   =>  $result[0]['description']
        ]);
    }
}
