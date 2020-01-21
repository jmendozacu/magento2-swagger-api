<?php
/**
 * SearchV1Api
 * PHP version 5
 *
 * @category Class
 * @package  MagentoApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Magento Community
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 2.3
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.16
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace MagentoApi\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use MagentoApi\ApiException;
use MagentoApi\Configuration;
use MagentoApi\HeaderSelector;
use MagentoApi\ObjectSerializer;

/**
 * SearchV1Api Class Doc Comment
 *
 * @category Class
 * @package  MagentoApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SearchV1Api
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
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation searchV1SearchGet
     *
     * @param  string $search_criteria_request_name search_criteria_request_name (optional)
     * @param  string $search_criteria_filter_groups_0_filters_0_field Field (optional)
     * @param  string $search_criteria_filter_groups_0_filters_0_value Value (optional)
     * @param  string $search_criteria_filter_groups_0_filters_0_condition_type Condition type (optional)
     * @param  string $search_criteria_sort_orders_0_field Sorting field. (optional)
     * @param  string $search_criteria_sort_orders_0_direction Sorting direction. (optional)
     * @param  int $search_criteria_page_size Page size. (optional)
     * @param  int $search_criteria_current_page Current page. (optional)
     *
     * @throws \MagentoApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \MagentoApi\Model\FrameworkSearchSearchResultInterface
     */
    public function searchV1SearchGet($search_criteria_request_name = null, $search_criteria_filter_groups_0_filters_0_field = null, $search_criteria_filter_groups_0_filters_0_value = null, $search_criteria_filter_groups_0_filters_0_condition_type = null, $search_criteria_sort_orders_0_field = null, $search_criteria_sort_orders_0_direction = null, $search_criteria_page_size = null, $search_criteria_current_page = null)
    {
        list($response) = $this->searchV1SearchGetWithHttpInfo($search_criteria_request_name, $search_criteria_filter_groups_0_filters_0_field, $search_criteria_filter_groups_0_filters_0_value, $search_criteria_filter_groups_0_filters_0_condition_type, $search_criteria_sort_orders_0_field, $search_criteria_sort_orders_0_direction, $search_criteria_page_size, $search_criteria_current_page);
        return $response;
    }

    /**
     * Operation searchV1SearchGetWithHttpInfo
     *
     * @param  string $search_criteria_request_name (optional)
     * @param  string $search_criteria_filter_groups_0_filters_0_field Field (optional)
     * @param  string $search_criteria_filter_groups_0_filters_0_value Value (optional)
     * @param  string $search_criteria_filter_groups_0_filters_0_condition_type Condition type (optional)
     * @param  string $search_criteria_sort_orders_0_field Sorting field. (optional)
     * @param  string $search_criteria_sort_orders_0_direction Sorting direction. (optional)
     * @param  int $search_criteria_page_size Page size. (optional)
     * @param  int $search_criteria_current_page Current page. (optional)
     *
     * @throws \MagentoApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \MagentoApi\Model\FrameworkSearchSearchResultInterface, HTTP status code, HTTP response headers (array of strings)
     */
    public function searchV1SearchGetWithHttpInfo($search_criteria_request_name = null, $search_criteria_filter_groups_0_filters_0_field = null, $search_criteria_filter_groups_0_filters_0_value = null, $search_criteria_filter_groups_0_filters_0_condition_type = null, $search_criteria_sort_orders_0_field = null, $search_criteria_sort_orders_0_direction = null, $search_criteria_page_size = null, $search_criteria_current_page = null)
    {
        $returnType = '\MagentoApi\Model\FrameworkSearchSearchResultInterface';
        $request = $this->searchV1SearchGetRequest($search_criteria_request_name, $search_criteria_filter_groups_0_filters_0_field, $search_criteria_filter_groups_0_filters_0_value, $search_criteria_filter_groups_0_filters_0_condition_type, $search_criteria_sort_orders_0_field, $search_criteria_sort_orders_0_direction, $search_criteria_page_size, $search_criteria_current_page);

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
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
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
                        '\MagentoApi\Model\FrameworkSearchSearchResultInterface',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 0:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\MagentoApi\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation searchV1SearchGetAsync
     *
     * 
     *
     * @param  string $search_criteria_request_name (optional)
     * @param  string $search_criteria_filter_groups_0_filters_0_field Field (optional)
     * @param  string $search_criteria_filter_groups_0_filters_0_value Value (optional)
     * @param  string $search_criteria_filter_groups_0_filters_0_condition_type Condition type (optional)
     * @param  string $search_criteria_sort_orders_0_field Sorting field. (optional)
     * @param  string $search_criteria_sort_orders_0_direction Sorting direction. (optional)
     * @param  int $search_criteria_page_size Page size. (optional)
     * @param  int $search_criteria_current_page Current page. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function searchV1SearchGetAsync($search_criteria_request_name = null, $search_criteria_filter_groups_0_filters_0_field = null, $search_criteria_filter_groups_0_filters_0_value = null, $search_criteria_filter_groups_0_filters_0_condition_type = null, $search_criteria_sort_orders_0_field = null, $search_criteria_sort_orders_0_direction = null, $search_criteria_page_size = null, $search_criteria_current_page = null)
    {
        return $this->searchV1SearchGetAsyncWithHttpInfo($search_criteria_request_name, $search_criteria_filter_groups_0_filters_0_field, $search_criteria_filter_groups_0_filters_0_value, $search_criteria_filter_groups_0_filters_0_condition_type, $search_criteria_sort_orders_0_field, $search_criteria_sort_orders_0_direction, $search_criteria_page_size, $search_criteria_current_page)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation searchV1SearchGetAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $search_criteria_request_name (optional)
     * @param  string $search_criteria_filter_groups_0_filters_0_field Field (optional)
     * @param  string $search_criteria_filter_groups_0_filters_0_value Value (optional)
     * @param  string $search_criteria_filter_groups_0_filters_0_condition_type Condition type (optional)
     * @param  string $search_criteria_sort_orders_0_field Sorting field. (optional)
     * @param  string $search_criteria_sort_orders_0_direction Sorting direction. (optional)
     * @param  int $search_criteria_page_size Page size. (optional)
     * @param  int $search_criteria_current_page Current page. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function searchV1SearchGetAsyncWithHttpInfo($search_criteria_request_name = null, $search_criteria_filter_groups_0_filters_0_field = null, $search_criteria_filter_groups_0_filters_0_value = null, $search_criteria_filter_groups_0_filters_0_condition_type = null, $search_criteria_sort_orders_0_field = null, $search_criteria_sort_orders_0_direction = null, $search_criteria_page_size = null, $search_criteria_current_page = null)
    {
        $returnType = '\MagentoApi\Model\FrameworkSearchSearchResultInterface';
        $request = $this->searchV1SearchGetRequest($search_criteria_request_name, $search_criteria_filter_groups_0_filters_0_field, $search_criteria_filter_groups_0_filters_0_value, $search_criteria_filter_groups_0_filters_0_condition_type, $search_criteria_sort_orders_0_field, $search_criteria_sort_orders_0_direction, $search_criteria_page_size, $search_criteria_current_page);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
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
     * Create request for operation 'searchV1SearchGet'
     *
     * @param  string $search_criteria_request_name (optional)
     * @param  string $search_criteria_filter_groups_0_filters_0_field Field (optional)
     * @param  string $search_criteria_filter_groups_0_filters_0_value Value (optional)
     * @param  string $search_criteria_filter_groups_0_filters_0_condition_type Condition type (optional)
     * @param  string $search_criteria_sort_orders_0_field Sorting field. (optional)
     * @param  string $search_criteria_sort_orders_0_direction Sorting direction. (optional)
     * @param  int $search_criteria_page_size Page size. (optional)
     * @param  int $search_criteria_current_page Current page. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function searchV1SearchGetRequest($search_criteria_request_name = null, $search_criteria_filter_groups_0_filters_0_field = null, $search_criteria_filter_groups_0_filters_0_value = null, $search_criteria_filter_groups_0_filters_0_condition_type = null, $search_criteria_sort_orders_0_field = null, $search_criteria_sort_orders_0_direction = null, $search_criteria_page_size = null, $search_criteria_current_page = null)
    {

        $resourcePath = '/V1/search';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($search_criteria_request_name !== null) {
            $queryParams['searchCriteria[requestName]'] = ObjectSerializer::toQueryValue($search_criteria_request_name);
        }
        // query params
        if ($search_criteria_filter_groups_0_filters_0_field !== null) {
            $queryParams['searchCriteria[filterGroups][0][filters][0][field]'] = ObjectSerializer::toQueryValue($search_criteria_filter_groups_0_filters_0_field);
        }
        // query params
        if ($search_criteria_filter_groups_0_filters_0_value !== null) {
            $queryParams['searchCriteria[filterGroups][0][filters][0][value]'] = ObjectSerializer::toQueryValue($search_criteria_filter_groups_0_filters_0_value);
        }
        // query params
        if ($search_criteria_filter_groups_0_filters_0_condition_type !== null) {
            $queryParams['searchCriteria[filterGroups][0][filters][0][conditionType]'] = ObjectSerializer::toQueryValue($search_criteria_filter_groups_0_filters_0_condition_type);
        }
        // query params
        if ($search_criteria_sort_orders_0_field !== null) {
            $queryParams['searchCriteria[sortOrders][0][field]'] = ObjectSerializer::toQueryValue($search_criteria_sort_orders_0_field);
        }
        // query params
        if ($search_criteria_sort_orders_0_direction !== null) {
            $queryParams['searchCriteria[sortOrders][0][direction]'] = ObjectSerializer::toQueryValue($search_criteria_sort_orders_0_direction);
        }
        // query params
        if ($search_criteria_page_size !== null) {
            $queryParams['searchCriteria[pageSize]'] = ObjectSerializer::toQueryValue($search_criteria_page_size);
        }
        // query params
        if ($search_criteria_current_page !== null) {
            $queryParams['searchCriteria[currentPage]'] = ObjectSerializer::toQueryValue($search_criteria_current_page);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'application/xml']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'application/xml'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
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
