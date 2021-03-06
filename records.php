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
            <h2>View Record #<?php echo $row["ID"]?></h2>
        </section>

        <section class="confirmation-message">
            <div class="row align-items-center">
                <div class="column col-md-12 col-sm-12 col-xs-12">

                    <h2><?php echo $row["Name"]?>'s Survey Responses</h2>

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

                    <div class="button">
                        <a class="btn btn-primary" href="admin.php">Go Back to Admin Page</a>
                    </div>
                </div>
            </div>
        </section>

        <?php
        include "inc/footer.inc";
        ?>

        </body>
    </html>

<?php
mysqli_free_result($result);
// close database connection
mysqli_close($mysqli);
?>