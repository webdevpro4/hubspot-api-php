<?php
/**
 * BatchApi
 * PHP version 7.3
 *
 * @category Class
 * @package  HubSpot\Client\Crm\Objects\FeedbackSubmissions
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Feedback Submissions
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: v3
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace HubSpot\Client\Crm\Objects\FeedbackSubmissions\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use HubSpot\Client\Crm\Objects\FeedbackSubmissions\ApiException;
use HubSpot\Client\Crm\Objects\FeedbackSubmissions\Configuration;
use HubSpot\Client\Crm\Objects\FeedbackSubmissions\HeaderSelector;
use HubSpot\Client\Crm\Objects\FeedbackSubmissions\ObjectSerializer;

/**
 * BatchApi Class Doc Comment
 *
 * @category Class
 * @package  HubSpot\Client\Crm\Objects\FeedbackSubmissions
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class BatchApi
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
     * Operation readBatch
     *
     * Read a batch of feedback submissions by internal ID, or unique property values
     *
     * @param  \HubSpot\Client\Crm\Objects\FeedbackSubmissions\Model\BatchReadInputSimplePublicObjectId $batch_read_input_simple_public_object_id batch_read_input_simple_public_object_id (required)
     * @param  bool $archived Whether to return only results that have been archived. (optional, default to false)
     *
     * @throws \HubSpot\Client\Crm\Objects\FeedbackSubmissions\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \HubSpot\Client\Crm\Objects\FeedbackSubmissions\Model\BatchResponseSimplePublicObject|\HubSpot\Client\Crm\Objects\FeedbackSubmissions\Model\BatchResponseSimplePublicObjectWithErrors|\HubSpot\Client\Crm\Objects\FeedbackSubmissions\Model\Error
     */
    public function readBatch($batch_read_input_simple_public_object_id, $archived = false)
    {
        list($response) = $this->readBatchWithHttpInfo($batch_read_input_simple_public_object_id, $archived);
        return $response;
    }

    /**
     * Operation readBatchWithHttpInfo
     *
     * Read a batch of feedback submissions by internal ID, or unique property values
     *
     * @param  \HubSpot\Client\Crm\Objects\FeedbackSubmissions\Model\BatchReadInputSimplePublicObjectId $batch_read_input_simple_public_object_id (required)
     * @param  bool $archived Whether to return only results that have been archived. (optional, default to false)
     *
     * @throws \HubSpot\Client\Crm\Objects\FeedbackSubmissions\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \HubSpot\Client\Crm\Objects\FeedbackSubmissions\Model\BatchResponseSimplePublicObject|\HubSpot\Client\Crm\Objects\FeedbackSubmissions\Model\BatchResponseSimplePublicObjectWithErrors|\HubSpot\Client\Crm\Objects\FeedbackSubmissions\Model\Error, HTTP status code, HTTP response headers (array of strings)
     */
    public function readBatchWithHttpInfo($batch_read_input_simple_public_object_id, $archived = false)
    {
        $request = $this->readBatchRequest($batch_read_input_simple_public_object_id, $archived);

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
                    if ('\HubSpot\Client\Crm\Objects\FeedbackSubmissions\Model\BatchResponseSimplePublicObject' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\HubSpot\Client\Crm\Objects\FeedbackSubmissions\Model\BatchResponseSimplePublicObject', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 207:
                    if ('\HubSpot\Client\Crm\Objects\FeedbackSubmissions\Model\BatchResponseSimplePublicObjectWithErrors' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\HubSpot\Client\Crm\Objects\FeedbackSubmissions\Model\BatchResponseSimplePublicObjectWithErrors', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                default:
                    if ('\HubSpot\Client\Crm\Objects\FeedbackSubmissions\Model\Error' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\HubSpot\Client\Crm\Objects\FeedbackSubmissions\Model\Error', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\HubSpot\Client\Crm\Objects\FeedbackSubmissions\Model\BatchResponseSimplePublicObject';
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
                        '\HubSpot\Client\Crm\Objects\FeedbackSubmissions\Model\BatchResponseSimplePublicObject',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 207:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\HubSpot\Client\Crm\Objects\FeedbackSubmissions\Model\BatchResponseSimplePublicObjectWithErrors',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\HubSpot\Client\Crm\Objects\FeedbackSubmissions\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation readBatchAsync
     *
     * Read a batch of feedback submissions by internal ID, or unique property values
     *
     * @param  \HubSpot\Client\Crm\Objects\FeedbackSubmissions\Model\BatchReadInputSimplePublicObjectId $batch_read_input_simple_public_object_id (required)
     * @param  bool $archived Whether to return only results that have been archived. (optional, default to false)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function readBatchAsync($batch_read_input_simple_public_object_id, $archived = false)
    {
        return $this->readBatchAsyncWithHttpInfo($batch_read_input_simple_public_object_id, $archived)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation readBatchAsyncWithHttpInfo
     *
     * Read a batch of feedback submissions by internal ID, or unique property values
     *
     * @param  \HubSpot\Client\Crm\Objects\FeedbackSubmissions\Model\BatchReadInputSimplePublicObjectId $batch_read_input_simple_public_object_id (required)
     * @param  bool $archived Whether to return only results that have been archived. (optional, default to false)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function readBatchAsyncWithHttpInfo($batch_read_input_simple_public_object_id, $archived = false)
    {
        $returnType = '\HubSpot\Client\Crm\Objects\FeedbackSubmissions\Model\BatchResponseSimplePublicObject';
        $request = $this->readBatchRequest($batch_read_input_simple_public_object_id, $archived);

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
     * Create request for operation 'readBatch'
     *
     * @param  \HubSpot\Client\Crm\Objects\FeedbackSubmissions\Model\BatchReadInputSimplePublicObjectId $batch_read_input_simple_public_object_id (required)
     * @param  bool $archived Whether to return only results that have been archived. (optional, default to false)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function readBatchRequest($batch_read_input_simple_public_object_id, $archived = false)
    {
        // verify the required parameter 'batch_read_input_simple_public_object_id' is set
        if ($batch_read_input_simple_public_object_id === null || (is_array($batch_read_input_simple_public_object_id) && count($batch_read_input_simple_public_object_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $batch_read_input_simple_public_object_id when calling readBatch'
            );
        }

        $resourcePath = '/crm/v3/objects/feedback_submissions/batch/read';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($archived !== null) {
            if('form' === 'form' && is_array($archived)) {
                foreach($archived as $key => $value) {
                    $queryParams[$key] = ObjectSerializer::toQueryValue($value);
                }
            }
            else {
                $queryParams['archived'] = ObjectSerializer::toQueryValue($archived);
            }
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
        if (isset($batch_read_input_simple_public_object_id)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($batch_read_input_simple_public_object_id));
            } else {
                $httpBody = $batch_read_input_simple_public_object_id;
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
