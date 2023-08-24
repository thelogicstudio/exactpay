# # UnderwritingWorkflowRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name of the Workflow. | [optional]
**entry_rule** | **string** | The name of the entry Rule in the ruleset of this Underwriting Workflow to start evaluating the Onboarding Application. | [optional]
**rules** | [**\TheLogicStudio\ExactPay\Model\UnderwritingRuleRequestInner[]**](UnderwritingRuleRequestInner.md) | The list of Rules available for the Underwriting Workflow process that can be used to evaluate the Onboarding Application. | [optional]
**metadata** | **object** | Extra information related to a Workflow. It is usually used for display purposes on the web application and not applicable to API users. This data can be used to construct the visual view of the workflow using [React Flow](https://reactflow.dev/) component library. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
