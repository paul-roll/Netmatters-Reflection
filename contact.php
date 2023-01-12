<?php
    $pagetitle = "Contact Us";
    include("inc/header.php");

    $validation = array();
    $validation[] = [0, "validation.phone"]; //testing line
    $validation[] = [0, "The message must be at least 5 characters."]; //testing line
    $validation[] = [1, "Your message has been sent!"]; //testing line
?>

            <main>

                <!-- Breadcrumb -->
                <section class="breadcrumb">
                    <div class="wrapper">
                        <p>Home / Our Offices</p>
                        <!-- Wrapper margins too big -->

                    </div>
                </section>

                <!-- Offices -->
                <section class="offices">
                    <div class="wrapper">
                        <h2>Our Offices</h2>
                        <div class="flex-container">
<?php foreach ($offices as $office) {
echo"<div>\n";    
echo"                        <div class='office-item'>\n";
echo"                            <a href='#'><img class='office-image' src='img/offices/" . $office["office"] . ".jpg' alt=''></a>\n";
echo"                            <div>\n";
echo"                                <h3><a href='#'>" . $office["office"] . "</a></h3>\n";
echo"                                <ul>\n";
    echoList($office["address"]);
echo"                                </ul>\n";
echo"                                <p><a href='#'>" . $office["phone"] . "</a></p>\n";
echo"                                <a href='#'><div class='btn'>View More</div></a>\n";
echo"                           </div>\n";
echo"                        </div>\n";
echo"<iframe width='100%' height='300px' src='https://maps.google.com/maps?q=Netmatters," . $office["address"][4] . "&amp;t=&amp;z=17&amp;ie=UTF8&amp;iwloc=&amp;output=embed' frameborder='0' scrolling='no' marginheight='0' marginwidth='0'></iframe>";
echo"</div>\n";   
} ?>
                        </div>
                    </div>
                </section>

                <!-- Contact -->
                <section class="contact">
                    <div class="wrapper">
                        <div class="flex-container">
                            <div class="flex-item">
                                <p class="bold">Email us on:</p>
                                <p class="email"><a href="#">sales@netmatters.com</a></p>
                                <p class="bold">Business hours:</p>
                                <p class="bold">Monday - Friday 07:00 - 18:00 </p>
                                <p class="bold out-of-hours">Out of Hours IT Support <i class="fa-solid fa-angle-down"></i></p>
                                <div class="hidden">
                                    <p>Netmatters IT are offering an Out of Hours service for Emergency and Critical tasks.</p>
                                    <p class="bold">Monday - Friday 18:00 - 22:00<br>Saturday 08:00 - 16:00<br>Sunday 10:00 - 18:00</p>
                                    <p>To log a critical task, you will need to call our main line number and select Option 2 to leave an Out of Hours  voicemail. A technician will contact you on the number provided within 45 minutes of your call.</p>
                                </div>
                            </div>
                            <div class="flex-item">
                                <form>
                                    <div class="flex-form">
                                        <?php echoValidation($validation); ?>
                                        <div class="half">
                                            <label class="required" for="name">Your Name</label><br>
                                            <input id="name" type="text">
                                        </div>
                                        <div class="half">
                                            <label class="" for="company">Company Name</label><br>
                                            <input id="company" type="text">
                                        </div>
                                        <div class="half">
                                            <label class="required" for="email">Your Email</label><br>
                                            <input id="email" type="text">
                                        </div>
                                        <div class="half">
                                            <label class="required" for="phone">Your Telephone Number</label><br>
                                            <input id="phone" type="text">
                                        </div>
                                        <div>
                                            <label class="required" for="subject">Subject</label><br>
                                            <input id="subject" type="text">
                                        </div>
                                        <div>
                                            <label class="required" for="message">Message</label><br>
                                            <textarea name="message" cols="50" rows="10" id="message"></textarea>
                                        </div>

                                        <div class="checkboxwrapper">
                                            <input id="checkbox" type="checkbox">
                                            <label class="fa-solid" for="checkbox"></label>
                                            <label class="checkbox-label" for="checkbox">Please tick this box if you wish to receive marketing information from us. Please see our <a href="#">Privacy Policy</a> for more information on how we keep your data safe.</label>
                                        </div>

                                        <div>
                                            <input id="enquiry" type="submit" value="Send Enquiry">
                                            <div class="right"><span class="required">*</span> Fields Required</div>
                                        </div>

                                    </div>
                                    
                                </form>
                            </div>
                        </div>




                    </div>
                </section>


                <?php include("inc/newsletter.php"); ?>

            </main>

<?php include("inc/footer.php"); ?>