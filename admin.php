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
$sql = "SELECT * FROM `survey_assignment_9`";
$result = mysqli_query($mysqli,$sql);
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <link rel="stylesheet" href="css/styles.css">
        <title>CSC 174 | Team Juneau | Assignment 9</title>

    </head>

    <body>   

        <!-- Start Navigation -->
        <nav class="main-menu">
            <span class="logo"><a href="#">Team Juneau: Assignment 9</a></span>
            <ul>
                <li><a class="menu-link" href="index.php">Back to Survey</a></li>
                <li><a class="menu-link" href="logout.php">Logout</a></li>
            </ul>
        </nav>
        <!-- End Navigation -->

        <section id="heading">
            <h1>University of Rochester Dining Services - Admin Page</h1>
        </section>

        <section id="database-table">

            <div class="row align-items-center">
                <div class="column col-md-12 col-sm-12 col-xs-12">

                    <h2>Survey Records</h2>
                    <table border="1" id="infotable">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Telephone</th>
                                <th>Status</th>
                                <th>Locations Visited</th>
                                <th>Quality Rating</th>
                                <th>Open to Suggestions</th>
                                <th>Healthy Options</th>
                                <th>Has Dietary Needs</th>
                                <th>Dietary Needs</th>
                                <th>Sustainability</th>
                                <th>Comments</th>
                            </tr>
                        </thead>

                        <?php
                        while($row = mysqli_fetch_assoc($result)){
                        ?>
                        <tr>
                            <td><?php echo $row["ID"]; ?></td>
                            <td><?php echo $row["Name"]; ?></td>
                            <td><?php echo $row["Email"]; ?></td>
                            <td><?php echo $row["Telephone"]; ?></td>
                            <td><?php echo $row["CampusStatus"]; ?></td>
                            <td><?php echo $row["FoodLocation"]; ?></td>
                            <td><?php echo $row["QualityRate"]; ?></td>
                            <td><?php echo $row["Suggestion"]; ?></td>
                            <td><?php echo $row["Healthy"]; ?></td>
                            <td><?php echo $row["DietaryNeeds"]; ?></td>
                            <td><?php echo $row["SpecialDietary"]; ?></td>
                            <td><?php echo $row["Sustainability"]; ?></td>
                            <td><?php echo $row["Message"]; ?></td>
                        </tr>
                        <?php } ?>
                    </table>

                </div>
            </div>

        </section>

        <section id="database-options">
            <div class="row align-items-center">

                <div class="column col-md-4 col-sm-6 col-xs-12">
                    <div class="option">
                        <h3>View Entry</h3>
                        <h4>Enter an ID to view a record below:</h4>
                        <form method="post" action="records.php">
                            <input type="text" id="id" name="id">
                            <input type="submit" id="submit" name="submit" value="View Records!">
                        </form>
                    </div>
                </div>

                <div class="column col-md-4 col-sm-6 col-xs-12">
                    <div class="option">
                        <h3>Delete Entry</h3>
                        <h4>Enter an ID to delete a record below:</h4>
                        <form method="post" action="delete.php">
                            <input type="text" id="id" name="id">
                            <input type="submit" id="submit1" name="submit" value="Delete Records!">
                        </form>
                    </div>
                </div>

                <div class="column col-md-4 col-sm-12 col-xs-12">
                    <div class="option">
                        <h3>Update Entry</h3>
                        <h4>Enter an ID to update a record below:</h4>
                        <form method="post" action="updaterecords.php">
                            <input type="text" id="id" name="id">
                            <input type="submit" id="submit2" name="submit" value="Update Records!">
                        </form>
                    </div>
                </div>

            </div>
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
// close database connection
mysqli_close($mysqli);
?>