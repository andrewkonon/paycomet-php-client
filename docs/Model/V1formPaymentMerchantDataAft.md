# V1formPaymentMerchantDataAft

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**first_name** | **string** | Receiver name | [optional] 
**last_name** | **string** | Receiver lastname | [optional] 
**country** | **string** | Receiver country (ISO 6133 Alpha-3) | [optional] 
**address** | **string** | Address line of receiver. Format (^[a-zA-Z0-9\\s]{1,35}$) | [optional] 
**city** | **string** | City of the receiver. Format (^[a-zA-Z0-9\\s]{1,25}$) | [optional] 
**account_number** | **string** | Receiver account number. Format (^[a-zA-Z0-9]{34}$) | [optional] 
**account_number_type** | **int** | 00 (Other) | 01 (Card) | 02 (Account) | 03 (Cash) | 05 - Phone Number | 06 - Bank account number (BAN) + Bank Identification Сode (BIC) | 07 - Wallet ID  | 08 - | [optional] 
**utr** | **string** | Should be formatted as 0000000 + Year (n-1) last digit of current year + Julian date (n-3) day of the year  + hour (n-6) hhmmss + sequence number (n-2) from 00 to 99. | [optional] 
**bai** | **string** | Business Application Identifier. AA|BI | [optional] 
**sender_name** | **string** | The name of the sender | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

