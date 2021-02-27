<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <title>Prayaas | to make change</title>
    <link rel="icon" href="icons/heartHand.png" />
    <link rel="stylesheet" href="css/don2.css" />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
      integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
      crossorigin="anonymous"
    />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Pattaya&family=Poppins:wght@400;500&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="container">
      <div class="header" style="text-align: center;">
        <h2>Prayaas Donation</h2>
      </div>
      <form id="form" class="form" onsubmit="return validate()" action="includes/donations.inc.php" method="post">
        <div class="form-control">
          <label for="username">Name</label>
          <input
            name = "name"
            type="text"
            placeholder="your name"
            id="name"
            autocomplete="off"
          />
          <i class="fas fa-check-circle"></i>
          <i class="fas fa-exclamation-circle"></i>
          <small>Error message</small>
        </div>
        <div class="form-control">
          <label for="username">Email</label>
          <input
            name = "email"
            type="text"
            placeholder="your@email.com"
            id="email"
            autocomplete="off"
          />
          <i class="fas fa-check-circle"></i>
          <i class="fas fa-exclamation-circle"></i>
          <small>Error message</small>
        </div>

        <div class="form-control">
          <label for="amount">Amount</label>
          <input
            name = "amount"
            type="text"
            placeholder="in Rupees"
            id="amount"
            autocomplete="off"
          />
          <i class="fas fa-check-circle"></i>
          <i class="fas fa-exclamation-circle"></i>
          <small>Error message</small>
        </div>
        <div class="custom-select form-control">
          <label for="donation" class="drop">Donating to : </label>
          <select name="cid">
            <?php 
                require 'includes/dbh.inc.php';
                $sql = "SELECT * FROM campaigns ;";

                $cid = 0;

                if (isset($_GET['cid'])) {
                  $cid = $_GET['cid'];
                }

                if($result = mysqli_query($conn, $sql)){
                  if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_array($result)){
                      echo "<option value = ".$row['cid'];
                      if ($row['cid'] == $cid) {
                        echo " selected ";
                      }
                      echo ">".$row['title']."</option>";
                    }
                  }
                }
             ?>
           <!--  <option value="volvo">Volvo</option>
            <option value="saab">Saab</option>
            <option value="mercedes">Mercedes</option>
            <option value="audi">Audi</option> -->
          </select>
          <div style="text-align: center; display: inline; color: red;">
             <p style="margin: 0px;">
            <?php 

                if (isset($_GET['error'])) {
                  if ($_GET['error'] == "emptyfields") {
                    echo "Empty Fields";
                  }
                  elseif ($_GET['error'] == "invalidmail") {
                    echo "Invalid Email";
                  }
                  elseif ($_GET['error'] == "amtNotNumeric") {
                    echo "Amount not numeric";
                  }
                  elseif ($_GET['error'] == "transactionerror") {
                    echo "Transaction Error";
                  }
                }


             ?>
          </p>
          </div>
         
        </div>

        <div class="form-control hi">
          <!-- <div class="checkbox">
            <input type="checkbox" id="email-recive" name="isSubscription">
            <label for="email-subscribe">Subscribe to newsletter</label>
          </div>
 -->
          <!-- <div class="checkbox">
            <input type="checkbox" id="email-recipt" />
            <label for="">Mail me recipt</label>
          </div> -->
        </div>
        <button type="submit" name="donation-btn">Donate</button>
      </form>
    </div>
    <script src="js/donh.js"></script>
  </body>
</html>
