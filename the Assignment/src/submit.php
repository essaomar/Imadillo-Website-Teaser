<?php

	$email = $_POST['email'];

	$response = {"success", "emailexists", "fail"};

	return shuffle($response)[0];

?>