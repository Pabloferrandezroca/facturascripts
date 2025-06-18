<?php

namespace FacturaScripts\Test\Core\Model;

use FacturaScripts\Core\Model\ApiKey;
use PHPUnit\Framework\TestCase;
use FacturaScripts\Core\Tools;

class ApiKeyTest extends TestCase
{
    protected function createApi():ApiKey
    {
        $apiKey = new ApiKey();
        $apiKey->clear();
        return $apiKey;
    }

    public function testClear():void
    {
        $apiKey = $this->createApi();

        $this->assertEquals(20, strlen($apiKey->apikey));
        $this->assertEquals(Tools::date(), $apiKey->creationdate);
        $this->assertTrue($apiKey->enabled);
        $this->assertFalse($apiKey->fullaccess);
    }

    public function testPrimaryColumn():void
    {
        $apiKey = $this->createApi();
        $this->assertEquals('id', $apiKey->primaryColumn());
    }

    public function testPrimaryDescriptionColumn():void
    {
        $apiKey = $this->createApi();
        $this->assertEquals('description', $apiKey->primaryDescriptionColumn());
    }

    public function testTableName():void
    {
        $apiKey = $this->createApi();
        $this->assertEquals('api_keys', $apiKey->tableName());
    }


}