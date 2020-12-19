<?php


namespace DTS\eBaySDK\Identity\Services;


use DTS\eBaySDK\Identity\Types\GetUserResponse;

class IdentityService  extends \DTS\eBaySDK\Identity\Services\IdentityBaseService
{
    const API_VERSION = 'v1';

    /**
     * @property array $operations Associative array of operations provided by the service.
     */
    protected static $operations = [
        'GetUser' => [
            'method' => 'GET',
            'resource' => 'user',
            'responseClass' => 'DTS\eBaySDK\Identity\Types\GetUserResponse',
            'params' => []
        ]
    ];

    /**
     * @param
     * @return GetUserResponse
     */
    public function getUser()
    {
        return $this->getUserAsync()->wait();
    }

    /**
     * @param
     * @return GetUserResponse
     */
    public function getUserAsync()
    {
        return $this->callOperationAsync('GetUser');
    }
}
