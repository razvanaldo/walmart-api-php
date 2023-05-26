# Walmart\Apis\CA\MPPromotionsApi  
All URIs are relative to https://marketplace.walmartapis.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getPromotionalPrices()**](PromotionsApi.md#getPromotionalPrices) | **GET** /v3/ca/promo/sku/{sku} | Get list of promotional prices for a SKU |
| [**updateBulkPromotionalPrice()**](PromotionsApi.md#updateBulkPromotionalPrice) | **POST** /v3/ca/feeds | Updates promotional prices in bulk |
| [**updatePromotionalPricesCA()**](PromotionsApi.md#updatePromotionalPricesCA) | **PUT** /v3/ca/price | Updates the promotional price |


## `getPromotionalPrices()`

```php
getPromotionalPrices($sku): string
```
Get list of promotional prices for a SKU

Retrieves a list of promotional prices for a single SKU.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure key-based authorization: signatureScheme
$config = new Walmart\Configuration('CLIENT_ID', 'CLIENT_SECRET')->setApiKey('WM_SEC.AUTH_SIGNATURE', 'YOUR_KEY');
// Configure key-based authorization: consumerIdScheme
$config = new Walmart\Configuration('CLIENT_ID', 'CLIENT_SECRET')->setApiKey('WM_CONSUMER.ID', 'YOUR_KEY');

$apiInstance = new Walmart\Apis\PromotionsApi(  
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$sku = 'sku_example'; // string | sku

try {
    $result = $apiInstance->getPromotionalPrices($sku);
    print_r($result);
} catch (Exception $e) {
    echo "Exception when calling PromotionsApi->getPromotionalPrices: {$e->getMessage()}\n";
}
```

### Parameters| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sku** | **string**| sku | |


### Return type

**string**

### Authorization

[signatureScheme](../../README.md#signatureScheme), [consumerIdScheme](../../README.md#consumerIdScheme)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateBulkPromotionalPrice()`

```php
updateBulkPromotionalPrice($feedType, $file): \Walmart\Models\MP\CA\Promotions\UpdateBulkPromotionalPrice200Response
```
Updates promotional prices in bulk

Updates or creates promotional prices for multiple specified SKUs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure key-based authorization: signatureScheme
$config = new Walmart\Configuration('CLIENT_ID', 'CLIENT_SECRET')->setApiKey('WM_SEC.AUTH_SIGNATURE', 'YOUR_KEY');
// Configure key-based authorization: consumerIdScheme
$config = new Walmart\Configuration('CLIENT_ID', 'CLIENT_SECRET')->setApiKey('WM_CONSUMER.ID', 'YOUR_KEY');

$apiInstance = new Walmart\Apis\PromotionsApi(  
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$feedType = 'promo'; // string | Feed Type
$file = "/path/to/file.txt"; // \SplFileObject | Feed file to upload

try {
    $result = $apiInstance->updateBulkPromotionalPrice($feedType, $file);
    print_r($result);
} catch (Exception $e) {
    echo "Exception when calling PromotionsApi->updateBulkPromotionalPrice: {$e->getMessage()}\n";
}
```

### Parameters| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **feedType** | **string**| Feed Type | [default to 'promo'] |
| **file** | **\SplFileObject****\SplFileObject**| Feed file to upload | |


### Return type

[**\Walmart\Models\MP\CA\Promotions\UpdateBulkPromotionalPrice200Response**](../Model/UpdateBulkPromotionalPrice200Response.md)

### Authorization

[signatureScheme](../../README.md#signatureScheme), [consumerIdScheme](../../README.md#consumerIdScheme)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePromotionalPricesCA()`

```php
updatePromotionalPricesCA($promo, $body): string
```
Updates the promotional price

Sellers can update or delete an existing promotion price as well as set up a new promotional price.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure key-based authorization: signatureScheme
$config = new Walmart\Configuration('CLIENT_ID', 'CLIENT_SECRET')->setApiKey('WM_SEC.AUTH_SIGNATURE', 'YOUR_KEY');
// Configure key-based authorization: consumerIdScheme
$config = new Walmart\Configuration('CLIENT_ID', 'CLIENT_SECRET')->setApiKey('WM_CONSUMER.ID', 'YOUR_KEY');

$apiInstance = new Walmart\Apis\PromotionsApi(  
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$promo = true; // bool | The promotional price. Set to 'true' in order to retrieve promotional prices
$body = <?xml version="1.0" encoding="UTF-8" standalone="yes"?>
<Price xmlns="http://walmart.com/">
    <itemIdentifier>
        <sku>promoSync3</sku>
    </itemIdentifier>
    <pricingList>
        <pricing effectiveDate="2016-09-09T21:29:39.420Z" expirationDate="2016-09-10T21:29:39.420Z" processMode="UPSERT">
            <currentPrice>
                <value amount="35.00"/>
            </currentPrice>
            <currentPriceType>REDUCED</currentPriceType>
            <comparisonPrice>
                <value amount="97.00"/>
            </comparisonPrice>
        </pricing>
        <pricing effectiveDate="2016-09-11T21:29:39.420Z" expirationDate="2016-09-12T21:29:39.420Z" processMode="UPSERT">
            <currentPrice>
                <value amount="44.00"/>
            </currentPrice>
        </pricing>
    </pricingList>
</Price>; // string

try {
    $result = $apiInstance->updatePromotionalPricesCA($promo, $body);
    print_r($result);
} catch (Exception $e) {
    echo "Exception when calling PromotionsApi->updatePromotionalPricesCA: {$e->getMessage()}\n";
}
```

### Parameters| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **promo** | **bool**| The promotional price. Set to 'true' in order to retrieve promotional prices | [default to true] |
| **body** | **string**|  | |


### Return type

**string**

### Authorization

[signatureScheme](../../README.md#signatureScheme), [consumerIdScheme](../../README.md#consumerIdScheme)

### HTTP request headers

- **Content-Type**: `application/xml`
- **Accept**: `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)