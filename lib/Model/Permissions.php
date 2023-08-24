<?php
/**
 * Permissions
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

namespace TheLogicStudio\ExactPay\Model;
use \TheLogicStudio\ExactPay\ObjectSerializer;

/**
 * Permissions Class Doc Comment
 *
 * @category Class
 * @description Available permissions in Exact Payments system.
 * @package  TheLogicStudio\ExactPay
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Permissions
{
    /**
     * Possible values of this enum
     */
    public const USERS_READ = 'users.read';

    public const USERS_UPDATE = 'users.update';

    public const USERS_DELETE = 'users.delete';

    public const USERS_DISABLE = 'users.disable';

    public const USERS_SET_PERMISSIONS = 'users.set-permissions';

    public const USERS_PROXY = 'users.proxy';

    public const ORGANIZATION_INVITES_CREATE = 'organization-invites.create';

    public const ORGANIZATION_INVITES_READ = 'organization-invites.read';

    public const ORGANIZATION_INVITES_DELETE = 'organization-invites.delete';

    public const ACCOUNT_INVITES_CREATE = 'account-invites.create';

    public const ACCOUNT_INVITES_READ = 'account-invites.read';

    public const ACCOUNT_INVITES_DELETE = 'account-invites.delete';

    public const ORGANIZATIONS_CREATE = 'organizations.create';

    public const ORGANIZATIONS_READ = 'organizations.read';

    public const ORGANIZATIONS_UPDATE = 'organizations.update';

    public const ORGANIZATIONS_DELETE = 'organizations.delete';

    public const ORGANIZATIONS_DISABLE = 'organizations.disable';

    public const ORGANIZATIONS_TRANSFER = 'organizations.transfer';

    public const ACCOUNTS_CREATE = 'accounts.create';

    public const ACCOUNTS_READ = 'accounts.read';

    public const ACCOUNTS_UPDATE = 'accounts.update';

    public const ACCOUNTS_DELETE = 'accounts.delete';

    public const ACCOUNTS_DISABLE = 'accounts.disable';

    public const ACCOUNTS_TRANSFER = 'accounts.transfer';

    public const ACCOUNTS_READ_BALANCE = 'accounts.read-balance';

    public const APPLICATIONS_CREATE = 'applications.create';

    public const APPLICATIONS_READ = 'applications.read';

    public const APPLICATIONS_UPDATE = 'applications.update';

    public const APPLICATIONS_DELETE = 'applications.delete';

    public const APPLICATION_TOKENS_CREATE = 'application-tokens.create';

    public const APPLICATION_TOKENS_READ = 'application-tokens.read';

    public const APPLICATION_TOKENS_DELETE = 'application-tokens.delete';

    public const TEMPLATES_SET = 'templates.set';

    public const TEMPLATES_UNSET = 'templates.unset';

    public const ROLES_CREATE = 'roles.create';

    public const ROLES_READ = 'roles.read';

    public const ROLES_UPDATE = 'roles.update';

    public const ROLES_DELETE = 'roles.delete';

    public const ROLES_DISABLE = 'roles.disable';

    public const ONBOARDINGS_CREATE = 'onboardings.create';

    public const ONBOARDINGS_READ = 'onboardings.read';

    public const ONBOARDINGS_UPDATE = 'onboardings.update';

    public const ONBOARDINGS_DELETE = 'onboardings.delete';

    public const ONBOARDING_DOCUMENT_REQUESTS_CREATE = 'onboarding-document-requests.create';

    public const ONBOARDING_DOCUMENT_REQUESTS_UPDATE = 'onboarding-document-requests.update';

    public const ONBOARDING_DOCUMENT_REQUESTS_READ = 'onboarding-document-requests.read';

    public const ONBOARDING_DOCUMENT_REQUESTS_DELETE = 'onboarding-document-requests.delete';

    public const ONBOARDING_DOCUMENTS_CREATE = 'onboarding-documents.create';

    public const ONBOARDING_DOCUMENTS_UPDATE = 'onboarding-documents.update';

    public const ONBOARDING_DOCUMENTS_READ = 'onboarding-documents.read';

    public const ONBOARDING_DOCUMENTS_DELETE = 'onboarding-documents.delete';

    public const ONBOARDING_NOTES_CREATE = 'onboarding-notes.create';

    public const ONBOARDING_NOTES_READ = 'onboarding-notes.read';

    public const ONBOARDING_WORKFLOWS_CREATE = 'onboarding-workflows.create';

    public const ONBOARDING_WORKFLOWS_READ = 'onboarding-workflows.read';

    public const ONBOARDING_WORKFLOWS_UPDATE = 'onboarding-workflows.update';

    public const ONBOARDING_WORKFLOWS_DELETE = 'onboarding-workflows.delete';

    public const CHARGES_CREATE = 'charges.create';

    public const CHARGES_READ = 'charges.read';

    public const CHARGES_UPDATE = 'charges.update';

    public const CHARGES_READ_GUID = 'charges.read-guid';

    public const PLANS_CREATE = 'plans.create';

    public const PLANS_READ = 'plans.read';

    public const PLANS_DELETE = 'plans.delete';

    public const PLANS_UPDATE = 'plans.update';

    public const SUBSCRIPTIONS_CREATE = 'subscriptions.create';

    public const SUBSCRIPTIONS_READ = 'subscriptions.read';

    public const SUBSCRIPTIONS_DELETE = 'subscriptions.delete';

    public const SUBSCRIPTIONS_UPDATE = 'subscriptions.update';

    public const CUSTOMERS_CREATE = 'customers.create';

    public const CUSTOMERS_READ = 'customers.read';

    public const CUSTOMERS_UPDATE = 'customers.update';

    public const CUSTOMERS_DELETE = 'customers.delete';

    public const REPORTS_CREATE = 'reports.create';

    public const REPORTS_READ = 'reports.read';

    public const REPORTS_UPDATE = 'reports.update';

    public const REPORTS_DELETE = 'reports.delete';

    public const EVENTS_READ = 'events.read';

    public const WEBHOOKS_CREATE = 'webhooks.create';

    public const WEBHOOKS_READ = 'webhooks.read';

    public const WEBHOOKS_UPDATE = 'webhooks.update';

    public const WEBHOOKS_DELETE = 'webhooks.delete';

    public const CHARGEBACKS_CREATE = 'chargebacks.create';

    public const CHARGEBACKS_READ = 'chargebacks.read';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::USERS_READ,
            self::USERS_UPDATE,
            self::USERS_DELETE,
            self::USERS_DISABLE,
            self::USERS_SET_PERMISSIONS,
            self::USERS_PROXY,
            self::ORGANIZATION_INVITES_CREATE,
            self::ORGANIZATION_INVITES_READ,
            self::ORGANIZATION_INVITES_DELETE,
            self::ACCOUNT_INVITES_CREATE,
            self::ACCOUNT_INVITES_READ,
            self::ACCOUNT_INVITES_DELETE,
            self::ORGANIZATIONS_CREATE,
            self::ORGANIZATIONS_READ,
            self::ORGANIZATIONS_UPDATE,
            self::ORGANIZATIONS_DELETE,
            self::ORGANIZATIONS_DISABLE,
            self::ORGANIZATIONS_TRANSFER,
            self::ACCOUNTS_CREATE,
            self::ACCOUNTS_READ,
            self::ACCOUNTS_UPDATE,
            self::ACCOUNTS_DELETE,
            self::ACCOUNTS_DISABLE,
            self::ACCOUNTS_TRANSFER,
            self::ACCOUNTS_READ_BALANCE,
            self::APPLICATIONS_CREATE,
            self::APPLICATIONS_READ,
            self::APPLICATIONS_UPDATE,
            self::APPLICATIONS_DELETE,
            self::APPLICATION_TOKENS_CREATE,
            self::APPLICATION_TOKENS_READ,
            self::APPLICATION_TOKENS_DELETE,
            self::TEMPLATES_SET,
            self::TEMPLATES_UNSET,
            self::ROLES_CREATE,
            self::ROLES_READ,
            self::ROLES_UPDATE,
            self::ROLES_DELETE,
            self::ROLES_DISABLE,
            self::ONBOARDINGS_CREATE,
            self::ONBOARDINGS_READ,
            self::ONBOARDINGS_UPDATE,
            self::ONBOARDINGS_DELETE,
            self::ONBOARDING_DOCUMENT_REQUESTS_CREATE,
            self::ONBOARDING_DOCUMENT_REQUESTS_UPDATE,
            self::ONBOARDING_DOCUMENT_REQUESTS_READ,
            self::ONBOARDING_DOCUMENT_REQUESTS_DELETE,
            self::ONBOARDING_DOCUMENTS_CREATE,
            self::ONBOARDING_DOCUMENTS_UPDATE,
            self::ONBOARDING_DOCUMENTS_READ,
            self::ONBOARDING_DOCUMENTS_DELETE,
            self::ONBOARDING_NOTES_CREATE,
            self::ONBOARDING_NOTES_READ,
            self::ONBOARDING_WORKFLOWS_CREATE,
            self::ONBOARDING_WORKFLOWS_READ,
            self::ONBOARDING_WORKFLOWS_UPDATE,
            self::ONBOARDING_WORKFLOWS_DELETE,
            self::CHARGES_CREATE,
            self::CHARGES_READ,
            self::CHARGES_UPDATE,
            self::CHARGES_READ_GUID,
            self::PLANS_CREATE,
            self::PLANS_READ,
            self::PLANS_DELETE,
            self::PLANS_UPDATE,
            self::SUBSCRIPTIONS_CREATE,
            self::SUBSCRIPTIONS_READ,
            self::SUBSCRIPTIONS_DELETE,
            self::SUBSCRIPTIONS_UPDATE,
            self::CUSTOMERS_CREATE,
            self::CUSTOMERS_READ,
            self::CUSTOMERS_UPDATE,
            self::CUSTOMERS_DELETE,
            self::REPORTS_CREATE,
            self::REPORTS_READ,
            self::REPORTS_UPDATE,
            self::REPORTS_DELETE,
            self::EVENTS_READ,
            self::WEBHOOKS_CREATE,
            self::WEBHOOKS_READ,
            self::WEBHOOKS_UPDATE,
            self::WEBHOOKS_DELETE,
            self::CHARGEBACKS_CREATE,
            self::CHARGEBACKS_READ
        ];
    }
}

