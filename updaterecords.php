<?php
// Create a database connection
$mysqli = new mysqli('66.147.242.186', 'urcscon3_juneau', 'coffee1N', 'urcscon3_juneau');
$id = $_POST ['id'];
$sql = "SELECT * FROM `survey`";
$sql .= "WHERE ID = {$id} ";
$sql .= "LIMIT 1";
$result = mysqli_query($mysqli,$sql);
$row = mysqli_fetch_assoc($result)
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
            <h1>University of Rochester Dining Services - Update Record #<?php echo $row["ID"]?></h1>
        </section>

        <section class="confirmation-message">

            <h2> #<?php echo $row["ID"]?>'s Survey Result</h2>

            <div class="row align-items-center">
                <div class="column col-md-12 col-sm-12 col-xs-12">
                    <form method="post" action="update.php">
                        <table>
                            <tr><td>ID:</td><td><input readonly type="text" id="updateid1" name="id" value = "<?php echo $row["ID"]?>"></td></tr>
                            <tr><td>Name:</td><td><input type="text" id="updateid2" name="name" value = "<?php echo $row["Name"]?>"></td></tr>
                            <tr><td>Email:</td><td><input type="text" id="updateid3" name="email" value = "<?php echo $row["Email"]?>"></td></tr>
                            <tr><td>Telephone:</td><td><input type="text" id="updateid4" name="telephone" value = "<?php echo $row["Telephone"]?>"></td></tr>
                        </table>

                        <fieldset>

                            <legend>Survey Questionnaire</legend>

                            <h5>1. What is your campus status?</h5>

                            <input type="radio" name="status" id="on-campus-select" value="on-campus">
                            <label for="on-campus-select">Student living on campus</label><br>

                            <input type="radio" name="status" id="off-campus-select" value="off-campus">
                            <label for="off-campus-select">Student living off campus</label><br>

                            <input type="radio" name="status" id="faculty-select" value="faculty">
                            <label for="faculty-select">Faculty</label><br>

                            <input type="radio" name="status" id="staff-select" value="staff">
                            <label for="staff-select">Staff</label><br>

                            <input type="radio" name="status" id="other-select1" value="other">
                            <label for="other-select1">Other</label><br>

                            <h5>2. Which dining locations do you visit?</h5>

                            <input type="checkbox" name="location1" id="danforth-check" value="danforth">
                            <label for="danforth-check">Danforth Dining Center</label><br>

                            <input type="checkbox" name="location2" id="douglass-check" value="douglass">
                            <label for="douglass-check">Douglass Dining Center</label><br>

                            <input type="checkbox" name="location3" id="eastman-check" value="eastman">
                            <label for="eastman-check">Eastman Dining Center</label><br>

                            <input type="checkbox" name="location4" id="pit-check" value="pit">
                            <label for="pit-check">The Pit - Wilson Commons</label><br>

                            <input type="checkbox" name="location5" id="rocky-check" value="rocky">
                            <label for="rocky-check">Rocky's Sub Shop</label><br>

                            <h5>3. Please rate the overall quality of customer service at our dining locations</h5>

                            <input type="radio" name="quality" id="excellent-select" value="excellent">
                            <label for="excellent-select">Excellent</label><br>

                            <input type="radio" name="quality" id="good-select" value="good">
                            <label for="good-select">Good</label><br>

                            <input type="radio" name="quality" id="fair-select" value="fair">
                            <label for="fair-select">Fair</label><br>

                            <input type="radio" name="quality" id="poor-select" value="poor">
                            <label for="poor-select">Poor</label><br>

                            <h5>4. Do you feel dining services is open to student suggestions? </h5>

                            <input type="radio" name="suggestion" id="student-yes" value="yes">
                            <label for="student-yes">Yes</label><br>

                            <input type="radio" name="suggestion" id="student-yes2" value="yes2">
                            <label for="student-yes2">Yes, but could be better</label><br>

                            <input type="radio" name="suggestion" id="student-yes3" value="yes3">
                            <label for="student-yes3">Yes, but I don't reach out</label><br>

                            <input type="radio" name="suggestion" id="student-no" value="no">
                            <label for="student-no">No</label><br>

                            <input type="radio" name="suggestion" id="student-na" value="na">
                            <label for="student-na">Not sure</label><br>

                            <h5>5. Does the university provide enough healthy food options?</h5>

                            <input type="radio" name="nutrition" id="nutrition-yes" value="yes">
                            <label for="nutrition-yes">Yes</label><br>

                            <input type="radio" name="nutrition" id="nutrition-no" value="no">
                            <label for="nutrition-no">No</label><br>

                            <input type="radio" name="nutrition" id="nutrition-na" value="na">
                            <label for="nutrition-na">Not sure</label><br>

                            <h5>6. Do you have special dietary needs?</h5>
                            <input type="radio" name="dietary" id="yes-select" value="yes">
                            <label for="yes-select">Yes</label><br>

                            <input type="radio" name="dietary" id="no-select" value="no">
                            <label for="no-select">No</label><br>

                            <h5>7. If yes, please indicate which special dietary needs that you have.</h5>

                            <input type="radio" name="special-dietary" id="diabetic-diet-select" value="diabetic-diet">
                            <label for="diabetic-diet-select">Diabetic diet</label><br>

                            <input type="radio" name="special-dietary" id="allergies-select" value="allergies">
                            <label for="allergies-select">Allergies</label><br>

                            <input type="radio" name="special-dietary" id="religious-select" value="religious">
                            <label for="religious-select">Religious Restrictions</label><br>

                            <input type="radio" name="special-dietary" id="dietary-select" value="dietary">
                            <label for="diertary-select">Personal Dietary Restrictions</label><br>

                            <input type="radio" name="special-dietary" id="other-select2" value="other">
                            <label for="other-select2">Other</label><br>

                            <h5>8. How important is it for us to use sustainable foods?</h5>

                            <input type="radio" name="sustainability" id="very-important" value="very-important">
                            <label for="very-important">Very Important</label><br>

                            <input type="radio" name="sustainability" id="slightly-important" value="slightly-important">
                            <label for="slightly-important">Slightly Important</label><br>

                            <input type="radio" name="sustainability" id="indifferent" value="indifferent">
                            <label for="indifferent">Indifferent</label><br>

                            <input type="radio" name="sustainability" id="not-important" value="not-important">
                            <label for="not-important">Not that important</label><br>

                        </fieldset>

                        <label for="message">Any other comments, questions or concerns?</label>
                        <br>
                        <TEXTAREA name="message" id="message"></TEXTAREA>
                        <br>
                        <button type="button" class="btn btn-primary"><input type="submit" value="Submit"></button>

                    </form>  

                    <?php } ?>

                    <a href="admin.php">Go Back to Admin Page</a>
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
mysqli_free_result($result);

mysqli_close($mysqli);
?>