<?php
/**
 * TitleValues
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
 * OpenAPI Generator version: 7.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace TheLogicStudio\ExactPay\Model;
use \TheLogicStudio\ExactPay\ObjectSerializer;

/**
 * TitleValues Class Doc Comment
 *
 * @category Class
 * @description The position or title held by the Principal owner or the Authorized Person of the Organization.
 * @package  TheLogicStudio\ExactPay
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TitleValues
{
    /**
     * Possible values of this enum
     */
    public const CEO_PRESIDENT = 'CEO/President';

    public const OWNER_FOUNDER = 'Owner/Founder';

    public const VP_DIRECTOR = 'VP/Director';

    public const MANAGER = 'Manager';

    public const ADMINISTRATOR = 'Administrator';

    public const OTHER = 'Other';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CEO_PRESIDENT,
            self::OWNER_FOUNDER,
            self::VP_DIRECTOR,
            self::MANAGER,
            self::ADMINISTRATOR,
            self::OTHER
        ];
    }
}


