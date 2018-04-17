<?php  

//API Url
$url = 'https://drug-education-project-backend.herokuapp.com/';

//Initiate cURL.
$ch = curl_init($url);

//The JSON data.
$jsonData = array(
    'day1a' => $_POST["day1a"],  
    'day1b' => $_POST["day1b"],  
    'day1c' => $_POST["day1c"], 
    'day2a' => $_POST["day2a"],  
    'day2b' => $_POST["day2b"],  
    'day2c' => $_POST["day2c"], 
    'day3a' => $_POST["day3a"],  
    'day3b' => $_POST["day3b"],  
    'day3c' => $_POST["day3c"],
    'day4a' => $_POST["day4a"],  
    'day4b' => $_POST["day4b"],  
    'day4c' => $_POST["day4c"],
    'day5a' => $_POST["day5a"],  
    'day5b' => $_POST["day5b"],  
    'day5c' => $_POST["day5c"],
    'day6a' => $_POST["day6a"],  
    'day6b' => $_POST["day6b"],  
    'day6c' => $_POST["day6c"],
    'day7a' => $_POST["day7a"],  
    'day7b' => $_POST["day7b"],  
    'day7c' => $_POST["day7c"],
    'day8a' => $_POST["day8a"],  
    'day8b' => $_POST["day8b"],  
    'day8c' => $_POST["day8c"],
    'day9a' => $_POST["day9a"],  
    'day9b' => $_POST["day9b"],  
    'day9c' => $_POST["day9c"],
    'day10a' => $_POST["day10a"],  
    'day10b' => $_POST["day10b"],  
    'day10c' => $_POST["day10c"],
    'day11a' => $_POST["day11a"],  
    'day11b' => $_POST["day11b"],  
    'day11c' => $_POST["day11c"],
    'day12a' => $_POST["day12a"],  
    'day12b' => $_POST["day12b"],  
    'day12c' => $_POST["day12c"],
    'day13a' => $_POST["day13a"],  
    'day13b' => $_POST["day13b"],  
    'day13c' => $_POST["day13c"],
    'day14a' => $_POST["day14a"],  
    'day14b' => $_POST["day14b"],  
    'day14c' => $_POST["day14c"],
    'q1' => $_POST["q1"],  
    'q2' => $_POST["q2"],  
    'q3' => $_POST["q3"], 
    'q4' => $_POST["q4"],  
    'q5' => $_POST["q5"],  
    'q6' => $_POST["q6"],
    'q7' => $_POST["q7"],  
    'q8' => $_POST["q8"],  
    'q9' => $_POST["q9"],
    'q10' => $_POST['q10'] 
);

//Encode the array into JSON.
$jsonDataEncoded = json_encode($jsonData);

//Tell cURL that we want to send a POST request.
curl_setopt($ch, CURLOPT_POST, 1);

//Attach our encoded JSON string to the POST fields.
curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);

//Set the content type to application/json
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

//Execute the request
$result = curl_exec($ch); 

?>


