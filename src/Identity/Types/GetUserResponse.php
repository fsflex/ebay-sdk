<?php


namespace DTS\eBaySDK\Identity\Types;

/**
 *
 * @property ErrorDetail[] $errors
 * @property string userId
 * @property string $errorId
 * @property string $username
 * @property string $accountType
 * @property string $registrationMarketplaceId
 */

class GetUserResponse extends \DTS\eBaySDK\Types\BaseType
{

    private static $propertyTypes = [
        'errors' => [
            'type' => 'DTS\eBaySDK\Identity\Types\ErrorDetail',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'errors'
        ],
        'userId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'userId'
        ],
        'username' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'username'
        ],
        'accountType' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'accountType'
        ],
        'registrationMarketplaceId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'registrationMarketplaceId'
        ],
    ];

    public function __construct(array $values = [])
    {
        list($parentValues, $childValues) = self::getParentValues(self::$propertyTypes, $values);

        parent::__construct($parentValues);

        if (!array_key_exists(__CLASS__, self::$properties)) {
            self::$properties[__CLASS__] = array_merge(self::$properties[get_parent_class()], self::$propertyTypes);
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
