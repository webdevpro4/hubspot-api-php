<?php
/**
 * SearchApi
 * PHP version 7.3
 *
 * @category Class
 * @package  HubSpot\Client\Crm\Objects
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * CRM Objects
 *
 * CRM objects such as companies, contacts, deals, line items, products, tickets, and quotes are standard objects in HubSpot’s CRM. These core building blocks support custom properties, store critical information, and play a central role in the HubSpot application.  ## Supported Object Types  This API provides access to collections of CRM objects, which return a map of property names to values. Each object type has its own set of default properties, which can be found by exploring the [CRM Object Properties API](https://developers.hubspot.com/docs/methods/crm-properties/crm-properties-overview).  |Object Type |Properties returned by default | |--|--| | `companies` | `name`, `domain` | | `contacts` | `firstname`, `lastname`, `email` | | `deals` | `dealname`, `amount`, `closedate`, `pipeline`, `dealstage` | | `products` | `name`, `description`, `price` | | `tickets` | `content`, `hs_pipeline`, `hs_pipeline_stage`, `hs_ticket_category`, `hs_ticket_priority`, `subject` |  Find a list of all properties for an object type using the [CRM Object Properties](https://developers.hubspot.com/docs/methods/crm-properties/get-properties) API. e.g. `GET https://api.hubapi.com/properties/v2/companies/properties`. Change the properties returned in the response using the `properties` array in the request body.
 *
 * The version of the OpenAPI document: v3
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.3.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace HubSpot\Client\Crm\Objects\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use HubSpot\Client\Crm\Objects\ApiException;
use HubSpot\Client\Crm\Objects\Configuration;
use HubSpot\Client\Crm\Objects\HeaderSelector;
use HubSpot\Client\Crm\Objects\ObjectSerializer;

/**
 * SearchApi Class Doc Comment
 *
 * @category Class
 * @package  HubSpot\Client\Crm\Objects
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SearchApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation doSearch
     *
     * @param  string $object_type object_type (required)
     * @param  \HubSpot\Client\Crm\Objects\Model\PublicObjectSearchRequest $public_object_search_request public_object_search_request (required)
     *
     * @throws \HubSpot\Client\Crm\Objects\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \HubSpot\Client\Crm\Objects\Model\CollectionResponseWithTotalSimplePublicObjectForwardPaging|\HubSpot\Client\Crm\Objects\Model\Error
     */
    public function doSearch($object_type, $public_object_search_request)
    {
        list($response) = $this->doSearchWithHttpInfo($object_type, $public_object_search_request);
        return $response;
    }

    /**
     * Operation doSearchWithHttpInfo
     *
     * @param  string $object_type (required)
     * @param  \HubSpot\Client\Crm\Objects\Model\PublicObjectSearchRequest $public_object_search_request (required)
     *
     * @throws \HubSpot\Client\Crm\Objects\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \HubSpot\Client\Crm\Objects\Model\CollectionResponseWithTotalSimplePublicObjectForwardPaging|\HubSpot\Client\Crm\Objects\Model\Error, HTTP status code, HTTP response headers (array of strings)
     */
    public function doSearchWithHttpInfo($object_type, $public_object_search_request)
    {
        $request = $this->doSearchRequest($object_type, $public_object_search_request);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\HubSpot\Client\Crm\Objects\Model\CollectionResponseWithTotalSimplePublicObjectForwardPaging' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\HubSpot\Client\Crm\Objects\Model\CollectionResponseWithTotalSimplePublicObjectForwardPaging', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                default:
                    if ('\HubSpot\Client\Crm\Objects\Model\Error' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\HubSpot\Client\Crm\Objects\Model\Error', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\HubSpot\Client\Crm\Objects\Model\CollectionResponseWithTotalSimplePublicObjectForwardPaging';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\HubSpot\Client\Crm\Objects\Model\CollectionResponseWithTotalSimplePublicObjectForwardPaging',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\HubSpot\Client\Crm\Objects\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation doSearchAsync
     *
     * @param  string $object_type (required)
     * @param  \HubSpot\Client\Crm\Objects\Model\PublicObjectSearchRequest $public_object_search_request (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function doSearchAsync($object_type, $public_object_search_request)
    {
        return $this->doSearchAsyncWithHttpInfo($object_type, $public_object_search_request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation doSearchAsyncWithHttpInfo
     *
     * @param  string $object_type (required)
     * @param  \HubSpot\Client\Crm\Objects\Model\PublicObjectSearchRequest $public_object_search_request (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function doSearchAsyncWithHttpInfo($object_type, $public_object_search_request)
    {
        $returnType = '\HubSpot\Client\Crm\Objects\Model\CollectionResponseWithTotalSimplePublicObjectForwardPaging';
        $request = $this->doSearchRequest($object_type, $public_object_search_request);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'doSearch'
     *
     * @param  string $object_type (required)
     * @param  \HubSpot\Client\Crm\Objects\Model\PublicObjectSearchRequest $public_object_search_request (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function doSearchRequest($object_type, $public_object_search_request)
    {
        // verify the required parameter 'object_type' is set
        if ($object_type === null || (is_array($object_type) && count($object_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $object_type when calling doSearch'
            );
        }
        // verify the required parameter 'public_object_search_request' is set
        if ($public_object_search_request === null || (is_array($public_object_search_request) && count($public_object_search_request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $public_object_search_request when calling doSearch'
            );
        }

        $resourcePath = '/crm/v3/objects/{objectType}/search';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($object_type !== null) {
            $resourcePath = str_replace(
                '{' . 'objectType' . '}',
                ObjectSerializer::toPathValue($object_type),
                $resourcePath
            );
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', '*/*']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', '*/*'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($public_object_search_request)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($public_object_search_request));
            } else {
                $httpBody = $public_object_search_request;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('hapikey');
        if ($apiKey !== null) {
            $queryParams['hapikey'] = $apiKey;
        }
        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
