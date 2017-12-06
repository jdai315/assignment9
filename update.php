<?php
// Initialize the session
session_start();

// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
    header("location: login.php");
    exit;
}
?>

<?php 
// Create a database connection
error_reporting(0);
require_once 'config.php';

$number = $_POST['id'];
$updatedName = Trim(stripslashes($_POST['name']));
$updatedEmail =  Trim(stripslashes($_POST['email']));
$updatedTelephone =  Trim(stripslashes($_POST['phone']));

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
$query  ="UPDATE survey_assignment_9 SET ";
$query .=" Name = '$updatedName',";
$query .=" Email = '$updatedEmail',";
$query .=" Telephone = '$updatedTelephone', ";
$query .=" CampusStatus = '$statusselect', ";
$query .=" FoodLocation = '$location1, $location2, $location3, $location4, $location5', ";
$query .=" QualityRate = '$qualityselect', ";
$query .=" Suggestion = '$suggestionselect', ";
$query .=" Healthy = '$healthyselect', ";
$query .=" DietaryNeeds = '$dietaryselect', ";
$query .=" SpecialDietary = '$specialdietaryselect', ";
$query .=" Sustainability = '$sustainabilityselect', ";
$query .=" Message = '$message'";
$query .="WHERE ID = {$number}";

$result = mysqli_query($mysqli, $query);


?>

<?php
$currentTitle = "CSC 174 | Team Juneau | Assignment 9";
include "inc/top.inc";
?>

<body>   

    <!-- Start Navigation -->
    <nav class="main-menu">
        <span class="logo"><a href="#">Team Juneau: Assignment 9</a></span>
        <ul>
            <li><a class="menu-link" href="admin.php">Go Back</a></li>
        </ul>
    </nav>
    <!-- End Navigation -->

    <div class="container">
        <section id="heading">
            <h1>University of Rochester Dining Services</h1>
            <h2>Update Confirmation</h2>
        </section>

        <section class="confirmation-message">
            <div class="row align-items-center">
                <div class="column col-md-12 col-sm-12 col-xs-12">
                    <?php
                    if ($result) {
                    ?>
                    <h2>The record of number <?php echo $_POST['id'] ?> has been updated!</h2>

                    <?php
                    } else {
                        die("ERROR: Database query failed.");
                    }
                    ?>
                    <a href="admin.php">Go Back to Admin Page</a>
                </div>
            </div>
        </section>

        <?php
        include "inc/footer.inc";
        ?>

        </body>
    </html>

<?php
//close databse connection
mysqli_close($mysqli);
?>