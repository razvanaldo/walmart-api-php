# #US\DSV\ItemResponses

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**errors** | [**\Walmart\Model\DSV\US\Items\GetAllItems200ResponseErrorsInner[]**](GetAllItems200ResponseErrorsInner.md) |  | [optional]
**itemResponse** | [**\Walmart\Model\DSV\US\Items\GetAllItems200ResponseItemResponseInner[]**](GetAllItems200ResponseItemResponseInner.md) | Items included in the response list |
**totalItems** | **int** | Total Items for the query | [optional]
**nextCursor** | **string** | Used for pagination when more than 200 items are retrieved. The nextCursor value of the response includes a link to another GET call which retrieves the next page of results. | [optional]


[[Back to Model list]](../) [[Back to API list]](../../Api/US/DSV) [[Back to README]](../../README.md)