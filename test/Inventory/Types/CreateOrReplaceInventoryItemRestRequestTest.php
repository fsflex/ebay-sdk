<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Inventory\Types;

use DTS\eBaySDK\Inventory\Types\CreateOrReplaceInventoryItemRestRequest;

class CreateOrReplaceInventoryItemRestRequestTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new CreateOrReplaceInventoryItemRestRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Inventory\Types\CreateOrReplaceInventoryItemRestRequest', $this->obj);
    }

    public function testExtendsInventoryItem()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Inventory\Types\InventoryItem', $this->obj);
    }
}
