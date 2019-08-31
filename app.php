<?php
session_start();

$query = urlencode($_POST['query']);

/*
// composer autoload
require "vendor/autoload.php";

// create the serpwow object, passing in our API key
$serpwow = new GoogleSearchResults("B29D906044534056910C9F4B713D340F");

// set up the search parameters
$params = [
    "q" => "pizza"
];


// retrieve the search results as JSON
$result = $serpwow->json($params);

// pretty-print the JSON result
print_r($result);


*/

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.serpwow.com/live/search?api_key=B29D906044534056910C9F4B713D340F&q=$query&gl=se&hl=sv&search_type=news");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
$data = curl_exec($ch);
curl_close($ch);


$_SESSION['data'] = $data;

header('Location: index.php');

