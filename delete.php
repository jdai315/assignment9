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
require_once 'config.php';
$id = $_POST ['id'];


$query = "DELETE FROM survey_assignment_9 ";
$query .= "WHERE id = {$id} ";
$query .= "LIMIT 1";

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
            <h2>Delete Confirmation</h2>
        </section>

        <section class="confirmation-message">
            <div class="row align-items-center">
                <div class="column col-md-12 col-sm-12 col-xs-12">
                    <?php
                    if ($result) {
                    ?>
                    <h2>The record of number <?php echo $_POST['id'] ?> has been deleted!</h2>	

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
//close database connection
mysqli_close($mysqli);
?>