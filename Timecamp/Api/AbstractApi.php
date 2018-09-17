<?php
namespace Timecamp\Api;

use Timecamp\Connection;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7;
use GuzzleHttp\Exception\RequestException;

/**
 * Class AbstractApi.
 */
abstract class AbstractApi
{

    protected $client = null;

    public function __construct(Connection $client)
    {
        $this->client = $client;
    }

    /**
     * Perform HTTP Request.
     *
     * @param $method
     * @param $resource
     * @param array $params
     * @return array
     */
    final protected function request($method, $resource, array $params = array())
    {
        $access_info = $this->client->getAccessInfo();
        // todo: make sure resource has trailing slash
        $resource .= 'format/json/api_token/' . $access_info['api_token'];
        if ($params) {
            switch ($method) {
                case 'GET':
                    foreach ($params as $param_name => $param_value) {
                        $resource .= '/' . $param_name . '/' . $param_value;
                    }
                    $params = array();
                    break;
                case 'POST':
                    $params = array('form_params' => $params);
                    break;
                case 'PUT':
                    $params = array('form_params' => $params);
                    break;
            }
        }
        $http_client = new Client(['base_uri' => $access_info['base_url']]);
        //echo $resource;return false;

        try {
            $response = $http_client->request($method, $resource, $params);
        } catch (RequestException $e) {
            echo Psr7\str($e->getRequest());
            if ($e->hasResponse()) {
                echo Psr7\str($e->getResponse());
            }
        }
        $response = $response->getBody();
        $response = (array)json_decode($response, true);
        return $response;
    }
}
