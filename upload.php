<?php

include 'config.php';
include 'funcs.php';

// Check for remove file request
$request = 1;
if(isset($_POST['request'])){
	$request = $_POST['request'];
}

$headers = getRequestHeaders();

// Retrieve 
foreach ($headers as $header => $value) {
	if ($header === "Scramble") {
		$scramble = "$value/";
	}
}

// Default to public
$target_dir = $public_upload_dir;

// If private path
if (isset($scramble)) {
	$target_dir = $private_upload_dir . $scramble;

	// Creates path if not exits
	if (!file_exists($target_dir)) {
		createPath($target_dir);
	}
}


// Upload file
if($request == 1){

	$target_file = $target_dir.$_FILES['file']['name'];

	$response = (object)[];
	if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
		$response = (object) [	
			'msg' => "Successfully uploaded",
			'status' => 200,
			'filePath' => $target_file
		];
	}
	else{
		$response->msg = "Error while uploading";
		$response->status = 500;
	}
	$responseJSON = json_encode($response);
	echo $responseJSON;
}

// Remove file + folder (if private)
if($request == 2){
	if(isset($_POST['filePath'])){
		$filePath = $_POST['filePath'];
	}

	unlink($filePath);

	$folderPath = dirname($filePath);

	// Also deletes folder if private
	if (strpos($folderPath, $public_upload_dir) !== false) {
		// Found!
		exit;
	}
	else {
		rmdir($folderPath);
	}
	
	exit;
}

