<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <title>CSC 174 | Team Juneau | Assignment 9</title>
    </head>
    <body>

        <!-- Start Navigation -->
        <nav class="main-menu">
            <span class="logo"><a href="#">Team Juneau: Assignment #9</a></span>
            <ul>
                <li><span>Go to: </span></li>
                <li><a class="menu-link" href="#about">About</a></li>
                <li><a class="menu-link" href="#survey">Survey</a></li>
                <li><a class="menu-link" href="#credits">Credits</a></li>
            </ul>
        </nav>
        <!-- End Navigation -->

        <section id="main-image">
            <img src="images/dininghall.jpg">
            <div class="image-overlay">
                <h1>University Of Rochester Dining Services</h1>
                <span class="tagline">University of Rochester Dining provides more than just your average dining experience. We strive to provide our customers with the best service, experience and most importanly, the most delicious cuisine!</span>
            </div>
        </section>

        <section id="about">
            <div class="row align-items-center">
                <div class="column col-md-6 col-sm-6 col-xs-6">
                    <h2>About</h2>
                    <span class="tagline">We have a deep respect for and commitment to protecting and improving the environment while making a positive impact in the lives of our local and global community.</span>
                </div>
                <div class="column col-md-6 col-sm-6 col-xs-6">
                    <button type="button" class="btn btn-info"><a href="#survey">Complete Survey</a></button>
                </div>
            </div> 
        </section>

        <section id="information">
            <div class="row align-items-center">
                <div class="column col-md-4 col-sm-6 col-xs-12">
                    <img class="f-image" src="images/food1.png">
                </div>
                <div class="column col-md-8 col-sm-6 col-xs-12">
                    <h3>Dedication to Local Foods</h3>
                    <p>Between our Local Foods Week Celebrations and our enduring focus throughout the year to source as much as possible from our local area and within New York State, we have been on the leading edge of the local foods movement for some time. We are extremely proud of this fact and are constantly looking for additional ways to support our local environment while providing our students with quality products. </p>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="column col-md-4 col-sm-6 col-xs-12">
                    <img class="f-image" src="images/food2.jpg">
                </div>
                <div class="column col-md-8 col-sm-6 col-xs-12">
                    <h3>Culinary Talent</h3>
                    <p>Sourcing talent from fine dining, gastropubs, hotels, Wegmans, Disney, and more, we are extremely proud of the culinary talent we have on campus. Our chefs regularly compete in NACUFS ACF Culinary Challenges and we boast numerous gold, silver and bronze medals among our ranks. Also, our Executive Chef was just recently awarded with his Pro Chef III Certified Executive Chef (CEC) designation from the Culinary Institute of America and the American Culinary Federation.</p>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="column col-md-4 col-sm-6 col-xs-12">
                    <img class="f-image" src="images/food3.png">
                </div>
                <div class="column col-md-8 col-sm-6 col-xs-12">
                    <h3>Student Connection</h3>
                    <p>We pride ourselves on remaining close to our students and student groups, freely sharing information, asking for and responding to feedback, being inclusive about all changes big and small, and allowing and encouraging them to take ownership of the program. On campus we have become a model for other service departments to mirror when it comes to our interactions with the student community.</p>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="column col-md-4 col-sm-6 col-xs-12">
                    <img class="f-image" src="images/food4.jpg">
                </div>
                <div class="column col-md-8 col-sm-6 col-xs-12">
                    <h3>Sustainability</h3>
                    <p>Sustainability is a huge focus for our campus. As such, we continue to strive for sustainable practices within all aspects of dining. Local Food is a driving force for our program. Currently on campus, over 56% of all of the items we sell and serve on campus are grown, raised, or wholly manufactured within New York State. We have also created a program called UR Local that highlights local products, farms, towns and more within each of our locations. We’ve also created a logo for this program to help us visually associate our local products in every respect.</p>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="column col-md-4 col-sm-6 col-xs-12">
                    <img class="f-image" src="images/food5.png">
                </div>
                <div class="column col-md-8 col-sm-6 col-xs-12">
                    <h3>Nutrition</h3>
                    <p>We strive to provide healthy and delicious options in all of our locations. In addition to our deliberate efforts to offer healthier choices separately, we also make decisions that seamlessly integrate healthier options into our menus that create more opportunities for healthy choices within our standard menu offerings. We employ a full-time nutritionist and work closely with University Health Service to counsel students with dietary preferences.</p>
                </div>
            </div>
        </section>

        <section id="survey">
            
            <div class="row align-items-center">
                <div class="column col-md-12 col-sm-12 col-xs-12">
                    <h2>Survey</h2>
                    <p>Let us know how we're doing and how we can better serve you by taking the survey below. This survey contains 8 questions. It will take you less than 5 mins to finish. Your answers will help us improve our dining services at University of Rochester.</p>
                </div>
            </div>

            <div class="row align-items-center">
                <div class="column col-md-12 col-sm-12 col-xs-12">
                    <form method="post" action="survey-processor.php">

                        <label for="name">Name:</label>
                        <input type="text" name="name" id="name">
                        <br><br>

                        <label for="email">Email:</label>
                        <input type="text" name="email" id="email">
                        <br><br>

                        <label for="phone">Telephone:</label>
                        <input type="text" name="phone" id="phone">
                        <br><br>

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

                            <h5>2. Which food location did you visit?</h5>
                            
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

                            <h5>3. Please rate the quality of customer service</h5>
                            
                            <input type="radio" name="quality" id="excellent-select" value="excellent">
                            <label for="excellent-select">Excellent</label><br>

                            <input type="radio" name="quality" id="very-good-select" value="very-good">
                            <label for="very-good-select">Very good</label><br>

                            <input type="radio" name="quality" id="good-select" value="good">
                            <label for="good-select">Good</label><br>

                            <input type="radio" name="quality" id="fair-select" value="fair">
                            <label for="fair-select">Fair</label><br>

                            <input type="radio" name="quality" id="poor-select" value="poor">
                            <label for="poor-select">Poor</label><br>

                            <h5>4. How often do you purchase food on campus?</h5>
                            
                            <input type="radio" name="purchase" id="never-select" value="never">
                            <label for="never-select">Never</label><br>

                            <input type="radio" name="purchase" id="less-than-once-a-month-select" value="less-than-once-a-month">
                            <label for="less-than-once-a-month-select">Less than once a month</label><br>

                            <input type="radio" name="purchase" id="1-3-times-a-month-select" value="1-3-times-a-month">
                            <label for="1-3-times-a-month-select">1-3 times a month</label><br>

                            <input type="radio" name="purchase" id="1-3-times-per-week-select" value="1-3-times-per-week">
                            <label for="1-3-times-per-week-select">1-3 times per week</label><br>

                            <h5>5. If you seldom or never buy food on campus, where do you usually get the food that you eat while on campus?</h5>
                            
                            <input type="radio" name="eat" id="take-from-home-select" value="take-from-home">
                            <label for="take-from-home-select">Take from home</label><br>

                            <input type="radio" name="eat" id="restaurants-select" value="restaurants">
                            <label for="restaurants-select">Restaurants</label><br>

                            <input type="radio" name="eat" id="fast-food-select" value="fast-food">
                            <label for="fast-food-select">Fast food</label><br>

                            <input type="radio" name="eat" id="bakery-select" value="bakery">
                            <label for="bakery-select">Bakery</label><br>

                            <h5>6. Do you have special dietary needs?</h5>
                            <input type="radio" name="dietary" id="yes-select" value="yes">
                            <label for="yes-select">Yes</label><br>

                            <input type="radio" name="dietary" id="no-select" value="no">
                            <label for="no-select">No</label><br>

                            <h5>7. If yes, please indicate which special dietary needs that you have.</h5>
                            
                            <input type="radio" name="special-dietary" id="diabetic-diet-select" value="diabetic-diet">
                            <label for="diabetic-diet-select">Diabetic diet</label><br>

                            <input type="radio" name="special-dietary" id="low-cholesterol-select" value="low-cholesterol">
                            <label for="low-cholesterol-select">Low cholesterol</label><br>

                            <input type="radio" name="special-dietary" id="other-select2" value="other">
                            <label for="other-select2">Other</label><br>

                            <h5>8. How late do you think the cafeteria should be open?</h5>
                            
                            <input type="radio" name="cafeteria" id="7pm-select" value="7pm">
                            <label for="7pm-select">7pm</label><br>

                            <input type="radio" name="cafeteria" id="8pm-select" value="8pm">
                            <label for="8pm-select">8pm</label><br>

                            <input type="radio" name="cafeteria" id="9pm-select" value="9pm">
                            <label for="9pm-select">9pm</label><br>

                            <input type="radio" name="cafeteria" id="other-select3" value="other">
                            <label for="other-select3">Other</label><br>
                            
                        </fieldset>

                        <label for="message">Comments, Questions or Concerns?</label>
                        <br>
                        <TEXTAREA name="message" id="message"></TEXTAREA>
                        <br>
                        <button type="button" class="btn btn-primary"><input type="submit" value="Submit"></button>
                        
                    </form>
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
