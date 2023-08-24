<?php
	
	use TheLogicStudio\ExactPay;
	
	include __DIR__ . '/../vendor/autoload.php';

	/**
	 * ExactPay's authentication has two steps.
	 * First, you need to use your username and password to generate a short-live User Token.
	 * Next, you use the short-lives User Token to generate a long-lived Application Token.
	 * You can then use that token on all future requests
	 */

	$config = (new ExactPay\Configuration())
		->setHost('https://api.exactpaysandbox.com');	//Or 'https://api-p2.exactpay.com'

	$api = new ExactPay\Api\AuthenticationApi(null, $config);

	//The first request is to get the User Token
	$request = (new ExactPay\Model\CreateUserTokenRequest())
		->setEmail('user@example.com')
		->setPassword('abcd1234')
		->setApplication('mycompany-dev');
	$response = $api->createUserToken($request);

	//Now that we have the token, we can set that in our API Config
	$config->setApiKey('Authorization', $response->getToken());

	//The second request is to get the Application token
	$request = (new ExactPay\Model\CreateApplicationTokenRequest())
		->setLabel('My Application Token')
		->setMode('test') //Or 'live'
		->setPermissions(
			//NOTE: You should probably filter this down to only required permissions, but including all for this example
			$response->getAllowedPermissions(),
		);
	$response = $api->createApplicationToken('mycompany-dev', $request);

	//And then you probably want to save this token into your app's .ENV file or something
	$appToken = $response->getToken();

