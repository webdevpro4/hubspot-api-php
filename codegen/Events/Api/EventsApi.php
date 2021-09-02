<?php
/**
 * EventsApi
 * PHP version 7.3
 *
 * @category Class
 * @package  HubSpot\Client\Events
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * HubSpot Events API
 *
 * API for accessing CRM object events.
 *
 * The version of the OpenAPI document: v3
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace HubSpot\Client\Events\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use HubSpot\Client\Events\ApiException;
use HubSpot\Client\Events\Configuration;
use HubSpot\Client\Events\HeaderSelector;
use HubSpot\Client\Events\ObjectSerializer;

/**
 * EventsApi Class Doc Comment
 *
 * @category Class
 * @package  HubSpot\Client\Events
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class EventsApi
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
     * Operation getPage
     *
     * Returns a collection of events matching a query.
     *
     * @param  \DateTime $occurred_after The starting time as an ISO 8601 timestamp. (optional)
     * @param  \DateTime $occurred_before The ending time as an ISO 8601 timestamp. (optional)
     * @param  string $object_type The type of object being selected. Valid values are hubspot named object types (e.g. &#x60;contact&#x60;). (optional)
     * @param  int $object_id The id of the selected object. If not present, then the &#x60;objectProperty&#x60; parameter is required. (optional)
     * @param  string $event_type Limits the response to the specified event type.  For example &#x60;&amp;eventType&#x3D;e_visited_page&#x60; returns only &#x60;e_visited_page&#x60; events.  If not present all event types are returned. (optional)
     * @param  string $after An additional parameter that may be used to get the next &#x60;limit&#x60; set of results. (optional)
     * @param  string $before before (optional)
     * @param  int $limit The maximum number of events to return, defaults to 20. (optional)
     * @param  string[] $sort Selects the sort field and order. Defaults to ascending, prefix with &#x60;-&#x60; for descending order. &#x60;occurredAt&#x60; is the only field supported for sorting. (optional)
     *
     * @throws \HubSpot\Client\Events\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \HubSpot\Client\Events\Model\CollectionResponseExternalUnifiedEvent|\HubSpot\Client\Events\Model\Error
     */
    public function getPage($occurred_after = null, $occurred_before = null, $object_type = null, $object_id = null, $event_type = null, $after = null, $before = null, $limit = null, $sort = null)
    {
        list($response) = $this->getPageWithHttpInfo($occurred_after, $occurred_before, $object_type, $object_id, $event_type, $after, $before, $limit, $sort);
        return $response;
    }

    /**
     * Operation getPageWithHttpInfo
     *
     * Returns a collection of events matching a query.
     *
     * @param  \DateTime $occurred_after The starting time as an ISO 8601 timestamp. (optional)
     * @param  \DateTime $occurred_before The ending time as an ISO 8601 timestamp. (optional)
     * @param  string $object_type The type of object being selected. Valid values are hubspot named object types (e.g. &#x60;contact&#x60;). (optional)
     * @param  int $object_id The id of the selected object. If not present, then the &#x60;objectProperty&#x60; parameter is required. (optional)
     * @param  string $event_type Limits the response to the specified event type.  For example &#x60;&amp;eventType&#x3D;e_visited_page&#x60; returns only &#x60;e_visited_page&#x60; events.  If not present all event types are returned. (optional)
     * @param  string $after An additional parameter that may be used to get the next &#x60;limit&#x60; set of results. (optional)
     * @param  string $before (optional)
     * @param  int $limit The maximum number of events to return, defaults to 20. (optional)
     * @param  string[] $sort Selects the sort field and order. Defaults to ascending, prefix with &#x60;-&#x60; for descending order. &#x60;occurredAt&#x60; is the only field supported for sorting. (optional)
     *
     * @throws \HubSpot\Client\Events\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \HubSpot\Client\Events\Model\CollectionResponseExternalUnifiedEvent|\HubSpot\Client\Events\Model\Error, HTTP status code, HTTP response headers (array of strings)
     */
    public function getPageWithHttpInfo($occurred_after = null, $occurred_before = null, $object_type = null, $object_id = null, $event_type = null, $after = null, $before = null, $limit = null, $sort = null)
    {
        $request = $this->getPageRequest($occurred_after, $occurred_before, $object_type, $object_id, $event_type, $after, $before, $limit, $sort);

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
                    if ('\HubSpot\Client\Events\Model\CollectionResponseExternalUnifiedEvent' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\HubSpot\Client\Events\Model\CollectionResponseExternalUnifiedEvent', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                default:
                    if ('\HubSpot\Client\Events\Model\Error' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\HubSpot\Client\Events\Model\Error', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\HubSpot\Client\Events\Model\CollectionResponseExternalUnifiedEvent';
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
                        '\HubSpot\Client\Events\Model\CollectionResponseExternalUnifiedEvent',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\HubSpot\Client\Events\Model\Error',
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
     * Returns a collection of events matching a query.
     *
     * @param  \DateTime $occurred_after The starting time as an ISO 8601 timestamp. (optional)
     * @param  \DateTime $occurred_before The ending time as an ISO 8601 timestamp. (optional)
     * @param  string $object_type The type of object being selected. Valid values are hubspot named object types (e.g. &#x60;contact&#x60;). (optional)
     * @param  int $object_id The id of the selected object. If not present, then the &#x60;objectProperty&#x60; parameter is required. (optional)
     * @param  string $event_type Limits the response to the specified event type.  For example &#x60;&amp;eventType&#x3D;e_visited_page&#x60; returns only &#x60;e_visited_page&#x60; events.  If not present all event types are returned. (optional)
     * @param  string $after An additional parameter that may be used to get the next &#x60;limit&#x60; set of results. (optional)
     * @param  string $before (optional)
     * @param  int $limit The maximum number of events to return, defaults to 20. (optional)
     * @param  string[] $sort Selects the sort field and order. Defaults to ascending, prefix with &#x60;-&#x60; for descending order. &#x60;occurredAt&#x60; is the only field supported for sorting. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getPageAsync($occurred_after = null, $occurred_before = null, $object_type = null, $object_id = null, $event_type = null, $after = null, $before = null, $limit = null, $sort = null)
    {
        return $this->getPageAsyncWithHttpInfo($occurred_after, $occurred_before, $object_type, $object_id, $event_type, $after, $before, $limit, $sort)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getPageAsyncWithHttpInfo
     *
     * Returns a collection of events matching a query.
     *
     * @param  \DateTime $occurred_after The starting time as an ISO 8601 timestamp. (optional)
     * @param  \DateTime $occurred_before The ending time as an ISO 8601 timestamp. (optional)
     * @param  string $object_type The type of object being selected. Valid values are hubspot named object types (e.g. &#x60;contact&#x60;). (optional)
     * @param  int $object_id The id of the selected object. If not present, then the &#x60;objectProperty&#x60; parameter is required. (optional)
     * @param  string $event_type Limits the response to the specified event type.  For example &#x60;&amp;eventType&#x3D;e_visited_page&#x60; returns only &#x60;e_visited_page&#x60; events.  If not present all event types are returned. (optional)
     * @param  string $after An additional parameter that may be used to get the next &#x60;limit&#x60; set of results. (optional)
     * @param  string $before (optional)
     * @param  int $limit The maximum number of events to return, defaults to 20. (optional)
     * @param  string[] $sort Selects the sort field and order. Defaults to ascending, prefix with &#x60;-&#x60; for descending order. &#x60;occurredAt&#x60; is the only field supported for sorting. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getPageAsyncWithHttpInfo($occurred_after = null, $occurred_before = null, $object_type = null, $object_id = null, $event_type = null, $after = null, $before = null, $limit = null, $sort = null)
    {
        $returnType = '\HubSpot\Client\Events\Model\CollectionResponseExternalUnifiedEvent';
        $request = $this->getPageRequest($occurred_after, $occurred_before, $object_type, $object_id, $event_type, $after, $before, $limit, $sort);

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
     * Create request for operation 'getPage'
     *
     * @param  \DateTime $occurred_after The starting time as an ISO 8601 timestamp. (optional)
     * @param  \DateTime $occurred_before The ending time as an ISO 8601 timestamp. (optional)
     * @param  string $object_type The type of object being selected. Valid values are hubspot named object types (e.g. &#x60;contact&#x60;). (optional)
     * @param  int $object_id The id of the selected object. If not present, then the &#x60;objectProperty&#x60; parameter is required. (optional)
     * @param  string $event_type Limits the response to the specified event type.  For example &#x60;&amp;eventType&#x3D;e_visited_page&#x60; returns only &#x60;e_visited_page&#x60; events.  If not present all event types are returned. (optional)
     * @param  string $after An additional parameter that may be used to get the next &#x60;limit&#x60; set of results. (optional)
     * @param  string $before (optional)
     * @param  int $limit The maximum number of events to return, defaults to 20. (optional)
     * @param  string[] $sort Selects the sort field and order. Defaults to ascending, prefix with &#x60;-&#x60; for descending order. &#x60;occurredAt&#x60; is the only field supported for sorting. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getPageRequest($occurred_after = null, $occurred_before = null, $object_type = null, $object_id = null, $event_type = null, $after = null, $before = null, $limit = null, $sort = null)
    {

        $resourcePath = '/events/v3/events';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($occurred_after !== null) {
            if('form' === 'form' && is_array($occurred_after)) {
                foreach($occurred_after as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['occurredAfter'] = $occurred_after;
            }
        }
        // query params
        if ($occurred_before !== null) {
            if('form' === 'form' && is_array($occurred_before)) {
                foreach($occurred_before as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['occurredBefore'] = $occurred_before;
            }
        }
        // query params
        if ($object_type !== null) {
            if('form' === 'form' && is_array($object_type)) {
                foreach($object_type as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['objectType'] = $object_type;
            }
        }
        // query params
        if ($object_id !== null) {
            if('form' === 'form' && is_array($object_id)) {
                foreach($object_id as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['objectId'] = $object_id;
            }
        }
        // query params
        if ($event_type !== null) {
            if('form' === 'form' && is_array($event_type)) {
                foreach($event_type as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['eventType'] = $event_type;
            }
        }
        // query params
        if ($after !== null) {
            if('form' === 'form' && is_array($after)) {
                foreach($after as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['after'] = $after;
            }
        }
        // query params
        if ($before !== null) {
            if('form' === 'form' && is_array($before)) {
                foreach($before as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['before'] = $before;
            }
        }
        // query params
        if ($limit !== null) {
            if('form' === 'form' && is_array($limit)) {
                foreach($limit as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['limit'] = $limit;
            }
        }
        // query params
        if ($sort !== null) {
            if('form' === 'form' && is_array($sort)) {
                foreach($sort as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['sort'] = $sort;
            }
        }




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
        if (count($formParams) > 0) {
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
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
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
