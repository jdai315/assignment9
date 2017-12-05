<?php

//Database connection
require_once 'config.php';

//grab data being passed from the method "post" to the HTML form
//and hold each in variables
$name=trim(stripslashes($_POST["name"]));
$email=trim(stripslashes($_POST["email"]));
$telephone=trim(stripslashes($_POST["phone"]));

//question1
$statusselect=$_POST["status"];

//question2
$location1=$_POST["location1"];
$location2=$_POST["location2"];
$location3=$_POST["location3"];
$location4=$_POST["location4"];
$location5=$_POST["location5"];

//question3
$qualityselect=$_POST["quality"];

//question4
$suggestionselect=$_POST["suggestion"];

//question5
$healthyselect=$_POST["healthy"];

//question6
$dietaryselect=$_POST["dietary"];

//question7
$specialdietaryselect=$_POST["special-dietary"];

//question8
$sustainabilityselect=$_POST["sustainability"];

//message
$message=trim(stripslashes($_POST["message"]));

//escape all strings
$name=mysqli_real_escape_string($mysqli, $name);
$email=mysqli_real_escape_string($mysqli, $email);
$telephone=mysqli_real_escape_string($mysqli, $telephone);
$message=mysqli_real_escape_string($mysqli, $message);

//perform database query
$query  = "INSERT INTO `survey_assignment_9`(";
$query .= "  `Name`, `Email`, `Telephone`, `CampusStatus`, ";
$query .= "  `FoodLocation`, `QualityRate`, `Suggestion`, ";
$query .= "  `Healthy`, `DietaryNeeds`, `SpecialDietary`, ";
$query .= "  `Sustainability`, `Message`";
$query .= ") VALUES (";
$query .= "  '{$name}', '{$email}', '{$telephone}', '{$statusselect}', ";
$query .= "  '{$location1}, {$location2}, {$location3}, {$location4}, {$location5}', '{$qualityselect}', '{$suggestionselect}',  ";
$query .= "  '{$healthyselect}', '{$dietaryselect}', '{$specialdietaryselect}', ";
$query .= "  '{$sustainabilityselect}', '{$message}'";
$query .= ")";

$result = mysqli_query($mysqli, $query);

if ($result) {
    echo "Success! - the query didn't error-out";
    //send the user to the thank you webpage
    header("Location: survey-thanks.php");
} 
else {
    die("Database query failed.");
}

//Close database connection
mysqli_close($mysqli);


?>
