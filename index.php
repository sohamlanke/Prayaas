<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <title>Prayaas | NGO Website</title>
    <link rel="icon" href="icons/heartHand.png" />
    <link rel="stylesheet" href="css/style.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Pattaya&family=Poppins:wght@400;500&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto&family=Rock+Salt&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,400;0,500;1,300;1,400;1,500&family=Poppins:wght@500&family=Roboto:ital,wght@0,400;0,500;0,700;1,400;1,500&display=swap"
      rel="stylesheet"
    />

    <meta name="robots" content="index,follow" />
  </head>
  <body>
    <header class="main-head">
      <h1 id="logo">Prayaas</h1>
      <nav class="stroke">
        <ul>
          <li class="navLinks"><a href="#fund">Campaigns</a></li>
          
          <li class="navLinks"><a href="https://rahul020800.github.io/covid-19/">About Covid-19</a></li>
          <li class="navLinks"><a href="aboutUs.html">About us</a></li>
          <li class="navLinks"><a href="Admin-login.php">Admin Login</a></li>
        </ul>
      </nav>
      <a class="navButton" href="don2.php"
        ><button class="navButton" id="donateButton">Donate</button></a
      >
    </header>
    <!-- /* --------------------------------------- section1 --------------------------- */ -->

    <section class="sec1">
      <h1 class="head1">
        When we give cheerfully and accept <br />
        gratefully, everyone is blessed
      </h1>
      <h2 class="subHead1">
        Prayaas connects people with big heart’s who are willing to help needy
        <br />
        one’s those are facing financial, non-financial crisis by standing
        together
      </h2>
      <div class="joinButton">
        <a href="form.php"><button class="sec1Button">Join Us</button></a>
      </div>
    </section>

    <!-- /* --------------------------------------- section2 --------------------------- -->

    <section class="sec2">
      <h1 class="Objective">Our Objectives</h1>
      <div class="cards">
        <div class="card1">
          <div class="card-img1">
            <!-- <img src="images/poor.jpg" alt="" /> -->
          </div>
          <div class="card-text1">
            <h3>Help in Distress</h3>

            <p>
              We as a Community are providing help to people those are in a difficult situation due to Economic, natural disasters and medical crisis.So for us helping people in these difficult times is our primary objective.Your help will be a vitial role in the process of recovery.       
            </p>
          </div>
        </div>

        <div class="card1">
          <div class="card-img2">
            <!-- <img src="images/poor.jpg" alt="" /> -->
          </div>
          <div class="card-text1">
            <h3>Raise Awareness</h3>

            <p>
              Uplifting the current Social Crisis by gathering people for the awareness of situation and to help in possile way for the betterment of society.We want to spread awareness among people to come forward and have a small contribution for the cause.  

            </p>
          </div>
        </div>

        <div class="card1">
          <div class="card-img3">
            <!-- <img src="images/poor.jpg" alt="" /> -->
          </div>
          <div class="card-text1">
            <h3>Well-Being of Society</h3>

            <p>
              Early childhood education is basically for children between the ages of three and five. So for us removing the barrier between money and education should be ended.We educate every child to get their foundation clear.
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- /* --------------------------------------- section2 --------------------------- -->

    <section class="sec3" id="fund" style="margin-top: 15px;">
      <div class="head-flex">
        <h1 class="Objective pad">Fundraiser</h1>
        <img class="icon" src="icons/charity.png" alt="" />
      </div>

      <div class="first">
        <div class="camp-flex">
          <?php
                  require 'includes/dbh.inc.php';

                  $sql = "SELECT * FROM campaigns WHERE status = 'Active'";

                  if($result = mysqli_query($conn, $sql)){
                      if(mysqli_num_rows($result) > 0){
               
                          while($row = mysqli_fetch_array($result)){ 
                            // echo '<div style="display:block;">';

                            echo '<div class="camp-text1" >
                                <h2 class="heading">'.$row['title'].'</h2>
                                <div style="display:flex;">
                                <div class="campaign-image" style="text-align:center;">
            <img class="img-sec1" src="includes/uploads/'.$row['filename'].'" alt="" />
          </div>
                                <div >
                                <p class="para">'.
                                  $row['description1']
                                .'</p>
                                </div>
                                </div>
                                <div style="text-align:center">
                                <a href="don2.php?cid='.$row['cid'].'" class="camphover1"
                                  ><button class="campDonate1">Donate now</button></a
                                >
                                </div>
                                
                              </div>';
                        // echo "</div>";
                              echo "<br>";
                              echo "<hr>";
                              echo "<br>";

                          }
                        }
                      }
           ?>
          <!-- <div>
            <img class="img-sec1" src="images/asaam Flood.jpg" alt="" />
          </div> -->
          <!-- <div class="camp-text1">
            <h2 class="heading">Asaam Relife Fund</h2>
            <p class="para">
              Assam has been hit by a disastrous flood. This affected more than 22.34 lakh people across 22 districts. Join with many others to improve the condition, help the affected and prosper for better.
            </p>
            <a href="don2.html" class="camphover1"
              ><button class="campDonate1">Donate now</button></a
            >
            <a href="donation1.html" class="camphover2"
              ><button class="campLearn">Learn more</button></a
            >
          </div> -->
        </div>
        <!-- <div class="camp-flex second">
          <div class="camp-text2">
            <h2 class="heading1">Rahaat Covid-19</h2>
            <p class="para1">
              The Lockdown because of spread of COVID-19 has been a very trying time for those who survive on daily labour. Even a small donation in any means would act as a lift for those 112 million.
            </p>
            <a href="don2.html" class="camphover1"
              ><button class="campDonate">Donate now</button></a
            >
            <a href="donation1.html" class="camphover2"
              ><button class="campLearn">Learn more</button></a
            >
          </div>
          <div class="border">
            <img class="img-sec2" src="images/labourers 1.png" alt="" />
          </div>
        </div> -->
      </div>
    </section>
    
    <!-- --------------------------------- SEC LAST -------------------------------- -->
    <section class="sec4">
      <div class="main-div">
        <div class="foot-flex">
          <div>
            <h1 class="foot-head">PRAYAAS</h1>
          </div>
          <div>
            <ul class="Lists">
              <li class="space foot-li">Features</li>
              <li class="foot-li">
                <a href="Admin-login.php" class="foot-link" target="_blank"> Admin Login</a>
              </li>
              <li class="foot-li">
                <a href="form.php" class="foot-link"> Volunteer us</a>
              </li>
              <li class="foot-li">
                <a href="don2.php" class="foot-link"> Donation</a>
              </li>
              <li class="foot-li">
                <a href="feedback.html" class="foot-link"> Feedback</a>
              </li>
              <li class="foot-li">
                <a href="#" class="foot-link"> Instagram</a>
              </li>
            </ul>
          </div>
          <div>
            <ul class="Lists">
              <li class="space foot-li">Info</li>
              <li class="foot-li">
                <a href="aboutUs.html" class="foot-link">About Us</a>
              </li>
              <li class="foot-li">
                <a href="aboutUs.html" class="foot-link">What we do</a>
              </li>
              <li class="foot-li">
                <a href="aboutUs.html" class="foot-link">Our Vision</a>
              </li>
            </ul>
          </div>
          <div>
            <ul class="Lists">
              <li class="space foot-li">Events</li>
              <li class="foot-li">
                <a href="#" class="foot-link">Campaigns</a>
              </li>
              <li class="foot-li">
                <a href="#" class="foot-link">Fund Raiser</a>
              </li>
              <li class="foot-li">
                <a href="#" class="foot-link">Covid-19 Relife</a>
              </li>
            </ul>
          </div>
        </div>
        <hr class="line" />
        <div class="end-page">
          <footer>
            <div class="foot-flex2">
            <div id="social-head">
              <h3>Connect with us through</h3>
            </div>
            <div class="social-logo">
              <a href="#">
                <img src="icons/twitter.svg" alt="" />
              </a>
              <a href="#">
                <img src="icons/facebook.svg" alt="" />
              </a>
              <a href="#">
                <img src="icons/gmail.svg" alt="" />
              </a>
              

            </div>
            <div class="last"> <a class="foot-next" href="faq.html">FAQ</a> | <a class="foot-next" href="privacy.html">Privacy Policy</a> | &#169; Prayaass</div>
          </div>
          
           
        
          </footer>
        </div>
      </div>
    </section>
  </body>
</html>

<?php  

  if (isset($_GET['donation'])) {
      $donation = $_GET['donation'];
      echo '<script>alert("Your transcation was '.$donation.'")</script>';
    } 


?>
