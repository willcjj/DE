<?php
session_start();
//API Url
$url = 'https://drug-education-project-backend.herokuapp.com/';

//Initiate cURL.
$ch = curl_init($url);

//The JSON data.
$jsonData = array(
    'userId' => $_POST["userId"],
    'team' => $_POST["team"]
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
$result = curl_exec($ch); ?>

<html>
<body>

Welcome <?php echo $_POST["userId"]; ?><br>
Your team is: <?php echo $_POST["team"]; ?>

<!-- <?php
echo $_SESSION['userId'];
echo $_SESSION['team'];

// $jsonurl = "https://drug-education-project-backend.herokuapp.com/";
// $json = file_get_contents($jsonurl);
// var_dump(json_decode($json));
?> -->

</body>
</html>
