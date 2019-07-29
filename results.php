
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
  <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=WorkSans' rel='stylesheet'>
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lora" />
  <link href='https://fonts.googleapis.com/css?family=Nunito Sans' rel='stylesheet'>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
    integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<div class=row>
  <div class=col>
    <a href="Welcome.html">
      <img class=logo src=Logo.jpeg>
    </a>
  </div>
  <div class=col>
    <div class=searchBarWrapper>
      <form action="searcher.php">
        <input class=searchBar type="text" placeholder="Search..."><button type='submit'>&#x1F50D<i
            class="fa fa-serach"></i></button>
      </form>
    </div>
  </div>
</div>

<body>
  <div id=navbar>
    <a href="Homepage.html">Overview</a>
    <a href="AboutUs.html">About Us</a>
    <a href="OurProcess.html">Our Process</a>
    <a href="OurServices.html">Our Services</a>
    <a href="ContactUs.html">Contact Us</a>
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
    $MBCMail = "roche.trey@gmail.com"
    $MBCSubject = "Strategic Questionnaire Results: " .$_POST['name'] ." from" .$_POST['org';]
    $clientSubject = "Maple Bay Consulting - Strategic Questionnaire results";
    $MBCMessage = "Hi Joe, \n\n Here are the strategic questionnaire results for " .$POST_['name'] ." with" .$POST_['org'] .":\n "

    ."1. Is your company in a field of crowded competitors? " .$_POST['q1'] ."\n"
    ."2. Do you need to find a new market to play in? " .$_POST['q2'] ."\n"
    ."3. Is there a competitor with a siginificant advantage? " .$_POST['q3'] ."\n"
    ."4. Are there forces (social, legal, technical, regulatory, or demographic) over which yuo seem to have little or no control that are forming your destiny? " .$_POST['q4'] ."\n"
    ."5. Is there a scenario that quickly comes to mind where your organization grows exponentially? " .$_POST['q5'] ."\n"
    ."6. Is there a scenario where your company quickly shrinks? " .$_POST['q6'] ."\n"
    ."7. Do you know what your competitors are doing? " .$_POST['q7'] ."\n"
    ."8. Can you identify a smart, realistic, relatively fast way to gain a sustainable competitive advantage? " .$_POST['q8'] ."\n";

    $clientMessage = "Hi ".$POST_['name'] .", \n\n Here are the strategic questionnaire results: \n "
    ."1. Is your company in a field of crowded competitors? " .$_POST['q1'] ."\n"
    ."2. Do you need to find a new market to play in? " .$_POST['q2'] ."\n"
    ."3. Is there a competitor with a siginificant advantage? " .$_POST['q3'] ."\n"
    ."4. Are there forces (social, legal, technical, regulatory, or demographic) over which yuo seem to have little or no control that are forming your destiny? " .$_POST['q4'] ."\n"
    ."5. Is there a scenario that quickly comes to mind where your organization grows exponentially? " .$_POST['q5'] ."\n"
    ."6. Is there a scenario where your company quickly shrinks? " .$_POST['q6'] ."\n"
    ."7. Do you know what your competitors are doing? " .$_POST['q7'] ."\n"
    ."8. Can you identify a smart, realistic, relatively fast way to gain a sustainable competitive advantage? " .$_POST['q8'] ."\n";

    if ($_POST['email'] == '') {
        echo "Hi ".$POST_['name'] ."!  We have recieved your submission. Thank you for taking the Strategic Questionnaire.";
        mail($_POST['email'], $clientSubject, $clientMessage)
    }
    else {
        echo "Hi ".$POST['name'] ."!  We have recieved your submission! Your results will be emailed to you at " .$email .".  Thank you for taking the Strategic Questionnaire.";
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