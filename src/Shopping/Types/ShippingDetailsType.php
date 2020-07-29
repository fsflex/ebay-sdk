<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Shopping\Types;

/**
 *
 * @property \DTS\eBaySDK\Shopping\Types\AmountType $InsuranceCost
 * @property \DTS\eBaySDK\Shopping\Enums\InsuranceOptionCodeType $InsuranceOption
 * @property \DTS\eBaySDK\Shopping\Types\InternationalShippingServiceOptionType[] $InternationalShippingServiceOption
 * @property \DTS\eBaySDK\Shopping\Types\SalesTaxType $SalesTax
 * @property string $ShippingRateErrorMessage
 * @property \DTS\eBaySDK\Shopping\Types\ShippingServiceOptionType[] $ShippingServiceOption
 * @property \DTS\eBaySDK\Shopping\Types\TaxTableType $TaxTable
 * @property \DTS\eBaySDK\Shopping\Types\AmountType $InternationalInsuranceCost
 * @property \DTS\eBaySDK\Shopping\Enums\InsuranceOptionCodeType $InternationalInsuranceOption
 * @property \DTS\eBaySDK\Shopping\Types\AmountType $CODCost
 * @property string[] $ExcludeShipToLocation
 */
class ShippingDetailsType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'InsuranceCost' => [
            'type' => 'DTS\eBaySDK\Shopping\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'InsuranceCost'
        ],
        'InsuranceOption' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'InsuranceOption'
        ],
        'InternationalShippingServiceOption' => [
            'type' => 'DTS\eBaySDK\Shopping\Types\InternationalShippingServiceOptionType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'InternationalShippingServiceOption'
        ],
        'SalesTax' => [
            'type' => 'DTS\eBaySDK\Shopping\Types\SalesTaxType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SalesTax'
        ],
        'ShippingRateErrorMessage' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingRateErrorMessage'
        ],
        'ShippingServiceOption' => [
            'type' => 'DTS\eBaySDK\Shopping\Types\ShippingServiceOptionType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'ShippingServiceOption'
        ],
        'TaxTable' => [
            'type' => 'DTS\eBaySDK\Shopping\Types\TaxTableType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'TaxTable'
        ],
        'InternationalInsuranceCost' => [
            'type' => 'DTS\eBaySDK\Shopping\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'InternationalInsuranceCost'
        ],
        'InternationalInsuranceOption' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'InternationalInsuranceOption'
        ],
        'CODCost' => [
            'type' => 'DTS\eBaySDK\Shopping\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CODCost'
        ],
        'ExcludeShipToLocation' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'ExcludeShipToLocation'
        ]
    ];

    /**
     * @param array $values Optional properties and values to assign to the object.
     */
    public function __construct(array $values = [])
    {
        list($parentValues, $childValues) = self::getParentValues(self::$propertyTypes, $values);

        parent::__construct($parentValues);

        if (!array_key_exists(__CLASS__, self::$properties)) {
            self::$properties[__CLASS__] = array_merge(self::$properties[get_parent_class()], self::$propertyTypes);
        }

        if (!array_key_exists(__CLASS__, self::$xmlNamespaces)) {
            self::$xmlNamespaces[__CLASS__] = 'xmlns="urn:ebay:apis:eBLBaseComponents"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}