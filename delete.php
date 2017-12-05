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


$query = "DELETE FROM survey ";
$query .= "WHERE id = {$id} ";
$query .= "LIMIT 1";

$result = mysqli_query($mysqli, $query);
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
            <h1>University of Rochester Dining Services - Delete Confirmation</h1>
        </section>

        <section class="confirmation-message">
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
mysqli_close($mysqli);
?>