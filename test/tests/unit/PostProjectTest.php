<?php

namespace Test\Unit;

use GuzzleHttp\Client;

class CreateProjectTest extends \PHPUnit_Framework_TestCase
{
    public function testCreateProject()
    {
        $client = new Client([
            'base_uri' => 'https://gitlab.com',
            'allow_redirects' => false,
            'headers' => ['PRIVATE-TOKEN' => 'bJwB3oPSLjEFcBMQmFte'],
        ]);

        $response = $client->request('POST', '/api/v3/projects', [
            'form_params' => ['name' => 'test1'],
        ]);

        $this->assertEquals(201, $response->getStatusCode());

        $this->assertEquals(
            ['application/json'],
            $response->getHeader('Content-Type')
        );

        $actual = json_decode((string)$response->getBody(), true);
        $this->assertTrue(is_array($actual));
    }
}
