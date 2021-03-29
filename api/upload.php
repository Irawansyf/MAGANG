<?php
header('Content-Type: application/json; charset=utf-8');
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT, GET, POST");

$response = array();
$upload_dir = 'uploads/';
$server_url = 'https://magang.test'; // root server url

if ($_FILES['document']) { // check if file empty or not
    $document_name = $_FILES["document"]["name"]; //akses input field dari form dengan atribut name=document
    $document_tmp_name = $_FILES["document"]["tmp_name"]; // temporary file
    $error = $_FILES["document"]["error"];

    if ($error > 0) {
        $response = array(
            "status" => "error",
            "error" => true,
            "message" => "Error uploading the file!"
        );
    } else {
        $random_name = rand(1000, 1000000)."-".$document_name; // membuat nama random untuk penamaan file supaya tidak kembar
        $upload_name = $upload_dir.strtolower($random_name); // nama file tadi dibuat lowercase nya
        $upload_name = preg_replace('/\s+/', '-', $upload_name); // regex buat replace nama file
    
        if (move_uploaded_file($document_tmp_name, $upload_name)) { // file yang berada di temporary di pindah ke alamat yang di buat tadi, yang bagian regex.
            $response = array(
                "status" => "success",
                "error" => false,
                "message" => "File uploaded successfully",
                "url" => $server_url."/".$upload_name
              );
        } else {
            $response = array(
                "status" => "error",
                "error" => true,
                "message" => "Error uploading the file!"
            );
        }
    }
} else {
    $response = array(
        "status" => "error",
        "error" => true,
        "message" => "No file was sent!"
    );
}

echo json_encode($response);
