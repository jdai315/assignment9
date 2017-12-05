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
//Create database connection
require_once 'config.php';
$id = $_POST ['id'];
$sql = "SELECT * FROM `survey_assignment_9`";
$sql .= "WHERE ID = {$id} ";
$sql .= "LIMIT 1";
$result = mysqli_query($mysqli,$sql);
$row = mysqli_fetch_assoc($result)
?>

<?php
// Initialize the session
session_start();
 
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: login.php");
  exit;
}
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>CSC 174 | Team Juneau</title>

    </head>

    <body>   

        <!-- Start Navigation -->
        <nav class="main-menu">
            <span class="logo"><a href="#">Team Juneau: Assignment #9</a></span>
            <ul>
                <li><a class="menu-link" href="admin.php">Back to Admin</a></li>
            </ul>
        </nav>
        <!-- End Navigation -->

        <section id="heading">
            <h1>University of Rochester Dining Services - View Record #<?php echo $row["ID"]?></h1>
        </section>

        <section class="confirmation-message">

            <h2> <?php echo $row["Name"]?>'s Survey Responses</h2>

            <table border="1">

                <tr><td>ID:</td><td><?php echo $row["ID"]; ?></td></tr>
                <tr><td>Name:</td><td><?php echo $row["Name"]; ?></td></tr>
                <tr><td>Email:</td><td><?php echo $row["Email"]; ?></td></tr>
                <tr><td>Telephone:</td><td><?php echo $row["Telephone"]; ?></td></tr>
                <tr><td>Status:</td><td><?php echo $row["CampusStatus"]; ?></td></tr>
                <tr><td>Locations Visited:</td><td><?php echo $row["FoodLocation"]; ?></td></tr>
                <tr><td>Quality Rating:</td><td><?php echo $row["QualityRate"]; ?></td></tr>
                <tr><td>Open to Suggestions:</td><td><?php echo $row["Suggestion"]; ?></td></tr>
                <tr><td>Healthy Options:</td><td><?php echo $row["Healthy"]; ?></td></tr>
                <tr><td>Has Dietary Needs:</td><td><?php echo $row["DietaryNeeds"]; ?></td></tr>
                <tr><td>Dietary Needs:</td><td><?php echo $row["SpecialDietary"]; ?></td></tr>
                <tr><td>Sustainability:</td><td><?php echo $row["Sustainability"]; ?></td></tr>
                <tr><td>Message:</td><td><?php echo $row["Message"]; ?></td></tr>  

            </table>

            <a href="admin.php">Go Back to Admin Page</a>
        </section>

        <footer id="credits">
            <h2>Credits</h2>
            <ul id="footer-ul">
                <li>Copyright &copy; 2017 - This webpage was created by Team Juneau</li>
                <li>Here is a reference we used for assignment 9: <a href="http://www.rochester.edu/dining/learn-more/about-us/">U of R Dining Services</a></li>
                <li>Daniella Bloom, Michelle Bushoy, Jerry Dai, Philip Kallinos</li>
                <li><a href="login.php">Admin Login/Signup</a></li>
            </ul>    
        </footer>

    </body>
</html>

<?php
mysqli_free_result($result);
// close database connection
mysqli_close($mysqli);
?>