<?php

class Stripe {

	private $api_key;

	public function string ($api_key) {

	$this->api_key = $api_key;

	}


	public function api(string $endpoint, array $data): stdClass {

	$ch = curl_init();

	
	$options = array(
		
		CURLOPT_URL => 'https://api.stripe.com/v1/charges',

		CURLOPT_RETURNTRANSFER => true,

		CURLOPT_USERPWD => 'sk_test_oBPIbKGTA5bxc6BY4l6nqYRX00NGMVj9IC',

		CURLOPT_HTTPAUTH => CURLAUTH_BASIC,

		CURLOPT_POSTFIELDS => http_build_query($data)
     );


	curl_setopt_array($ch, $options);

	$response = json_decode (curl_exec($ch));

	curl_close($ch);
	
	if (property_exists($response, 'error')) {

		throw new Exception($response->error->message);

	}

	

	
	
	return $response;



	die();
	
}
}
?>