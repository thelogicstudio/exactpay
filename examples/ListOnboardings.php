<?php

	use TheLogicStudio\ExactPay;

	include __DIR__ . '/../vendor/autoload.php';

	/**
	 * First up, you'll need to get an application token. Have a look at GetApplicationToken.php.
	 * This file shows how to list onboardings as an example of how to use the SDK.
	 */

	$config = (new ExactPay\Configuration())
		->setApiKey('Authorization', API_KEY)
		->setHost('https://api.exactpaysandbox.com');	//Or 'https://api-p2.exactpay.com'

	$api = new ExactPay\Api\MerchantOnboardingApi(null, $config);

	$response = $api->listOnboardings();

	foreach($response as $onboarding) {
		echo $onboarding->getId().PHP_EOL;
	}
