# Exact Payments PHP SDK

Embedding payments into your software platform can be one of the most powerful value drivers for your customers and your top line. Imagine your software delivering the entire order-to-cash cycle including funding right into the customer’s bank account. We provide low code integration- With just a single API, you can go live with Exact Payments. Onboard customers, automated underwriting, receive webhook notifications when your customers is live and ready to take payments. We have all the payment types your customers want and their buyers need. Credit and debit cards plus ACH payments, Apple Pay, Google Pay, Paypal, recurring payments, card-on-file and more. Dive into our API Reference and add embedded payments with Exact today!


## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/TheLogicStudio/ExactPayPHP.git"
    }
  ],
  "require": {
    "TheLogicStudio/ExactPayPHP": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/Exact Payments PHP SDK/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new TheLogicStudio\ExactPay\Api\APIHealthCheckApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->apiHealthCheck();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APIHealthCheckApi->apiHealthCheck: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.exactpaysandbox.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*APIHealthCheckApi* | [**apiHealthCheck**](docs/Api/APIHealthCheckApi.md#apihealthcheck) | **GET** /status | Retrieve Status
*AccountManagementApi* | [**accountRegisterApplePayDomains**](docs/Api/AccountManagementApi.md#accountregisterapplepaydomains) | **POST** /account/{accountId}/apple-pay | Register Domain for Apple Pay
*AccountManagementApi* | [**deregisterApplePayDomains**](docs/Api/AccountManagementApi.md#deregisterapplepaydomains) | **DELETE** /account/{accountId}/apple-pay | Deregister Apple Pay Domains
*AccountManagementApi* | [**listApplePayDomains**](docs/Api/AccountManagementApi.md#listapplepaydomains) | **GET** /account/{accountId}/apple-pay | List Apple Pay Domains
*AccountManagementApi* | [**organizationOrganizationIdAccountAccountIdGet**](docs/Api/AccountManagementApi.md#organizationorganizationidaccountaccountidget) | **GET** /organization/{organizationId}/account/{accountId} | Retrieve Account by ID
*AccountManagementApi* | [**organizationOrganizationIdAccountGet**](docs/Api/AccountManagementApi.md#organizationorganizationidaccountget) | **GET** /organization/{organizationId}/account | List Accounts
*AccountManagementApi* | [**organizationOrganizationIdAccountSearchGet**](docs/Api/AccountManagementApi.md#organizationorganizationidaccountsearchget) | **GET** /organization/{organizationId}/account/search | Query Accounts
*AccountManagementApi* | [**putUpdateAccountById**](docs/Api/AccountManagementApi.md#putupdateaccountbyid) | **PUT** /organization/{organizationId}/account/{accountId} | Update Account
*AdminToolsApi* | [**getListNotes**](docs/Api/AdminToolsApi.md#getlistnotes) | **GET** /organization/{organizationId}/onboarding/{onboardingId}/note | List Notes
*AdminToolsApi* | [**organizationOrganizationIdOnboardingOnboardingIdRecheckPut**](docs/Api/AdminToolsApi.md#organizationorganizationidonboardingonboardingidrecheckput) | **PUT** /organization/{organizationId}/onboarding/{onboardingId}/recheck | Process Workflow
*AdminToolsApi* | [**organizationOrganizationIdOnboardingOnboardingIdRetryRulePut**](docs/Api/AdminToolsApi.md#organizationorganizationidonboardingonboardingidretryruleput) | **PUT** /organization/{organizationId}/onboarding/{onboardingId}/retry-rule | Process Verification
*AdminToolsApi* | [**organizationOrganizationIdOnboardingOnboardingIdStatusPut**](docs/Api/AdminToolsApi.md#organizationorganizationidonboardingonboardingidstatusput) | **PUT** /organization/{organizationId}/onboarding/{onboardingId}/status | Update Onboarding Status
*AdminToolsApi* | [**postCreateNotes**](docs/Api/AdminToolsApi.md#postcreatenotes) | **POST** /organization/{organizationId}/onboarding/{onboardingId}/note | Add Note
*AuthenticationApi* | [**createApplicationToken**](docs/Api/AuthenticationApi.md#createapplicationtoken) | **POST** /application/{applicationId}/token | Create Application Token
*AuthenticationApi* | [**createUserToken**](docs/Api/AuthenticationApi.md#createusertoken) | **POST** /token | Create User Token
*AuthenticationApi* | [**deleteApplicationToken**](docs/Api/AuthenticationApi.md#deleteapplicationtoken) | **DELETE** /application/{applicationId}/token/{tokenId} | Delete Application Token
*AuthenticationApi* | [**queryApplicationToken**](docs/Api/AuthenticationApi.md#queryapplicationtoken) | **GET** /application/{applicationId}/token | Query Application Tokens
*CustomersApi* | [**accountDeleteCustomerCustomerIdPaymentMethodToken**](docs/Api/CustomersApi.md#accountdeletecustomercustomeridpaymentmethodtoken) | **DELETE** /account/{accountId}/customer/{customerId}/payment-method/{paymentToken} | Delete Payment Method Associated with Customer by Token (Partner context)
*CustomersApi* | [**accountDeleteCustomerId**](docs/Api/CustomersApi.md#accountdeletecustomerid) | **DELETE** /account/{accountId}/customer/{customerId} | Delete Customer by ID (Partner context)
*CustomersApi* | [**accountGetCustomer**](docs/Api/CustomersApi.md#accountgetcustomer) | **GET** /account/{accountId}/customer | Query Customers (Partner context)
*CustomersApi* | [**accountGetCustomerCustomerIdPaymentMethodToken**](docs/Api/CustomersApi.md#accountgetcustomercustomeridpaymentmethodtoken) | **GET** /account/{accountId}/customer/{customerId}/payment-method/{paymentToken} | Get Payment Method Associated with Customer by Token (Partner context)
*CustomersApi* | [**accountGetCustomerCustomerIdPayments**](docs/Api/CustomersApi.md#accountgetcustomercustomeridpayments) | **GET** /account/{accountId}/customer/{customerId}/payments | Get Customer Payments (Partner context)
*CustomersApi* | [**accountGetCustomerDefaultPaymentMethod**](docs/Api/CustomersApi.md#accountgetcustomerdefaultpaymentmethod) | **GET** /account/{accountId}/customer/{customerId}/payment-method/default | Get Default Payment Method Associated to a Customer (Partner context)
*CustomersApi* | [**accountGetCustomerId**](docs/Api/CustomersApi.md#accountgetcustomerid) | **GET** /account/{accountId}/customer/{customerId} | Get Customer by ID (Partner context)
*CustomersApi* | [**accountGetCustomerIdPaymentMethod**](docs/Api/CustomersApi.md#accountgetcustomeridpaymentmethod) | **GET** /account/{accountId}/customer/{customerId}/payment-method | Query Payment Methods of a Customer (Partner context)
*CustomersApi* | [**accountGetCustomerTokenPaymentMethod**](docs/Api/CustomersApi.md#accountgetcustomertokenpaymentmethod) | **GET** /account/{accountId}/customer-token/{customerToken}/payment-method | Query Payment Methods for Customer by customer token (Partner context)
*CustomersApi* | [**accountPostCustomer**](docs/Api/CustomersApi.md#accountpostcustomer) | **POST** /account/{accountId}/customer | Create Customer (Partner context)
*CustomersApi* | [**accountPostCustomerIdPaymentMethod**](docs/Api/CustomersApi.md#accountpostcustomeridpaymentmethod) | **POST** /account/{accountId}/customer/{customerId}/payment-method | Attach Payment Method to a Customer (Partner context)
*CustomersApi* | [**accountPutCustomerId**](docs/Api/CustomersApi.md#accountputcustomerid) | **PUT** /account/{accountId}/customer/{customerId} | Update Customer by ID (Partner context)
*CustomersApi* | [**deleteCustomerCustomerIdPaymentMethodToken**](docs/Api/CustomersApi.md#deletecustomercustomeridpaymentmethodtoken) | **DELETE** /customer/{customerId}/payment-method/{paymentToken} | Delete Payment Method Associated with Customer by Token (Sub-merchant context)
*CustomersApi* | [**deleteCustomerId**](docs/Api/CustomersApi.md#deletecustomerid) | **DELETE** /customer/{customerId} | Delete Customer by ID (Sub-merchant context)
*CustomersApi* | [**getCustomer**](docs/Api/CustomersApi.md#getcustomer) | **GET** /customer | Query customers (Sub-merchant context)
*CustomersApi* | [**getCustomerCustomerIdPaymentMethodToken**](docs/Api/CustomersApi.md#getcustomercustomeridpaymentmethodtoken) | **GET** /customer/{customerId}/payment-method/{paymentToken} | Get Payment Method Associated with Customer by Token (Sub-merchant context)
*CustomersApi* | [**getCustomerCustomerIdPayments**](docs/Api/CustomersApi.md#getcustomercustomeridpayments) | **GET** /customer/{customerId}/payments | Get Customer Payments (Sub-merchant context)
*CustomersApi* | [**getCustomerId**](docs/Api/CustomersApi.md#getcustomerid) | **GET** /customer/{customerId} | Get Customer by ID (Sub-merchant context)
*CustomersApi* | [**getCustomerIdPaymentMethod**](docs/Api/CustomersApi.md#getcustomeridpaymentmethod) | **GET** /customer/{customerId}/payment-method | Query Payment Methods of a Customer (Sub-merchant context)
*CustomersApi* | [**getCustomerTokenPaymentMethod**](docs/Api/CustomersApi.md#getcustomertokenpaymentmethod) | **GET** /customer-token/{customerToken}/payment-method | Query Payment Methods for Customer by customer token (Sub-merchant context)
*CustomersApi* | [**postCustomer**](docs/Api/CustomersApi.md#postcustomer) | **POST** /customer | Create Customer for (Sub-merchant context)
*CustomersApi* | [**postCustomerIdPaymentMethod**](docs/Api/CustomersApi.md#postcustomeridpaymentmethod) | **POST** /customer/{customerId}/payment-method | Attach Payment Method to a Customer (Sub-merchant context)
*CustomersApi* | [**putCustomerId**](docs/Api/CustomersApi.md#putcustomerid) | **PUT** /customer/{customerId} | Update Customer by ID (Sub-merchant context)
*DocumentManagementApi* | [**createDocumentRequest**](docs/Api/DocumentManagementApi.md#createdocumentrequest) | **POST** /organization/{organizationId}/onboarding/{onboardingId}/document-request | Request Document
*DocumentManagementApi* | [**deleteDocumentById**](docs/Api/DocumentManagementApi.md#deletedocumentbyid) | **DELETE** /organization/{organizationId}/onboarding/{onboardingId}/document/{documentId} | Delete Document
*DocumentManagementApi* | [**deleteDocumentRequestById**](docs/Api/DocumentManagementApi.md#deletedocumentrequestbyid) | **DELETE** /organization/{organizationId}/onboarding/{onboardingId}/document-request/{documentRequestId} | Delete Document Request
*DocumentManagementApi* | [**getDocumentById**](docs/Api/DocumentManagementApi.md#getdocumentbyid) | **GET** /organization/{organizationId}/onboarding/{onboardingId}/document/{documentId}/download | Download Document
*DocumentManagementApi* | [**getDocuments**](docs/Api/DocumentManagementApi.md#getdocuments) | **GET** /organization/{organizationId}/onboarding/{onboardingId}/document | List Uploaded Documents
*DocumentManagementApi* | [**getDownloadAllDocuments**](docs/Api/DocumentManagementApi.md#getdownloadalldocuments) | **GET** /organization/{organizationId}/onboarding/{onboardingId}/document/download | Download All Documents
*DocumentManagementApi* | [**getListDocumentRequests**](docs/Api/DocumentManagementApi.md#getlistdocumentrequests) | **GET** /organization/{organizationId}/onboarding/{onboardingId}/document-request | List Document Requests
*DocumentManagementApi* | [**getRetrieveDocument**](docs/Api/DocumentManagementApi.md#getretrievedocument) | **GET** /organization/{organizationId}/onboarding/{onboardingId}/document/{documentId} | Retrieve Document
*DocumentManagementApi* | [**getRetrieveDocumentRequest**](docs/Api/DocumentManagementApi.md#getretrievedocumentrequest) | **GET** /organization/{organizationId}/onboarding/{onboardingId}/document-request/{documentRequestId} | Retrieve Document Request
*DocumentManagementApi* | [**listDocumentRequestByToken**](docs/Api/DocumentManagementApi.md#listdocumentrequestbytoken) | **GET** /document-request/{documentRequestToken} | List Document Requests by Token
*DocumentManagementApi* | [**putUpdateDocumentTypeById**](docs/Api/DocumentManagementApi.md#putupdatedocumenttypebyid) | **PUT** /organization/{organizationId}/onboarding/{onboardingId}/document/{documentId} | Update Document Type
*DocumentManagementApi* | [**updateDocumentRequest**](docs/Api/DocumentManagementApi.md#updatedocumentrequest) | **PUT** /organization/{organizationId}/onboarding/{onboardingId}/document-request/{documentRequestId} | Update Document Request
*DocumentManagementApi* | [**uploadDocument**](docs/Api/DocumentManagementApi.md#uploaddocument) | **POST** /organization/{organizationId}/onboarding/{onboardingId}/document | Upload Document
*DocumentManagementApi* | [**uploadDocumentByToken**](docs/Api/DocumentManagementApi.md#uploaddocumentbytoken) | **POST** /document/{token} | Upload Document using Token
*MerchantOnboardingApi* | [**createOnboarding**](docs/Api/MerchantOnboardingApi.md#createonboarding) | **POST** /organization/{organizationId}/onboarding | Create Onboarding Application
*MerchantOnboardingApi* | [**deleteOnboardingById**](docs/Api/MerchantOnboardingApi.md#deleteonboardingbyid) | **DELETE** /organization/{organizationId}/onboarding/{onboardingId} | Delete Onboarding
*MerchantOnboardingApi* | [**listFilterOptions**](docs/Api/MerchantOnboardingApi.md#listfilteroptions) | **GET** /organization/{organizationId}/onboarding/filters | List Filter Options
*MerchantOnboardingApi* | [**listMerchantCategoryCodes**](docs/Api/MerchantOnboardingApi.md#listmerchantcategorycodes) | **GET** /mcc | List Merchant Category Codes
*MerchantOnboardingApi* | [**listOnboardingByOrganization**](docs/Api/MerchantOnboardingApi.md#listonboardingbyorganization) | **GET** /organization/{organizationId}/onboarding | List Onboardings by Organization
*MerchantOnboardingApi* | [**listOnboardings**](docs/Api/MerchantOnboardingApi.md#listonboardings) | **GET** /onboarding | List Onboardings
*MerchantOnboardingApi* | [**retrieveOnboardingById**](docs/Api/MerchantOnboardingApi.md#retrieveonboardingbyid) | **GET** /organization/{organizationId}/onboarding/{onboardingId} | Retrieve Onboarding
*MerchantOnboardingApi* | [**searchOnboardingByBusinessName**](docs/Api/MerchantOnboardingApi.md#searchonboardingbybusinessname) | **GET** /onboarding/search/{businessName} | Search Onboarding by Business Name
*MerchantOnboardingApi* | [**searchOnboardingByOrganizationIdAndBusinessName**](docs/Api/MerchantOnboardingApi.md#searchonboardingbyorganizationidandbusinessname) | **GET** /organization/{organizationId}/onboarding/search/{businessName} | Search Onboarding by Organization identifier and Business Name
*OrdersApi* | [**accountAccountIdOrdersOrderIdGet**](docs/Api/OrdersApi.md#accountaccountidordersorderidget) | **GET** /account/{accountId}/orders/{orderId} | Get Order Details
*OrdersApi* | [**accountAccountIdOrdersOrderIdPut**](docs/Api/OrdersApi.md#accountaccountidordersorderidput) | **PUT** /account/{accountId}/orders/{orderId} | Update Order
*OrdersApi* | [**accountAccountIdOrdersPost**](docs/Api/OrdersApi.md#accountaccountidorderspost) | **POST** /account/{accountId}/orders | Create Order specifying an account
*OrdersApi* | [**ordersGet**](docs/Api/OrdersApi.md#ordersget) | **GET** /orders | List Orders
*OrdersApi* | [**ordersOrderIdAccessTokenPost**](docs/Api/OrdersApi.md#ordersorderidaccesstokenpost) | **POST** /orders/{orderId}/accessToken | Create New Access Token
*OrdersApi* | [**ordersOrderIdResetPut**](docs/Api/OrdersApi.md#ordersorderidresetput) | **PUT** /orders/{orderId}/reset | Reset Payment Attempts
*OrdersApi* | [**ordersPost**](docs/Api/OrdersApi.md#orderspost) | **POST** /orders | Create Order
*OrdersApi* | [**postAccountAccountIdOrdersOrderIdPay**](docs/Api/OrdersApi.md#postaccountaccountidordersorderidpay) | **POST** /account/{accountId}/orders/{orderId}/pay | Pay for Order with Token
*PaymentMethodsApi* | [**accountDeletePaymentMethod**](docs/Api/PaymentMethodsApi.md#accountdeletepaymentmethod) | **DELETE** /account/{accountId}/payment-method/{paymentToken} | Delete a Payment Method for a given Account
*PaymentMethodsApi* | [**accountGetPaymentMethod**](docs/Api/PaymentMethodsApi.md#accountgetpaymentmethod) | **GET** /account/{accountId}/payment-method/{paymentToken} | Retrieve a Payment Method for a given Account
*PaymentMethodsApi* | [**accountPostPaymentMethod**](docs/Api/PaymentMethodsApi.md#accountpostpaymentmethod) | **POST** /account/{accountId}/payment-method | Create Payment Method for a given Account
*PaymentMethodsApi* | [**accountPostVerifyMicrodeposits**](docs/Api/PaymentMethodsApi.md#accountpostverifymicrodeposits) | **POST** /account/{accountId}/payment-method/{payment-token}/verify | Verify micro-deposits on an ACH Payment Method for a given Account
*PaymentMethodsApi* | [**deletePaymentMethod**](docs/Api/PaymentMethodsApi.md#deletepaymentmethod) | **DELETE** /payment-method/{paymentToken} | Delete a Payment Method
*PaymentMethodsApi* | [**getPaymentMethod**](docs/Api/PaymentMethodsApi.md#getpaymentmethod) | **GET** /payment-method/{paymentToken} | Retrieve a Payment Method
*PaymentMethodsApi* | [**postPaymentMethod**](docs/Api/PaymentMethodsApi.md#postpaymentmethod) | **POST** /payment-method | Create Payment Method
*PaymentMethodsApi* | [**postVerifyMicrodeposits**](docs/Api/PaymentMethodsApi.md#postverifymicrodeposits) | **POST** /payment-method/{payment-token}/verify | Verify micro-deposits on an ACH Payment Method
*PaymentsApi* | [**accountCapturePayment**](docs/Api/PaymentsApi.md#accountcapturepayment) | **POST** /account/{accountId}/payments/{paymentId}/capture | Capture an existing authorization for a given Account
*PaymentsApi* | [**accountGetPayment**](docs/Api/PaymentsApi.md#accountgetpayment) | **GET** /account/{accountId}/payments/{paymentId} | Get details of a specific Payment for a given Account
*PaymentsApi* | [**accountGetPayments**](docs/Api/PaymentsApi.md#accountgetpayments) | **GET** /account/{accountId}/payments | Get Payments for a given Account
*PaymentsApi* | [**accountPostPayment**](docs/Api/PaymentsApi.md#accountpostpayment) | **POST** /account/{accountId}/payments | Create Payment for a given Account
*PaymentsApi* | [**accountRefundPayment**](docs/Api/PaymentsApi.md#accountrefundpayment) | **POST** /account/{accountId}/payments/{paymentId}/refund | Refund a specific Payment for a given Account
*PaymentsApi* | [**accountVoidPayment**](docs/Api/PaymentsApi.md#accountvoidpayment) | **POST** /account/{accountId}/payments/{paymentId}/void | Void a specific Payment for a given Account
*PaymentsApi* | [**capturePayment**](docs/Api/PaymentsApi.md#capturepayment) | **POST** /payments/{paymentId}/capture | Capture an existing authorization
*PaymentsApi* | [**getPayment**](docs/Api/PaymentsApi.md#getpayment) | **GET** /payments/{paymentId} | Get details of a specific Payment
*PaymentsApi* | [**getPayments**](docs/Api/PaymentsApi.md#getpayments) | **GET** /payments | Get Payments
*PaymentsApi* | [**postPayment**](docs/Api/PaymentsApi.md#postpayment) | **POST** /payments | Create Payment
*PaymentsApi* | [**refundPayment**](docs/Api/PaymentsApi.md#refundpayment) | **POST** /payments/{paymentId}/refund | Refund a specific payment
*PaymentsApi* | [**voidPayment**](docs/Api/PaymentsApi.md#voidpayment) | **POST** /payments/{paymentId}/void | Void a specific Payment
*ReportingApi* | [**deleteReport**](docs/Api/ReportingApi.md#deletereport) | **DELETE** /report/{reportId} | Delete Report
*ReportingApi* | [**getReport**](docs/Api/ReportingApi.md#getreport) | **GET** /report/{reportId} | Download Report
*ReportingApi* | [**getReportDetails**](docs/Api/ReportingApi.md#getreportdetails) | **GET** /report/{reportId}/details | Get Report Details
*ReportingApi* | [**getReports**](docs/Api/ReportingApi.md#getreports) | **GET** /report | List Reports
*ReportingApi* | [**postReport**](docs/Api/ReportingApi.md#postreport) | **POST** /report/{domain} | Create Report
*UnderwritingWorkflowApi* | [**deleteWorkflowById**](docs/Api/UnderwritingWorkflowApi.md#deleteworkflowbyid) | **DELETE** /organization/{organizationId}/onboarding-workflow/{workflowId} | Delete Workflow
*UnderwritingWorkflowApi* | [**disableWorkflowById**](docs/Api/UnderwritingWorkflowApi.md#disableworkflowbyid) | **PUT** /organization/{organizationId}/onboarding-workflow/{workflowId}/disable | Disable Workflow
*UnderwritingWorkflowApi* | [**enableWorkflowById**](docs/Api/UnderwritingWorkflowApi.md#enableworkflowbyid) | **PUT** /organization/{organizationId}/onboarding-workflow/{workflowId}/enable | Enable Workflow
*UnderwritingWorkflowApi* | [**getListWorkflows**](docs/Api/UnderwritingWorkflowApi.md#getlistworkflows) | **GET** /organization/{organizationId}/onboarding-workflow | List Underwriting Workflows
*UnderwritingWorkflowApi* | [**getRetrieveWorkflow**](docs/Api/UnderwritingWorkflowApi.md#getretrieveworkflow) | **GET** /organization/{organizationId}/onboarding-workflow/{workflowId} | Retrieve Workflow
*UnderwritingWorkflowApi* | [**postCreateWorkflow**](docs/Api/UnderwritingWorkflowApi.md#postcreateworkflow) | **POST** /organization/{organizationId}/onboarding-workflow | Create Workflow
*UnderwritingWorkflowApi* | [**putUpdateWorkflow**](docs/Api/UnderwritingWorkflowApi.md#putupdateworkflow) | **PUT** /organization/{organizationId}/onboarding-workflow/{workflowId} | Update Workflow
*UnderwritingWorkflowApi* | [**setDefaultWorkflowById**](docs/Api/UnderwritingWorkflowApi.md#setdefaultworkflowbyid) | **PUT** /organization/{organizationId}/onboarding-workflow/{workflowId}/default | Set Default Workflow
*WebhooksApi* | [**accountDeleteWebhook**](docs/Api/WebhooksApi.md#accountdeletewebhook) | **DELETE** /account/{accountId}/webhook/{webhookId} | Delete Webhook
*WebhooksApi* | [**accountDisableWebhook**](docs/Api/WebhooksApi.md#accountdisablewebhook) | **PUT** /account/{accountId}/webhook/{webhookId}/disable | Disable Webhook
*WebhooksApi* | [**accountEnableWebhook**](docs/Api/WebhooksApi.md#accountenablewebhook) | **PUT** /account/{accountId}/webhook/{webhookId}/enable | Enable Webhook
*WebhooksApi* | [**accountGetListWebhooks**](docs/Api/WebhooksApi.md#accountgetlistwebhooks) | **GET** /account/{accountId}/webhook | List Webhooks
*WebhooksApi* | [**accountGetRetrieveWebhook**](docs/Api/WebhooksApi.md#accountgetretrievewebhook) | **GET** /account/{accountId}/webhook/{webhookId} | Retrieve Webhook
*WebhooksApi* | [**accountPostCreateWebhook**](docs/Api/WebhooksApi.md#accountpostcreatewebhook) | **POST** /account/{accountId}/webhook | Create Webhook
*WebhooksApi* | [**accountUpdateWebhook**](docs/Api/WebhooksApi.md#accountupdatewebhook) | **PUT** /account/{accountId}/webhook/{webhookId} | Update Webhook
*WebhooksApi* | [**organizationOrganizationIdWebhookGet**](docs/Api/WebhooksApi.md#organizationorganizationidwebhookget) | **GET** /organization/{organizationId}/webhook | List Webhooks
*WebhooksApi* | [**organizationOrganizationIdWebhookPost**](docs/Api/WebhooksApi.md#organizationorganizationidwebhookpost) | **POST** /organization/{organizationId}/webhook | Create Webhook
*WebhooksApi* | [**organizationOrganizationIdWebhookWebhookIdDelete**](docs/Api/WebhooksApi.md#organizationorganizationidwebhookwebhookiddelete) | **DELETE** /organization/{organizationId}/webhook/{webhookId} | Delete Webhook
*WebhooksApi* | [**organizationOrganizationIdWebhookWebhookIdDisablePut**](docs/Api/WebhooksApi.md#organizationorganizationidwebhookwebhookiddisableput) | **PUT** /organization/{organizationId}/webhook/{webhookId}/disable | Disable Webhook
*WebhooksApi* | [**organizationOrganizationIdWebhookWebhookIdEnablePut**](docs/Api/WebhooksApi.md#organizationorganizationidwebhookwebhookidenableput) | **PUT** /organization/{organizationId}/webhook/{webhookId}/enable | Enable Webhook
*WebhooksApi* | [**organizationOrganizationIdWebhookWebhookIdGet**](docs/Api/WebhooksApi.md#organizationorganizationidwebhookwebhookidget) | **GET** /organization/{organizationId}/webhook/{webhookId} | Retrieve Webhook
*WebhooksApi* | [**organizationOrganizationIdWebhookWebhookIdPut**](docs/Api/WebhooksApi.md#organizationorganizationidwebhookwebhookidput) | **PUT** /organization/{organizationId}/webhook/{webhookId} | Update Webhook

## Models

- [AcceptanceMethods](docs/Model/AcceptanceMethods.md)
- [Account](docs/Model/Account.md)
- [AccountAccountIdOrdersOrderIdGet404Response](docs/Model/AccountAccountIdOrdersOrderIdGet404Response.md)
- [AccountAccountIdOrdersOrderIdGet404ResponseMetadata](docs/Model/AccountAccountIdOrdersOrderIdGet404ResponseMetadata.md)
- [AccountAccountIdOrdersOrderIdGet404ResponseMetadataMessage](docs/Model/AccountAccountIdOrdersOrderIdGet404ResponseMetadataMessage.md)
- [AccountAch](docs/Model/AccountAch.md)
- [AccountDeleteCustomerCustomerIdPaymentMethodToken400Response](docs/Model/AccountDeleteCustomerCustomerIdPaymentMethodToken400Response.md)
- [AccountGateway](docs/Model/AccountGateway.md)
- [AccountGetCustomer403Response](docs/Model/AccountGetCustomer403Response.md)
- [AccountGetCustomer404Response](docs/Model/AccountGetCustomer404Response.md)
- [AccountMode](docs/Model/AccountMode.md)
- [AccountPostCustomer400Response](docs/Model/AccountPostCustomer400Response.md)
- [AccountPostCustomerIdPaymentMethod400Response](docs/Model/AccountPostCustomerIdPaymentMethod400Response.md)
- [AccountRegisterApplePayDomains400Response](docs/Model/AccountRegisterApplePayDomains400Response.md)
- [AccountRegisterApplePayDomains400ResponseIssuesInner](docs/Model/AccountRegisterApplePayDomains400ResponseIssuesInner.md)
- [AccountReportDetails](docs/Model/AccountReportDetails.md)
- [AccountReportDetailsKycResultsInner](docs/Model/AccountReportDetailsKycResultsInner.md)
- [AccountReportDetailsMerchant](docs/Model/AccountReportDetailsMerchant.md)
- [AccountReportDetailsMerchantAnticipatedTransAmounts](docs/Model/AccountReportDetailsMerchantAnticipatedTransAmounts.md)
- [AccountReportDetailsMerchantBankingDetails](docs/Model/AccountReportDetailsMerchantBankingDetails.md)
- [AccountReportDetailsMerchantBusinessProfile](docs/Model/AccountReportDetailsMerchantBusinessProfile.md)
- [AccountReportDetailsMerchantBusinessProfileAcceptanceMethods](docs/Model/AccountReportDetailsMerchantBusinessProfileAcceptanceMethods.md)
- [AccountReportDetailsMerchantPrincipalInner](docs/Model/AccountReportDetailsMerchantPrincipalInner.md)
- [AccountReportDetailsMerchantPrincipalInnerAddress](docs/Model/AccountReportDetailsMerchantPrincipalInnerAddress.md)
- [AccountRequest](docs/Model/AccountRequest.md)
- [AccountRequestAddress](docs/Model/AccountRequestAddress.md)
- [AccountStatus](docs/Model/AccountStatus.md)
- [AccountType](docs/Model/AccountType.md)
- [AccountWithGateway](docs/Model/AccountWithGateway.md)
- [AccountWithoutGateway](docs/Model/AccountWithoutGateway.md)
- [Ach](docs/Model/Ach.md)
- [AchAccountDetails](docs/Model/AchAccountDetails.md)
- [AchDetailsSchema](docs/Model/AchDetailsSchema.md)
- [AchPayment](docs/Model/AchPayment.md)
- [AchPaymentMethod](docs/Model/AchPaymentMethod.md)
- [AnticipatedTransAmounts](docs/Model/AnticipatedTransAmounts.md)
- [ApiHealthCheck200Response](docs/Model/ApiHealthCheck200Response.md)
- [ApplePayDomains](docs/Model/ApplePayDomains.md)
- [ApplicationToken](docs/Model/ApplicationToken.md)
- [ApplicationTokenResponse](docs/Model/ApplicationTokenResponse.md)
- [AvsCheck](docs/Model/AvsCheck.md)
- [BadRequestInvalidWorkflowError](docs/Model/BadRequestInvalidWorkflowError.md)
- [BadRequestInvalidWorkflowErrorErrorsInner](docs/Model/BadRequestInvalidWorkflowErrorErrorsInner.md)
- [BadRequestX2ContextError](docs/Model/BadRequestX2ContextError.md)
- [BadRequestX2ContextErrorErrorsInner](docs/Model/BadRequestX2ContextErrorErrorsInner.md)
- [BadRequestX2ErrorV410](docs/Model/BadRequestX2ErrorV410.md)
- [BadRequestX2ErrorV410PathIssues](docs/Model/BadRequestX2ErrorV410PathIssues.md)
- [BadRequestX2ErrorV410PathIssuesFieldPathInner](docs/Model/BadRequestX2ErrorV410PathIssuesFieldPathInner.md)
- [BadRequestZodError](docs/Model/BadRequestZodError.md)
- [BankBoarding](docs/Model/BankBoarding.md)
- [BankResponse](docs/Model/BankResponse.md)
- [BankingDetails](docs/Model/BankingDetails.md)
- [BillingAddress](docs/Model/BillingAddress.md)
- [BillingCustomer](docs/Model/BillingCustomer.md)
- [BillingDetailsAddress](docs/Model/BillingDetailsAddress.md)
- [BillingDetailsAddressSchema](docs/Model/BillingDetailsAddressSchema.md)
- [BillingDetailsSchema](docs/Model/BillingDetailsSchema.md)
- [BusinessClassification](docs/Model/BusinessClassification.md)
- [BusinessProfile](docs/Model/BusinessProfile.md)
- [BusinessRule](docs/Model/BusinessRule.md)
- [BusinessRuleOptionsInner](docs/Model/BusinessRuleOptionsInner.md)
- [BusinessRuleOptionsInnerValue1](docs/Model/BusinessRuleOptionsInnerValue1.md)
- [BusinessRuleOptionsInnerValue2](docs/Model/BusinessRuleOptionsInnerValue2.md)
- [CaptureDetails](docs/Model/CaptureDetails.md)
- [CapturePayment400Response](docs/Model/CapturePayment400Response.md)
- [CapturePayment400ResponseMetadata](docs/Model/CapturePayment400ResponseMetadata.md)
- [CapturePayment400ResponseMetadataMessage](docs/Model/CapturePayment400ResponseMetadataMessage.md)
- [CardDetailsSchema](docs/Model/CardDetailsSchema.md)
- [CardDetailsSchemaChecks](docs/Model/CardDetailsSchemaChecks.md)
- [CardDetailsSchemaExpiry](docs/Model/CardDetailsSchemaExpiry.md)
- [CardPayment](docs/Model/CardPayment.md)
- [CardPaymentMethod](docs/Model/CardPaymentMethod.md)
- [ChargebackReportDetails](docs/Model/ChargebackReportDetails.md)
- [ContextErrorResponseCreateOnboarding](docs/Model/ContextErrorResponseCreateOnboarding.md)
- [ContextErrorResponseSystemError](docs/Model/ContextErrorResponseSystemError.md)
- [ContextErrorResponseUploadDocument](docs/Model/ContextErrorResponseUploadDocument.md)
- [CreateAchPaymentMethod](docs/Model/CreateAchPaymentMethod.md)
- [CreateAchPaymentMethodAch](docs/Model/CreateAchPaymentMethodAch.md)
- [CreateAchPaymentMethodBillingDetails](docs/Model/CreateAchPaymentMethodBillingDetails.md)
- [CreateApplicationTokenRequest](docs/Model/CreateApplicationTokenRequest.md)
- [CreateCardPaymentMethod](docs/Model/CreateCardPaymentMethod.md)
- [CreateCardPaymentMethodBillingDetails](docs/Model/CreateCardPaymentMethodBillingDetails.md)
- [CreateCardPaymentMethodCard](docs/Model/CreateCardPaymentMethodCard.md)
- [CreateCardPaymentMethodCardExpiry](docs/Model/CreateCardPaymentMethodCardExpiry.md)
- [CreateDocumentRequestRequest](docs/Model/CreateDocumentRequestRequest.md)
- [CreateEftPaymentMethod](docs/Model/CreateEftPaymentMethod.md)
- [CreateEftPaymentMethodBillingDetails](docs/Model/CreateEftPaymentMethodBillingDetails.md)
- [CreateEftPaymentMethodEft](docs/Model/CreateEftPaymentMethodEft.md)
- [CreateOnboarding400Response](docs/Model/CreateOnboarding400Response.md)
- [CreateOnboarding404Response](docs/Model/CreateOnboarding404Response.md)
- [CreatePayment](docs/Model/CreatePayment.md)
- [CreatePaymentMethod](docs/Model/CreatePaymentMethod.md)
- [CreateUserTokenRequest](docs/Model/CreateUserTokenRequest.md)
- [CreditCardDetails](docs/Model/CreditCardDetails.md)
- [Customer](docs/Model/Customer.md)
- [CustomerAddress](docs/Model/CustomerAddress.md)
- [CustomerOrPaymentMethod](docs/Model/CustomerOrPaymentMethod.md)
- [CustomerPathIssues](docs/Model/CustomerPathIssues.md)
- [CvdCheck](docs/Model/CvdCheck.md)
- [Document](docs/Model/Document.md)
- [DocumentRequest](docs/Model/DocumentRequest.md)
- [DocumentSchema](docs/Model/DocumentSchema.md)
- [DocumentUploadType](docs/Model/DocumentUploadType.md)
- [Dwolla](docs/Model/Dwolla.md)
- [Elavon](docs/Model/Elavon.md)
- [ExactResponse](docs/Model/ExactResponse.md)
- [FilterOnboardings](docs/Model/FilterOnboardings.md)
- [FundingReportDetails](docs/Model/FundingReportDetails.md)
- [FundingReportDetailsAmount](docs/Model/FundingReportDetailsAmount.md)
- [GetReportDetails400Response](docs/Model/GetReportDetails400Response.md)
- [InviteAccept](docs/Model/InviteAccept.md)
- [InviteRequest](docs/Model/InviteRequest.md)
- [InviteResponse](docs/Model/InviteResponse.md)
- [InviteUser](docs/Model/InviteUser.md)
- [KycResults](docs/Model/KycResults.md)
- [Level3](docs/Model/Level3.md)
- [LineItem](docs/Model/LineItem.md)
- [LinkPaymentMethod](docs/Model/LinkPaymentMethod.md)
- [LinkPaymentMethodPathIssues](docs/Model/LinkPaymentMethodPathIssues.md)
- [LinkTokenToCustomer](docs/Model/LinkTokenToCustomer.md)
- [ListDocumentRequestByToken200ResponseInner](docs/Model/ListDocumentRequestByToken200ResponseInner.md)
- [LookUpCustomer](docs/Model/LookUpCustomer.md)
- [MastercardRule](docs/Model/MastercardRule.md)
- [MastercardRuleMerchantOptions](docs/Model/MastercardRuleMerchantOptions.md)
- [MastercardRuleOptions](docs/Model/MastercardRuleOptions.md)
- [MastercardRulePrincipalOptions](docs/Model/MastercardRulePrincipalOptions.md)
- [Mcc](docs/Model/Mcc.md)
- [Merchant](docs/Model/Merchant.md)
- [MerchantAddress](docs/Model/MerchantAddress.md)
- [MerchantAddressWithValidation](docs/Model/MerchantAddressWithValidation.md)
- [MerchantTermsNConditions](docs/Model/MerchantTermsNConditions.md)
- [MerchantWithoutPrincipal](docs/Model/MerchantWithoutPrincipal.md)
- [MerchantWithoutPrincipalTermsNConditions](docs/Model/MerchantWithoutPrincipalTermsNConditions.md)
- [MicroDepositVerificationRequest](docs/Model/MicroDepositVerificationRequest.md)
- [NewCustomer](docs/Model/NewCustomer.md)
- [NotFoundError](docs/Model/NotFoundError.md)
- [OFACRule](docs/Model/OFACRule.md)
- [OFACRuleOptions](docs/Model/OFACRuleOptions.md)
- [OnboardingCreateResponse](docs/Model/OnboardingCreateResponse.md)
- [OnboardingDocumentRequestCreate](docs/Model/OnboardingDocumentRequestCreate.md)
- [OnboardingDocumentRequestResponse](docs/Model/OnboardingDocumentRequestResponse.md)
- [OnboardingDocumentRequestUpdate](docs/Model/OnboardingDocumentRequestUpdate.md)
- [OnboardingMerchant](docs/Model/OnboardingMerchant.md)
- [OnboardingNote](docs/Model/OnboardingNote.md)
- [OnboardingRequest](docs/Model/OnboardingRequest.md)
- [OnboardingRetryRuleRequest](docs/Model/OnboardingRetryRuleRequest.md)
- [OnboardingTermsNConditions](docs/Model/OnboardingTermsNConditions.md)
- [OnboardingWithPrincipalResponse](docs/Model/OnboardingWithPrincipalResponse.md)
- [OnboardingWithoutPrincipal](docs/Model/OnboardingWithoutPrincipal.md)
- [Order](docs/Model/Order.md)
- [OrderAccessToken](docs/Model/OrderAccessToken.md)
- [OrderAccessTokenDetail](docs/Model/OrderAccessTokenDetail.md)
- [OrderOptions](docs/Model/OrderOptions.md)
- [OrderResponse](docs/Model/OrderResponse.md)
- [OrderResponseAccessToken](docs/Model/OrderResponseAccessToken.md)
- [OrderResponseBilling](docs/Model/OrderResponseBilling.md)
- [OrderResponseBillingAddress](docs/Model/OrderResponseBillingAddress.md)
- [OrderResponseLevel3](docs/Model/OrderResponseLevel3.md)
- [OrderResponseLevel3LineItemsInner](docs/Model/OrderResponseLevel3LineItemsInner.md)
- [OrderResponseLevel3ShipTo](docs/Model/OrderResponseLevel3ShipTo.md)
- [OrderResponseLevel3ShipToAddress](docs/Model/OrderResponseLevel3ShipToAddress.md)
- [OrderResponseOptions](docs/Model/OrderResponseOptions.md)
- [OrderResponseReference](docs/Model/OrderResponseReference.md)
- [OrderResponseSoftDescriptor](docs/Model/OrderResponseSoftDescriptor.md)
- [OrderSearch](docs/Model/OrderSearch.md)
- [ParentIdRequest](docs/Model/ParentIdRequest.md)
- [PayFacRequest](docs/Model/PayFacRequest.md)
- [PayFacResponse](docs/Model/PayFacResponse.md)
- [PayOrder](docs/Model/PayOrder.md)
- [PayOrderPaymentMethod](docs/Model/PayOrderPaymentMethod.md)
- [PayOrderResponse](docs/Model/PayOrderResponse.md)
- [PayOrderResponseOrder](docs/Model/PayOrderResponseOrder.md)
- [PayWithAch](docs/Model/PayWithAch.md)
- [PayWithAchAch](docs/Model/PayWithAchAch.md)
- [PayWithApplePay](docs/Model/PayWithApplePay.md)
- [PayWithApplePayApplePay](docs/Model/PayWithApplePayApplePay.md)
- [PayWithCreditCard](docs/Model/PayWithCreditCard.md)
- [PayWithCreditCardCreditCard](docs/Model/PayWithCreditCardCreditCard.md)
- [PayWithDebitBillPay](docs/Model/PayWithDebitBillPay.md)
- [PayWithDebitBillPayDebitBillPay](docs/Model/PayWithDebitBillPayDebitBillPay.md)
- [PayWithGooglePay](docs/Model/PayWithGooglePay.md)
- [PayWithGooglePayGooglePay](docs/Model/PayWithGooglePayGooglePay.md)
- [PayWithToken](docs/Model/PayWithToken.md)
- [Payment](docs/Model/Payment.md)
- [PaymentMethod](docs/Model/PaymentMethod.md)
- [PaymentMethodChoice](docs/Model/PaymentMethodChoice.md)
- [PaymentMethodPathIssues](docs/Model/PaymentMethodPathIssues.md)
- [PaymentOptions](docs/Model/PaymentOptions.md)
- [Permissions](docs/Model/Permissions.md)
- [PlaidAuthRule](docs/Model/PlaidAuthRule.md)
- [PlaidBalanceRule](docs/Model/PlaidBalanceRule.md)
- [PlaidBalanceRuleOptions](docs/Model/PlaidBalanceRuleOptions.md)
- [PlaidIdentityRule](docs/Model/PlaidIdentityRule.md)
- [PostAccountAccountIdOrdersOrderIdPay400Response](docs/Model/PostAccountAccountIdOrdersOrderIdPay400Response.md)
- [PostAccountAccountIdOrdersOrderIdPay400ResponseMetadata](docs/Model/PostAccountAccountIdOrdersOrderIdPay400ResponseMetadata.md)
- [PostAccountAccountIdOrdersOrderIdPay404Response](docs/Model/PostAccountAccountIdOrdersOrderIdPay404Response.md)
- [PostAccountAccountIdOrdersOrderIdPay404ResponseMetadata](docs/Model/PostAccountAccountIdOrdersOrderIdPay404ResponseMetadata.md)
- [PostCreateNotesRequest](docs/Model/PostCreateNotesRequest.md)
- [PostCreateWorkflow201Response](docs/Model/PostCreateWorkflow201Response.md)
- [PostCreateWorkflow400Response](docs/Model/PostCreateWorkflow400Response.md)
- [PostCreateWorkflowRequest](docs/Model/PostCreateWorkflowRequest.md)
- [PostPayment422Response](docs/Model/PostPayment422Response.md)
- [PostPaymentMethod400Response](docs/Model/PostPaymentMethod400Response.md)
- [PostPaymentMethod403Response](docs/Model/PostPaymentMethod403Response.md)
- [PostPaymentMethod404Response](docs/Model/PostPaymentMethod404Response.md)
- [PostPaymentMethod406Response](docs/Model/PostPaymentMethod406Response.md)
- [PostPaymentMethod428Response](docs/Model/PostPaymentMethod428Response.md)
- [PostPaymentMethod500Response](docs/Model/PostPaymentMethod500Response.md)
- [PostPaymentMethod503Response](docs/Model/PostPaymentMethod503Response.md)
- [PostVerifyMicrodeposits202Response](docs/Model/PostVerifyMicrodeposits202Response.md)
- [Principal](docs/Model/Principal.md)
- [PrincipalAddress](docs/Model/PrincipalAddress.md)
- [PrincipalCreateOnboardingResponse](docs/Model/PrincipalCreateOnboardingResponse.md)
- [PutUpdateAccountById400Response](docs/Model/PutUpdateAccountById400Response.md)
- [PutUpdateDocumentTypeByIdRequest](docs/Model/PutUpdateDocumentTypeByIdRequest.md)
- [Reference](docs/Model/Reference.md)
- [ReferencedPayment](docs/Model/ReferencedPayment.md)
- [RefundDetails](docs/Model/RefundDetails.md)
- [ReportDetailsResponse](docs/Model/ReportDetailsResponse.md)
- [ReportParameters](docs/Model/ReportParameters.md)
- [ReportQueryRequest](docs/Model/ReportQueryRequest.md)
- [ReportQueryResponse](docs/Model/ReportQueryResponse.md)
- [ReportQueryResponseParameters](docs/Model/ReportQueryResponseParameters.md)
- [RequestFailure](docs/Model/RequestFailure.md)
- [RoleResponse](docs/Model/RoleResponse.md)
- [RuleStatus](docs/Model/RuleStatus.md)
- [SettlementReportDetails](docs/Model/SettlementReportDetails.md)
- [SettlementReportDetailsBankResponse](docs/Model/SettlementReportDetailsBankResponse.md)
- [SettlementReportDetailsPaymentMethodDetails](docs/Model/SettlementReportDetailsPaymentMethodDetails.md)
- [SettlementReportDetailsReference](docs/Model/SettlementReportDetailsReference.md)
- [ShipTo](docs/Model/ShipTo.md)
- [ShipToAllOf](docs/Model/ShipToAllOf.md)
- [SoftDescriptor](docs/Model/SoftDescriptor.md)
- [StoredCredentials](docs/Model/StoredCredentials.md)
- [ThreeDSecure](docs/Model/ThreeDSecure.md)
- [TitleValues](docs/Model/TitleValues.md)
- [TransactionsReportDetails](docs/Model/TransactionsReportDetails.md)
- [TransactionsReportDetailsBankResponse](docs/Model/TransactionsReportDetailsBankResponse.md)
- [TransactionsReportDetailsCaptureDetails](docs/Model/TransactionsReportDetailsCaptureDetails.md)
- [TransactionsReportDetailsPaymentMethodDetails](docs/Model/TransactionsReportDetailsPaymentMethodDetails.md)
- [TransactionsReportDetailsPaymentMethodDetailsCvdCheck](docs/Model/TransactionsReportDetailsPaymentMethodDetailsCvdCheck.md)
- [TruliooInternationalWatchlistRule](docs/Model/TruliooInternationalWatchlistRule.md)
- [TruliooKYBRule](docs/Model/TruliooKYBRule.md)
- [TruliooKYCRule](docs/Model/TruliooKYCRule.md)
- [UnderwritingRuleRequestInner](docs/Model/UnderwritingRuleRequestInner.md)
- [UnderwritingRuleRequestInnerAnyOf](docs/Model/UnderwritingRuleRequestInnerAnyOf.md)
- [UnderwritingRuleRequestInnerAnyOf1](docs/Model/UnderwritingRuleRequestInnerAnyOf1.md)
- [UnderwritingRuleRequestInnerAnyOf2](docs/Model/UnderwritingRuleRequestInnerAnyOf2.md)
- [UnderwritingRuleRequestInnerAnyOf3](docs/Model/UnderwritingRuleRequestInnerAnyOf3.md)
- [UnderwritingRuleRequestInnerAnyOf4](docs/Model/UnderwritingRuleRequestInnerAnyOf4.md)
- [UnderwritingRuleRequestInnerAnyOf5](docs/Model/UnderwritingRuleRequestInnerAnyOf5.md)
- [UnderwritingRuleRequestInnerAnyOf6](docs/Model/UnderwritingRuleRequestInnerAnyOf6.md)
- [UnderwritingRuleRequestInnerAnyOf7](docs/Model/UnderwritingRuleRequestInnerAnyOf7.md)
- [UnderwritingRuleRequestInnerAnyOf8](docs/Model/UnderwritingRuleRequestInnerAnyOf8.md)
- [UnderwritingRuleResponseInner](docs/Model/UnderwritingRuleResponseInner.md)
- [UnderwritingWorkflowRequest](docs/Model/UnderwritingWorkflowRequest.md)
- [UnderwritingWorkflowResponse](docs/Model/UnderwritingWorkflowResponse.md)
- [UpdatableAcceptanceMethods](docs/Model/UpdatableAcceptanceMethods.md)
- [UpdatableAccount](docs/Model/UpdatableAccount.md)
- [UpdatableAddress](docs/Model/UpdatableAddress.md)
- [UpdatableAnticipatedTransAmounts](docs/Model/UpdatableAnticipatedTransAmounts.md)
- [UpdatableBankingDetails](docs/Model/UpdatableBankingDetails.md)
- [UpdatableBusinessFacebook](docs/Model/UpdatableBusinessFacebook.md)
- [UpdatableBusinessLinkedIn](docs/Model/UpdatableBusinessLinkedIn.md)
- [UpdatableBusinessName](docs/Model/UpdatableBusinessName.md)
- [UpdatableBusinessOnlinePresence](docs/Model/UpdatableBusinessOnlinePresence.md)
- [UpdatableBusinessPhone](docs/Model/UpdatableBusinessPhone.md)
- [UpdatableBusinessProfile](docs/Model/UpdatableBusinessProfile.md)
- [UpdatableBusinessTwitter](docs/Model/UpdatableBusinessTwitter.md)
- [UpdatableDbaName](docs/Model/UpdatableDbaName.md)
- [UpdatableMerchantAddress](docs/Model/UpdatableMerchantAddress.md)
- [UpdatableOnboardingDocument](docs/Model/UpdatableOnboardingDocument.md)
- [UpdatableOnboardingRequest](docs/Model/UpdatableOnboardingRequest.md)
- [UpdatablePrincipal](docs/Model/UpdatablePrincipal.md)
- [UpdatableWebhookRequest](docs/Model/UpdatableWebhookRequest.md)
- [UpdateCustomer](docs/Model/UpdateCustomer.md)
- [UpdateOnboardingStatusRequest](docs/Model/UpdateOnboardingStatusRequest.md)
- [UploadDocumentResponse](docs/Model/UploadDocumentResponse.md)
- [UserAccountSchema](docs/Model/UserAccountSchema.md)
- [UserToken](docs/Model/UserToken.md)
- [UsersResponse](docs/Model/UsersResponse.md)
- [VoidDetails](docs/Model/VoidDetails.md)
- [WebhookEventField](docs/Model/WebhookEventField.md)
- [WebhookRequest](docs/Model/WebhookRequest.md)
- [WebhookResponse](docs/Model/WebhookResponse.md)
- [ZodError](docs/Model/ZodError.md)

## Authorization

Authentication schemes defined for the API:
### apiKey

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0.4`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
