# MagentoApi\TemandoShippingQuoteGuestCartCheckoutFieldManagementV1Api

All URIs are relative to */rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**temandoShippingQuoteGuestCartCheckoutFieldManagementV1SaveCheckoutFieldsPost**](TemandoShippingQuoteGuestCartCheckoutFieldManagementV1Api.md#temandoshippingquoteguestcartcheckoutfieldmanagementv1savecheckoutfieldspost) | **POST** /V1/guest-carts/{cartId}/checkout-fields |

# **temandoShippingQuoteGuestCartCheckoutFieldManagementV1SaveCheckoutFieldsPost**
> \MagentoApi\Model\ErrorResponse temandoShippingQuoteGuestCartCheckoutFieldManagementV1SaveCheckoutFieldsPost($cart_id, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new MagentoApi\Api\TemandoShippingQuoteGuestCartCheckoutFieldManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cart_id = "cart_id_example"; // string |
$body = new \stdClass; // object |

try {
    $result = $apiInstance->temandoShippingQuoteGuestCartCheckoutFieldManagementV1SaveCheckoutFieldsPost($cart_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemandoShippingQuoteGuestCartCheckoutFieldManagementV1Api->temandoShippingQuoteGuestCartCheckoutFieldManagementV1SaveCheckoutFieldsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **string**|  |
 **body** | [**object**](../Model/object.md)|  | [optional]

### Return type

[**\MagentoApi\Model\ErrorResponse**](../Model/ErrorResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)
