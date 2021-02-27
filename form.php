<!DOCTYPE html>
<html>
  <head>
    <title>Volunteer Form</title>
    <link rel="stylesheet" href="css/form.css" />
  </head>
  <body>
    <div class="container">
        <div class="header">
            <h2>Want to Volunteer!</h2>
        </div>
        <form id="form" class="form" action="includes/volunteer.inc.php" method="post" autocomplete="off">
            <div class="form-control">
                <label for="username">Name</label>
                <input type="text" placeholder="Name" name="name" id="username" />
                
                <small>Error message</small>
            </div>
            <div class="form-control">
                <label for="username">Email</label>
                <input type="email" placeholder="arj@gmail.com" name="email" id="email" />
                
                <small>Error message</small>
            </div>
            <div class="form-control">
                <label for="username">age</label>
                <input type="text" placeholder="20" name="age" id="password"/>
              
                <small>Error message</small>
            </div>
            <div class="form-control">
                <label for="username">location</label>
                <input type="text" placeholder="mumbai" name="location" id="password2"/>
               
                <small>Error message</small>
            </div>
            <button name="volunteer-btn">Submit</button>
        </form>
        <script src="Javascript/form.js"></script>
    </div>
   
    
  </body>
</html>