<?php
/**
 * BasicApi
 * PHP version 5
 *
 * @category Class
 * @package  HubSpot\Client\Crm\Quotes
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Quotes
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: v3
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.2.2
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace HubSpot\Client\Crm\Quotes\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use HubSpot\Client\Crm\Quotes\ApiException;
use HubSpot\Client\Crm\Quotes\Configuration;
use HubSpot\Client\Crm\Quotes\HeaderSelector;
use HubSpot\Client\Crm\Quotes\ObjectSerializer;

/**
 * BasicApi Class Doc Comment
 *
 * @category Class
 * @package  HubSpot\Client\Crm\Quotes
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class BasicApi
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
     * @param int             $host_index (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $host_index = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $host_index;
    }

    /**
     * Set the host index
     *
     * @param  int Host index (required)
     */
    public function setHostIndex($host_index)
    {
        $this->hostIndex = $host_index;
    }

    /**
     * Get the host index
     *
     * @return Host index
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
     * Operation getById
     *
     * Read
     *
     * @param  string $quote_id quote_id (required)
     * @param  string[] $properties A comma separated list of the properties to be returned in the response. If any of the specified properties are not present on the requested object(s), they will be ignored. (optional)
     * @param  string[] $associations A comma separated list of object types to retrieve associated IDs for. If any of the specified associations do not exist, they will be ignored. (optional)
     * @param  bool $paginate_associations paginate_associations (optional, default to false)
     * @param  bool $archived Whether to return only results that have been archived. (optional, default to false)
     * @param  string $id_property The name of a property whose values are unique for this object type (optional)
     *
     * @throws \HubSpot\Client\Crm\Quotes\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \HubSpot\Client\Crm\Quotes\Model\SimplePublicObject|\HubSpot\Client\Crm\Quotes\Model\Error
     */
    public function getById($quote_id, $properties = null, $associations = null, $paginate_associations = false, $archived = false, $id_property = null)
    {
        list($response) = $this->getByIdWithHttpInfo($quote_id, $properties, $associations, $paginate_associations, $archived, $id_property);
        return $response;
    }

    /**
     * Operation getByIdWithHttpInfo
     *
     * Read
     *
     * @param  string $quote_id (required)
     * @param  string[] $properties A comma separated list of the properties to be returned in the response. If any of the specified properties are not present on the requested object(s), they will be ignored. (optional)
     * @param  string[] $associations A comma separated list of object types to retrieve associated IDs for. If any of the specified associations do not exist, they will be ignored. (optional)
     * @param  bool $paginate_associations (optional, default to false)
     * @param  bool $archived Whether to return only results that have been archived. (optional, default to false)
     * @param  string $id_property The name of a property whose values are unique for this object type (optional)
     *
     * @throws \HubSpot\Client\Crm\Quotes\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \HubSpot\Client\Crm\Quotes\Model\SimplePublicObject|\HubSpot\Client\Crm\Quotes\Model\Error, HTTP status code, HTTP response headers (array of strings)
     */
    public function getByIdWithHttpInfo($quote_id, $properties = null, $associations = null, $paginate_associations = false, $archived = false, $id_property = null)
    {
        $request = $this->getByIdRequest($quote_id, $properties, $associations, $paginate_associations, $archived, $id_property);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 200:
                    if ('\HubSpot\Client\Crm\Quotes\Model\SimplePublicObject' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\HubSpot\Client\Crm\Quotes\Model\SimplePublicObject', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                default:
                    if ('\HubSpot\Client\Crm\Quotes\Model\Error' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\HubSpot\Client\Crm\Quotes\Model\Error', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\HubSpot\Client\Crm\Quotes\Model\SimplePublicObject';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
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
                        '\HubSpot\Client\Crm\Quotes\Model\SimplePublicObject',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\HubSpot\Client\Crm\Quotes\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getByIdAsync
     *
     * Read
     *
     * @param  string $quote_id (required)
     * @param  string[] $properties A comma separated list of the properties to be returned in the response. If any of the specified properties are not present on the requested object(s), they will be ignored. (optional)
     * @param  string[] $associations A comma separated list of object types to retrieve associated IDs for. If any of the specified associations do not exist, they will be ignored. (optional)
     * @param  bool $paginate_associations (optional, default to false)
     * @param  bool $archived Whether to return only results that have been archived. (optional, default to false)
     * @param  string $id_property The name of a property whose values are unique for this object type (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getByIdAsync($quote_id, $properties = null, $associations = null, $paginate_associations = false, $archived = false, $id_property = null)
    {
        return $this->getByIdAsyncWithHttpInfo($quote_id, $properties, $associations, $paginate_associations, $archived, $id_property)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getByIdAsyncWithHttpInfo
     *
     * Read
     *
     * @param  string $quote_id (required)
     * @param  string[] $properties A comma separated list of the properties to be returned in the response. If any of the specified properties are not present on the requested object(s), they will be ignored. (optional)
     * @param  string[] $associations A comma separated list of object types to retrieve associated IDs for. If any of the specified associations do not exist, they will be ignored. (optional)
     * @param  bool $paginate_associations (optional, default to false)
     * @param  bool $archived Whether to return only results that have been archived. (optional, default to false)
     * @param  string $id_property The name of a property whose values are unique for this object type (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getByIdAsyncWithHttpInfo($quote_id, $properties = null, $associations = null, $paginate_associations = false, $archived = false, $id_property = null)
    {
        $returnType = '\HubSpot\Client\Crm\Quotes\Model\SimplePublicObject';
        $request = $this->getByIdRequest($quote_id, $properties, $associations, $paginate_associations, $archived, $id_property);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getById'
     *
     * @param  string $quote_id (required)
     * @param  string[] $properties A comma separated list of the properties to be returned in the response. If any of the specified properties are not present on the requested object(s), they will be ignored. (optional)
     * @param  string[] $associations A comma separated list of object types to retrieve associated IDs for. If any of the specified associations do not exist, they will be ignored. (optional)
     * @param  bool $paginate_associations (optional, default to false)
     * @param  bool $archived Whether to return only results that have been archived. (optional, default to false)
     * @param  string $id_property The name of a property whose values are unique for this object type (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getByIdRequest($quote_id, $properties = null, $associations = null, $paginate_associations = false, $archived = false, $id_property = null)
    {
        // verify the required parameter 'quote_id' is set
        if ($quote_id === null || (is_array($quote_id) && count($quote_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $quote_id when calling getById'
            );
        }

        $resourcePath = '/crm/v3/objects/quotes/{quoteId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if (is_array($properties)) {
            $properties = ObjectSerializer::serializeCollection($properties, 'multi', true);
        }
        if ($properties !== null) {
            $queryParams['properties'] = ObjectSerializer::toQueryValue($properties);
        }
        // query params
        if (is_array($associations)) {
            $associations = ObjectSerializer::serializeCollection($associations, 'multi', true);
        }
        if ($associations !== null) {
            $queryParams['associations'] = ObjectSerializer::toQueryValue($associations);
        }
        // query params
        if ($paginate_associations !== null) {
            $queryParams['paginateAssociations'] = ObjectSerializer::toQueryValue($paginate_associations);
        }
        // query params
        if ($archived !== null) {
            $queryParams['archived'] = ObjectSerializer::toQueryValue($archived);
        }
        // query params
        if ($id_property !== null) {
            $queryParams['idProperty'] = ObjectSerializer::toQueryValue($id_property);
        }

        // path params
        if ($quote_id !== null) {
            $resourcePath = str_replace(
                '{' . 'quoteId' . '}',
                ObjectSerializer::toPathValue($quote_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', '*/*']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', '*/*'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($_tempBody));
            } else {
                $httpBody = $_tempBody;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('hapikey');
        if ($apiKey !== null) {
            $queryParams['hapikey'] = $apiKey;
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

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getPage
     *
     * List
     *
     * @param  int $limit The maximum number of results to display per page. (optional, default to 10)
     * @param  string $after The paging cursor token of the last successfully read resource will be returned as the &#x60;paging.next.after&#x60; JSON property of a paged response containing more results. (optional)
     * @param  string[] $properties A comma separated list of the properties to be returned in the response. If any of the specified properties are not present on the requested object(s), they will be ignored. (optional)
     * @param  string[] $associations A comma separated list of object types to retrieve associated IDs for. If any of the specified associations do not exist, they will be ignored. (optional)
     * @param  bool $paginate_associations paginate_associations (optional, default to false)
     * @param  bool $archived Whether to return only results that have been archived. (optional, default to false)
     *
     * @throws \HubSpot\Client\Crm\Quotes\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \HubSpot\Client\Crm\Quotes\Model\CollectionResponseSimplePublicObject|\HubSpot\Client\Crm\Quotes\Model\Error
     */
    public function getPage($limit = 10, $after = null, $properties = null, $associations = null, $paginate_associations = false, $archived = false)
    {
        list($response) = $this->getPageWithHttpInfo($limit, $after, $properties, $associations, $paginate_associations, $archived);
        return $response;
    }

    /**
     * Operation getPageWithHttpInfo
     *
     * List
     *
     * @param  int $limit The maximum number of results to display per page. (optional, default to 10)
     * @param  string $after The paging cursor token of the last successfully read resource will be returned as the &#x60;paging.next.after&#x60; JSON property of a paged response containing more results. (optional)
     * @param  string[] $properties A comma separated list of the properties to be returned in the response. If any of the specified properties are not present on the requested object(s), they will be ignored. (optional)
     * @param  string[] $associations A comma separated list of object types to retrieve associated IDs for. If any of the specified associations do not exist, they will be ignored. (optional)
     * @param  bool $paginate_associations (optional, default to false)
     * @param  bool $archived Whether to return only results that have been archived. (optional, default to false)
     *
     * @throws \HubSpot\Client\Crm\Quotes\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \HubSpot\Client\Crm\Quotes\Model\CollectionResponseSimplePublicObject|\HubSpot\Client\Crm\Quotes\Model\Error, HTTP status code, HTTP response headers (array of strings)
     */
    public function getPageWithHttpInfo($limit = 10, $after = null, $properties = null, $associations = null, $paginate_associations = false, $archived = false)
    {
        $request = $this->getPageRequest($limit, $after, $properties, $associations, $paginate_associations, $archived);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 200:
                    if ('\HubSpot\Client\Crm\Quotes\Model\CollectionResponseSimplePublicObject' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\HubSpot\Client\Crm\Quotes\Model\CollectionResponseSimplePublicObject', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                default:
                    if ('\HubSpot\Client\Crm\Quotes\Model\Error' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\HubSpot\Client\Crm\Quotes\Model\Error', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\HubSpot\Client\Crm\Quotes\Model\CollectionResponseSimplePublicObject';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
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
                        '\HubSpot\Client\Crm\Quotes\Model\CollectionResponseSimplePublicObject',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\HubSpot\Client\Crm\Quotes\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getPageAsync
     *
     * List
     *
     * @param  int $limit The maximum number of results to display per page. (optional, default to 10)
     * @param  string $after The paging cursor token of the last successfully read resource will be returned as the &#x60;paging.next.after&#x60; JSON property of a paged response containing more results. (optional)
     * @param  string[] $properties A comma separated list of the properties to be returned in the response. If any of the specified properties are not present on the requested object(s), they will be ignored. (optional)
     * @param  string[] $associations A comma separated list of object types to retrieve associated IDs for. If any of the specified associations do not exist, they will be ignored. (optional)
     * @param  bool $paginate_associations (optional, default to false)
     * @param  bool $archived Whether to return only results that have been archived. (optional, default to false)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getPageAsync($limit = 10, $after = null, $properties = null, $associations = null, $paginate_associations = false, $archived = false)
    {
        return $this->getPageAsyncWithHttpInfo($limit, $after, $properties, $associations, $paginate_associations, $archived)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getPageAsyncWithHttpInfo
     *
     * List
     *
     * @param  int $limit The maximum number of results to display per page. (optional, default to 10)
     * @param  string $after The paging cursor token of the last successfully read resource will be returned as the &#x60;paging.next.after&#x60; JSON property of a paged response containing more results. (optional)
     * @param  string[] $properties A comma separated list of the properties to be returned in the response. If any of the specified properties are not present on the requested object(s), they will be ignored. (optional)
     * @param  string[] $associations A comma separated list of object types to retrieve associated IDs for. If any of the specified associations do not exist, they will be ignored. (optional)
     * @param  bool $paginate_associations (optional, default to false)
     * @param  bool $archived Whether to return only results that have been archived. (optional, default to false)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getPageAsyncWithHttpInfo($limit = 10, $after = null, $properties = null, $associations = null, $paginate_associations = false, $archived = false)
    {
        $returnType = '\HubSpot\Client\Crm\Quotes\Model\CollectionResponseSimplePublicObject';
        $request = $this->getPageRequest($limit, $after, $properties, $associations, $paginate_associations, $archived);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getPage'
     *
     * @param  int $limit The maximum number of results to display per page. (optional, default to 10)
     * @param  string $after The paging cursor token of the last successfully read resource will be returned as the &#x60;paging.next.after&#x60; JSON property of a paged response containing more results. (optional)
     * @param  string[] $properties A comma separated list of the properties to be returned in the response. If any of the specified properties are not present on the requested object(s), they will be ignored. (optional)
     * @param  string[] $associations A comma separated list of object types to retrieve associated IDs for. If any of the specified associations do not exist, they will be ignored. (optional)
     * @param  bool $paginate_associations (optional, default to false)
     * @param  bool $archived Whether to return only results that have been archived. (optional, default to false)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getPageRequest($limit = 10, $after = null, $properties = null, $associations = null, $paginate_associations = false, $archived = false)
    {

        $resourcePath = '/crm/v3/objects/quotes';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($limit !== null) {
            $queryParams['limit'] = ObjectSerializer::toQueryValue($limit);
        }
        // query params
        if ($after !== null) {
            $queryParams['after'] = ObjectSerializer::toQueryValue($after);
        }
        // query params
        if (is_array($properties)) {
            $properties = ObjectSerializer::serializeCollection($properties, 'multi', true);
        }
        if ($properties !== null) {
            $queryParams['properties'] = ObjectSerializer::toQueryValue($properties);
        }
        // query params
        if (is_array($associations)) {
            $associations = ObjectSerializer::serializeCollection($associations, 'multi', true);
        }
        if ($associations !== null) {
            $queryParams['associations'] = ObjectSerializer::toQueryValue($associations);
        }
        // query params
        if ($paginate_associations !== null) {
            $queryParams['paginateAssociations'] = ObjectSerializer::toQueryValue($paginate_associations);
        }
        // query params
        if ($archived !== null) {
            $queryParams['archived'] = ObjectSerializer::toQueryValue($archived);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', '*/*']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', '*/*'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($_tempBody));
            } else {
                $httpBody = $_tempBody;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('hapikey');
        if ($apiKey !== null) {
            $queryParams['hapikey'] = $apiKey;
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

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
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
