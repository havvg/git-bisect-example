<?php

namespace Bisect\Test\Web;

class ApplicationTest extends \Bisect\Test\AbstractTest
{
  public function testRootIsOK()
  {
    $client = $this->createClient();
    $client->request('GET', '/');
    
    $this->assertTrue($client->getResponse()->isOk(), 'The response does not contain errors.');
    $this->assertEquals(200, $client->getResponse()->getStatusCode(), 'The status code is 200 OK.');
  }
}