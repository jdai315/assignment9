<?php
    $name = $_GET['name'];
?>

<?php
$currentTitle = "CSC 174 | Team Juneau | Assignment 9";
include "inc/top.inc";
?>

        <!-- Start Navigation -->
        <nav class="main-menu">
            <span class="logo"><a href="index.php">Team Juneau: Assignment 9</a></span>
            <ul>
                <li><a class="menu-link" href="index.php">Go Back</a></li>
            </ul>
        </nav>
        <!-- End Navigation -->

        <section id="heading">
            <h1>University of Rochester Dining Services - Survey Confirmation</h1>
        </section>
        
        <section id="thank-you" class="confirmation-message">
            <div class="row align-items-center">
                <div class="column col-md-12 col-sm-12 col-xs-12">
                    <h2>Thank you <?php echo $name;?></h2>
                    <p>Thank you for filling out the survey. Your responses will be used to improve U of R Dining Services for all!</p>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="column col-md-12 col-sm-12 col-xs-12">
                    <button type="button" class="btn btn-info"><a href="index.php">Go Back</a></button>
                </div>
            </div>           
        </section>

<?php
include "inc/footer.inc";
?>

    </body>
</html>