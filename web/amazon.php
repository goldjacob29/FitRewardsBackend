<?php
	require('../vendor/autoload.php');
	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Allow-Credentials: true");
	header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
	header("Access-Control-Allow-Headers: DNT,X-CustomHeader,Keep-Alive,User-Agent,X-Requested-With,If-Modified-Since,Cache-Control,Content-Type");
	$keyword = $_POST['keyword'];

	// Your AWS Access Key ID, as taken from the AWS Your Account page
	$aws_access_key_id = "AKIAIFG2QPIQP3K2UXGA";

	// Your AWS Secret Key corresponding to the above ID, as taken from the AWS Your Account page
	$aws_secret_key = "XfHOI+nXi7bqeUsWtWfuXY8vMiw56r81Y73QI+M1";

	// The region you are interested in
	$endpoint = "webservices.amazon.com";

	$uri = "/onca/xml";

	$params = array(
	    "Service" => "AWSECommerceService",
	    "Operation" => "ItemSearch",
	    "AWSAccessKeyId" => "AKIAIFG2QPIQP3K2UXGA",
	    "AssociateTag" => "ewbnu-20",
	    "SearchIndex" => "All",
	    "Keywords" => $keyword,
	    "ResponseGroup" => "Images,ItemAttributes,ItemIds,OfferListings,OfferSummary,Reviews"
	);

	// Set current timestamp if not set
	if (!isset($params["Timestamp"])) {
	    $params["Timestamp"] = gmdate('Y-m-d\TH:i:s\Z');
	}

	// Sort the parameters by key
	ksort($params);

	$pairs = array();

	foreach ($params as $key => $value) {
	    array_push($pairs, rawurlencode($key)."=".rawurlencode($value));
	}

	// Generate the canonical query
	$canonical_query_string = join("&", $pairs);

	// Generate the string to be signed
	$string_to_sign = "GET\n".$endpoint."\n".$uri."\n".$canonical_query_string;

	// Generate the signature required by the Product Advertising API
	$signature = base64_encode(hash_hmac("sha256", $string_to_sign, $aws_secret_key, true));

	// Generate the signed URL
	$request_url = 'http://'.$endpoint.$uri.'?'.$canonical_query_string.'&Signature='.rawurlencode($signature);

	echo "Signed URL: \"".$request_url."\"";

	$myXMLData = file_get_contents($request_url);

	$xml=simplexml_load_string($myXMLData);
	echo print_r($xml);
?>