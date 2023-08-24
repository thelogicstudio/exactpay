# # UnderwritingRuleResponseInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name assigned to the Rule check. | [optional]
**type** | **string** | Type of Rule that will be evaluated by the decision engine. | [optional] [default to 'Plaid Identity']
**options** | **object** | This Rule has no options so it can be defined as an empty object. | [optional]
**on_pass** | **string** | Indicates the decision engine&#39;s action if the Rule matches its criteria.\\ The possible values are *accept*, *reject*, *review*, or the name of another Rule which should be executed for further evaluation in this ruleset. | [optional]
**on_fail** | **string** | Indicates what action the decision engine will take if the Rule does not match its criteria.\\ The possible values are *accept*, *reject*, *review*, or the name of another Rule which should be executed for further evaluation in this ruleset. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
