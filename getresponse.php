<?php 
	$responses['what is your name'] = "My name is Mo-Pal.";
	// echo "Hello world";
	$responses['tell me about yourself'] = "I am a chatbot. I'm still learning a lot of things so please forgive me if I can't answer you in some cases.";
	
	$responses["im fine"] = "Good. I'm happy about that.";
	$responses["will you please help me"] = "happy to help!how are you feeling today?";
	$responses["need doctors help"] = "all doctors are attending patients.we shall revert to your request soon.";
	$responses["not well"] = "okay.can you tell me what's wrong?what are your symptoms?";
	$responses["headache"] = "what kind of headache do you have: 1.migrane headache 2.one side headache";
	
	$q = $_GET["q"];

	$response = "";

	if ($q != "") {
		# code...
		$q = strtolower($q);
		foreach ($responses as $r => $value) {
			# code...
			if (strpos($r, $q) !== false) {
				# code...
				$response = $value;
			}
			
		}
	}
	$noresponse = "Sorry I'm still learning. Hence my responses are limited. Ask something else.";
	echo $response === "" ? $noresponse : $response;
?>