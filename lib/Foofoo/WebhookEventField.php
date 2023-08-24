<?php
/**
 * WebhookEventField
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  TheLogicStudio\ExactPay
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Embedded Payments
 *
 * Embedding payments into your software platform can be one of the most powerful value drivers for your customers and your top line. Imagine your software delivering the entire order-to-cash cycle including funding right into the customer’s bank account. We provide low code integration- With just a single API, you can go live with Exact Payments. Onboard customers, automated underwriting, receive webhook notifications when your customers is live and ready to take payments. We have all the payment types your customers want and their buyers need. Credit and debit cards plus ACH payments, Apple Pay, Google Pay, Paypal, recurring payments, card-on-file and more. Dive into our API Reference and add embedded payments with Exact today!
 *
 * The version of the OpenAPI document: 1.0.4
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.6.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace TheLogicStudio\ExactPay\Foofoo;
use \TheLogicStudio\ExactPay\ObjectSerializer;

/**
 * WebhookEventField Class Doc Comment
 *
 * @category Class
 * @description An event that the customer can subscribe to get notifications when it is generated in the system. The format of the event is resource.action:status, if no status is provided it will take finish as default.
 * @package  TheLogicStudio\ExactPay
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class WebhookEventField
{
    /**
     * Possible values of this enum
     */
    public const CHARGE_GET = 'charge.get';

    public const PAYMENT_CREATE = 'payment.create';

    public const PAYMENT_QUERY = 'payment.query';

    public const PAYMENT_GET = 'payment.get';

    public const PAYMENT_VOID = 'payment.void';

    public const PAYMENT_CAPTURE = 'payment.capture';

    public const PAYMENT_REFUND = 'payment.refund';

    public const PAYMENT_QUERY_BY_CUSTOMER = 'payment.query-by-customer';

    public const PAYMENT_SETTLE = 'payment.settle';

    public const ORDER_CREATE = 'order.create';

    public const ORDER_QUERY = 'order.query';

    public const ORDER_GET = 'order.get';

    public const ORDER_ACCESS_TOKEN_CREATE = 'order.access-token.create';

    public const ORDER_UPDATE = 'order.update';

    public const ORDER_PAYMENT_ATTEMPTS_RESET = 'order.payment-attempts.reset';

    public const ORDER_PAY_WITH_TOKEN = 'order.pay-with-token';

    public const ORDER_BROWSER_PAYMENT = 'order.browser-payment';

    public const ORDER_BROWSER_TOKENIZE = 'order.browser-tokenize';

    public const PAYMENT_METHOD_ENSURE = 'payment-method.ensure';

    public const PAYMENT_METHOD_VERIFY_MICRO_DEPOSIT = 'payment-method.verify-micro-deposit';

    public const PAYMENT_METHOD_GET = 'payment-method.get';

    public const PAYMENT_METHOD_UPDATE = 'payment-method.update';

    public const PAYMENT_METHOD_DELETE = 'payment-method.delete';

    public const PAYMENT_METHOD_LINK_CUSTOMER = 'payment-method.link-customer';

    public const PAYMENT_METHOD_QUERY_FOR_CUSTOMER = 'payment-method.query-for-customer';

    public const PAYMENT_METHOD_QUERY_FOR_CUSTOMER_BY_CUSTOMER_TOKEN = 'payment-method.query-for-customer-by-customer-token';

    public const PAYMENT_METHOD_GET_BY_ID_FOR_CUSTOMER = 'payment-method.get-by-id-for-customer';

    public const PAYMENT_METHOD_UNLINK_FROM_CUSTOMER = 'payment-method.unlink-from-customer';

    public const PAYMENT_METHOD_REBUILD_DWOLLA = 'payment-method.rebuild-dwolla';

    public const CUSTOMER_CREATE = 'customer.create';

    public const CUSTOMER_QUERY = 'customer.query';

    public const CUSTOMER_FIND_BY_ID = 'customer.find-by-id';

    public const REPORT_CREATE = 'report.create';

    public const REPORT_QUERY = 'report.query';

    public const REPORT_DOWNLOAD = 'report.download';

    public const REPORT_DETAILS_QUERY = 'report-details.query';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CHARGE_GET,
            self::PAYMENT_CREATE,
            self::PAYMENT_QUERY,
            self::PAYMENT_GET,
            self::PAYMENT_VOID,
            self::PAYMENT_CAPTURE,
            self::PAYMENT_REFUND,
            self::PAYMENT_QUERY_BY_CUSTOMER,
            self::PAYMENT_SETTLE,
            self::ORDER_CREATE,
            self::ORDER_QUERY,
            self::ORDER_GET,
            self::ORDER_ACCESS_TOKEN_CREATE,
            self::ORDER_UPDATE,
            self::ORDER_PAYMENT_ATTEMPTS_RESET,
            self::ORDER_PAY_WITH_TOKEN,
            self::ORDER_BROWSER_PAYMENT,
            self::ORDER_BROWSER_TOKENIZE,
            self::PAYMENT_METHOD_ENSURE,
            self::PAYMENT_METHOD_VERIFY_MICRO_DEPOSIT,
            self::PAYMENT_METHOD_GET,
            self::PAYMENT_METHOD_UPDATE,
            self::PAYMENT_METHOD_DELETE,
            self::PAYMENT_METHOD_LINK_CUSTOMER,
            self::PAYMENT_METHOD_QUERY_FOR_CUSTOMER,
            self::PAYMENT_METHOD_QUERY_FOR_CUSTOMER_BY_CUSTOMER_TOKEN,
            self::PAYMENT_METHOD_GET_BY_ID_FOR_CUSTOMER,
            self::PAYMENT_METHOD_UNLINK_FROM_CUSTOMER,
            self::PAYMENT_METHOD_REBUILD_DWOLLA,
            self::CUSTOMER_CREATE,
            self::CUSTOMER_QUERY,
            self::CUSTOMER_FIND_BY_ID,
            self::REPORT_CREATE,
            self::REPORT_QUERY,
            self::REPORT_DOWNLOAD,
            self::REPORT_DETAILS_QUERY
        ];
    }
}


