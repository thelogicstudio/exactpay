# Exact Payments API Client
To updated the API Client package:

1. Get the latest spec from [Exact Payments](https://developer.exactpay.com/api#/).
2. Make the following change to correct it:
   1. There are two `string` values with an invalid `items` value (pointing to `"$ref": "#/components/schemas/MerchantCategoryCodes"`) which need removed, otherwise the generator treats these as Arrays.
   2. There are a bunch of objects with both `id` and `_id` properties - remove the `_id` to stop clashes.
   3. The `/organization/{organizationId}/onboarding/{onboardingId}/document-request/{documentRequestId}` GET endpoint creates a clash with OpenAPI Generator. Change the operationId from "get-retrieve-document-request" to "get-retrieve-document-request-actual".
   4. One of the endpoints returns an enum `Unrecognized key(s) in object: 'fieldName'`. This isn't correct as 'fieldName' is a placeholder. Just replace the whole `"enum"` declaration with `"type": "string"`.
   5. Do a case-sensitive find-and-replace, replacing `eCommerceFlag` with `ecommerceFlag`.
3. Set up  [OpenAPI Generator](https://github.com/OpenAPITools/openapi-generator).
4. Create a `config.json` file, like the example below
5. Run `java -jar ~/openapi-generator-cli-6.6.0.jar generate -i document.json -g php -o ./client -c config.json`.
6. Copy the resultant files back to the git repo at https://github.com/thelogicstudio/ExactPayPHP, overwriting as appropriate.

## Example config.json
```
{
	"invokerPackage":      "TheLogicStudio\\ExactPay",
	"composerPackageName": "thelogicstudio/exactpay",
	"gitUserId":           "TheLogicStudio",
	"gitRepoId":           "ExactPayPHP",
	"licenseName":         "MIT",
	"packageName":         "Exact Payments PHP SDK"
}
```