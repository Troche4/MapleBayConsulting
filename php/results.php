
<html lang="en" xmlns="http://www.w3.org/1999/xhtml%22%3E">

<head>
  <meta charset="utf-8" />
  <title>Maple Bay Consulting | Contact Us</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
  <link href='https://fonts.googleapis.com/css?family=Nunito Sans' rel='stylesheet'>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
    integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../css/styles.css">
</head>

<div class="row">
  <div class="col">
    <a href="../Welcome.html">
      <img class="logo" src="../images/Logo.jpeg">
    </a>
  </div>
</div>

<body>
  <div id="navbar">
      <div class="dropdown">
        <a class="dropBtn" style="color:#f2f2f2;" href="Overview.html">Overview</a>
        <div class="dropContent">
          <a href="Overview.html">Who We Are</a>
          <a href="Overview.html#OurProcess">Our Process</a>
          <a href="Overview.html#OurServices">Our Services</a>
          <a href="Overview.html#OurClients">Our Clients</a>
        </div>
      </div>
      <div class="dropdown">
        <a class="dropBtn" style="color:#f2f2f2;" href="AboutUs.html">About Us</a>
        <div class="dropContent">
          <a href="AboutUs.html">Company Overview</a>
          <a href="AboutUs.html">Mission and Vision</a>
          <a href="AboutUs.html#JoesBioAndExperience">Joes Bio And Experience</a>
          <a href="AboutUs.html#ClientLocationsMap">Our Clients</a>
          <a href="AboutUs.html#Testimonials">Testimonials</a>
        </div>
      </div>
      <div class="dropdown">
        <a class="dropBtn" style="color:#f2f2f2;" href="OurProcess.html">Our Process</a>
        <div class="dropContent">
          <a href="OurProcess.html">How We Spend Our Time</a>
          <a href="OurProcess.html">Process Visualization</a>
          <a href="OurProcess.html">Strategic Planning</a>
          <a href="OurProcess.html#GrowthAgenda">Growth Agenda</a>
          <a href="OurProcess.html#FinancialTurnaround">Financial Turnaround</a>
        </div>
      </div>
      <div class="dropdown">
        <a class="dropBtn" style="color:#f2f2f2;" href="OurServices.html">Our Services</a>
        <div class="dropContent">
          <a href="OurServices.html">Business Transition</a>
          <a href="OurServices.html#TalentDevelopment">Talent Development</a>
          <a href="OurServices.html#TeamBuilding">Team Building</a>
          <a href="OurServices.html#StrategicPlanning">Strategic Planning</a>
        </div>
      </div>
      <div class="dropdown">
        <a class="dropBtn" style="color:#f2f2f2;" href="ContactUs.html">Contact Us</a>
        <div class="dropContent">
          <a href="ContactUs.html">Contact Information</a>
          <a href="ContactUs.html#Webform">Strategic Questionnaire</a>
        </div>
      </div>
    </div>
    <div class="header">
      Submission confirmed
    </div>
    <script>
      window.onscroll = function () { myFunction() };
      var navbar = document.getElementById("navbar");
      var sticky = navbar.offsetTop;
      function myFunction() {
        if (window.pageYOffset >= sticky + 10) {
          navbar.classList.add("sticky")
        } else {
          navbar.classList.remove("sticky")
        }
      }
    </script>
  </body>
</html>


<?php
    $MBCMail = "roche.trey@gmail.com";
    $MBCSubject = "Strategic Questionnaire Results: " .$_POST['name'] ." from" .$_POST['org'];
    $clientSubject = "Maple Bay Consulting - Strategic Questionnaire results";
    $MBCMessage = "Hi Joe, \n\nHere are the strategic questionnaire results for " .$_POST['name'] ." with " .$_POST['org'] .":\n\n"

    ."1. Is your company in a field of crowded competitors?\n\t" .$_POST['q1'] ."\n"

    ."2. Do you need to find a new market to play in?\n\t" .$_POST['q2'] ."\n"

    ."3. Is there a competitor with a siginificant advantage?\n\t" .$_POST['q3'] ."\n"

    ."4. Are there forces (social, legal, technical, regulatory, or demographic) over which you seem to have little or no control that are forming your destiny?\n\t" .$_POST['q4'] ."\n"

    ."5. Is there a scenario that quickly comes to mind where your organization grows exponentially?\n\t" .$_POST['q5'] ."\n"

    ."6. Is there a scenario where your company quickly shrinks?\n\t" .$_POST['q6'] ."\n"

    ."7. Do you know what your competitors are doing?\n\t" .$_POST['q7'] ."\n"

    ."8. Can you quickly identify a smart, realistic, relatively fast way to gain a sustainable competitive advantage?\n\t" .$_POST['q8'] ."\n"
    
    ."9. Do you have the right people in the right jobs?\n\t" .$_POST['q9'] ."\n"

    ."10. Do you constantly seek out new talent?\n\t" .$_POST['q10'] ."\n"

    ."11. Does your company flawlessly execute for the customer?\n\t" .$_POST['q11'] ."\n"

    ."12. Do you regularly look for new partnerships, mergers, acquisitions that make you stronger?\n\t" .$_POST['q12'] ."\n"

    ."13. Do you know what your core competency is?\n\t" .$_POST['q13'] ."\n"

    ."14. Is there something that you are best in the world at? " .$_POST['q14'] ."\n"

    ."15. Is there something in your business you are passionate about?\n\t" .$_POST['q15'] ."\n"

    ."16. Do you know what drives profit in your company?\n\t" .$_POST['q16'] ."\n"

    ."17. Do you know which products bring profit and which don't?\n\t" .$_POST['q17'] ."\n"
    
    ."18. Is operational excellence a focus?\n\t" .$_POST['q18'] ."\n"

    ."19. Is your company customer intimate?\n\t" .$_POST['q19'] ."\n"

    ."20. Do you offer customers the best product possible by continuously innovating and pushing the boundaries of performance?\n\t" .$_POST['q20'] ."\n"

    ."21. Does your company develop and maintain flawless operational execution?\n\t" .$_POST['q21'] ."\n"

    ."22. Does your company have a performance-oriented culture and/or a work environment that is challenging, satisfying, and fun?\n\t" .$_POST['q22'] ."\n"

    ."23. Is your company organized (sales teams, production, functions, etc.) in the best way to acheive success?\n\t" .$_POST['q23'] ."\n"

    ."24. Are you innovative as a company?\n\t" .$_POST['q24'] ."\n"

    ."25. Do you attract and keep the best talent?\n\t" .$_POST['q25'] ."\n"

    ."26. Is your company success driven by outstanding leadership?\n\t" .$_POST['q26'] ."\n"

    ."27. Does your company make growth happen with mergers and partnerships?\n\t" .$_POST['q27'] ."\n"

    ."28. Does your company keep good metrics to measure success and performance?\n\t" .$_POST['q28'] ."\n"

    ."29. Does your strategic plan outline the best way to grow the business profitably?\n\t" .$_POST['q29'] ."\n"

    ."30. Can the business execute your strategy?\n\t" .$_POST['q30'] ."\n"

    ."31. Is the short term and long term balanced in your strategy?\n\t" .$_POST['q31'] ."\n"

    ."32. Do you have milestones for executing your strategic plan?\n\t" .$_POST['q32'] ."\n"

    ."33. Are there linkages between people, operations and strategy to acheive your strategic plan?\n\t" .$_POST['q33'] ."\n";

    $clientMessage = "Hi ".$_POST['name'] .", \n\n Here are the strategic questionnaire results: \n\n "

    ."1. Is your company in a field of crowded competitors?\n\t" .$_POST['q1'] ."\n"

    ."2. Do you need to find a new market to play in?\n\t" .$_POST['q2'] ."\n"

    ."3. Is there a competitor with a siginificant advantage?\n\t" .$_POST['q3'] ."\n"

    ."4. Are there forces (social, legal, technical, regulatory, or demographic) over which you seem to have little or no control that are forming your destiny?\n\t" .$_POST['q4'] ."\n"

    ."5. Is there a scenario that quickly comes to mind where your organization grows exponentially?\n\t" .$_POST['q5'] ."\n"

    ."6. Is there a scenario where your company quickly shrinks?\n\t" .$_POST['q6'] ."\n"

    ."7. Do you know what your competitors are doing?\n\t" .$_POST['q7'] ."\n"

    ."8. Can you quickly identify a smart, realistic, relatively fast way to gain a sustainable competitive advantage?\n\t" .$_POST['q8'] ."\n"

    ."9. Do you have the right people in the right jobs?\n\t" .$_POST['q9'] ."\n"

    ."10. Do you constantly seek out new talent?\n\t" .$_POST['q10'] ."\n"

    ."11. Does your company flawlessly execute for the customer?\n\t" .$_POST['q11'] ."\n"

    ."12. Do you regularly look for new partnerships, mergers, acquisitions that make you stronger?\n\t" .$_POST['q12'] ."\n"

    ."13. Do you know what your core competency is?\n\t" .$_POST['q13'] ."\n"

    ."14. Is there something that you are best in the world at?\n\t" .$_POST['q14'] ."\n"

    ."15. Is there something in your business you are passionate about?\n\t" .$_POST['q15'] ."\n"

    ."16. Do you know what drives profit in your company?\n\t" .$_POST['q16'] ."\n"

    ."17. Do you know which products bring profit and which don't?\n\t" .$_POST['q17'] ."\n"
    
    ."18. Is operational excellence a focus?\n\t" .$_POST['q18'] ."\n"

    ."19. Is your company customer intimate?\n\t" .$_POST['q19'] ."\n"

    ."20. Do you offer customers the best product possible by continuously innovating and pushing the boundaries of performance?\n\t" .$_POST['q20'] ."\n"

    ."21. Does your company develop and maintain flawless operational execution?\n\t" .$_POST['q21'] ."\n"

    ."22. Does your company have a performance-oriented culture and/or a work environment that is challenging, satisfying, and fun?\n\t" .$_POST['q22'] ."\n"

    ."23. Is your company organized (sales teams, production, functions, etc.) in the best way to acheive success?\n\t" .$_POST['q23'] ."\n"

    ."24. Are you innovative as a company?\n\t" .$_POST['q24'] ."\n"

    ."25. Do you attract and keep the best talent?\n\t" .$_POST['q25'] ."\n"

    ."26. Is your company success driven by outstanding leadership?\n\t" .$_POST['q26'] ."\n"

    ."27. Does your company make growth happen with mergers and partnerships?\n\t" .$_POST['q27'] ."\n"

    ."28. Does your company keep good metrics to measure success and performance?\n\t" .$_POST['q28'] ."\n"

    ."29. Does your strategic plan outline the best way to grow the business profitably?\n\t" .$_POST['q29'] ."\n"

    ."30. Can the business execute your strategy?\n\t" .$_POST['q30'] ."\n"

    ."31. Is the short term and long term balanced in your strategy?\n\t" .$_POST['q31'] ."\n"

    ."32. Do you have milestones for executing your strategic plan?\n\t" .$_POST['q32'] ."\n"

    ."33. Are there linkages between people, operations and strategy to acheive your strategic plan?\n\t" .$_POST['q33'] ."\n";

    if ($_POST['clientEmail'] == '') {
        echo "Hi ".$_POST['name'] ."!  We have recieved your submission. Thank you for taking the Strategic Questionnaire.";
    }
    else {
        echo "Hi ".$POST['name'] ."!  We have recieved your submission! Your results will be emailed to you at " .$_POST['email'] .".  Thank you for taking the Strategic Questionnaire.";
        mail($_POST['clientEmail'], $clientSubject, $clientMessage, "-f$maplebayconsulting@att.net");
    }
    mail($MBCMail, $MBCSubject, $MBCMessage);
?>


<html>
  <div id=footer>
    <a href="" style=color:white;>Privacy Policy</a>
    <a href="" style=color:white;>maplebayconsulting@att.net</a>
    <a href="" style=color:white;>(248)-505-4082</a>
  </div>
</html>