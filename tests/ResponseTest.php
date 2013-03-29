<?php

use PayPal\Ipn\Response;

class ResponseTest extends PHPUnit_Framework_TestCase
{
    protected $standardRespObj;

    public function setUp()
    {
        $this->standardRespObj = new Response();
    }

    public function testExtendsResponseObject()
    {
        $this->assertInstanceOf('PayPal\Ipn\Response', $this->standardRespObj);
    }

    public function testGetAndSetBody()
    {
        $content = 'TEST BODY CONTENT';

        $this->standardRespObj->setBody($content);

        $this->assertEquals($content, $this->standardRespObj->getBody());
    }

    public function testGetAndSetStatus()
    {
        $content = 200;

        $this->standardRespObj->setStatus($content);

        $this->assertEquals($content, $this->standardRespObj->getStatus());
    }
}
