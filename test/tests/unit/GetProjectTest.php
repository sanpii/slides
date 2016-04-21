<?php

namespace Test\Unit;

use GuzzleHttp\Client;

class GetProjectTest extends \PHPUnit_Framework_TestCase
{
    public function testGetProject()
    {
        $client = new Client([
            'base_uri' => 'https://gitlab.com',
            'allow_redirects' => false,
            'headers' => ['PRIVATE-TOKEN' => 'bJwB3oPSLjEFcBMQmFte'],
        ]);

        $response = $client->request('GET', '/api/v3/projects/732426');

        $this->assertEquals(200, $response->getStatusCode());

        $this->assertEquals(
            ['application/json'],
            $response->getHeader('Content-Type')
        );

        $expected = [
            'id' => 732426,
            'description' => '',
            'default_branch' => 'master',
            'tag_list' => [],
            'public' => true,
            'archived' => false,
            'visibility_level' => 20,
            'ssh_url_to_repo' => 'git@gitlab.com:behatch/contexts.git',
            'http_url_to_repo' => 'https://gitlab.com/behatch/contexts.git',
            'web_url' => 'https://gitlab.com/behatch/contexts',
            'name' => 'contexts',
            'name_with_namespace' => 'behatch / contexts',
            'path' => 'contexts',
            'path_with_namespace' => 'behatch/contexts',
            'issues_enabled' => true,
            'merge_requests_enabled' => true,
            'wiki_enabled' => true,
            'builds_enabled' => true,
            'snippets_enabled' => false,
            'created_at' => '2016-01-06T17:57:44.883Z',
            'last_activity_at' => '2016-03-04T09:50:52.885Z',
            'shared_runners_enabled' => true,
            'creator_id' => 366427,
            'namespace' => [
                'id' => 429197,
                'name' => 'behatch',
                'path' => 'behatch',
                'owner_id' => null,
                'created_at' => '2016-01-06T19:49:53.632Z',
                'updated_at' => '2016-01-06T19:49:53.632Z',
                'description' => '',
                'avatar' => [
                    'url' => null,
                ],
                'membership_lock' => false,
                'share_with_group_lock' => false,
                'visibility_level' => 20,
                'last_ldap_sync_at' => null,
            ],
            'avatar_url' => null,
            'star_count' => 0,
            'forks_count' => 0,
            'open_issues_count' => 0,
            'runners_token' => '17e7dbfaaca676808f9bc2f150499d',
            'public_builds' => true,
            'permissions' => [
                'project_access' => null,
                'group_access' => [
                    'access_level' => 50,
                    'notification_level' => 3,
                ],
            ],
        ];
        $actual = json_decode((string)$response->getBody(), true);

        $this->assertEquals($actual, $expected);
    }
}
