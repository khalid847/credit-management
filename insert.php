<?php
    include 'connection.php'; ?>

  <?php
    
        if(isset($_POST['done'])){
        $UserName = $_POST['UserName'];
        $Email = $_POST['Email'];
        $Contact = $_POST['Contact'];
        $Credits = $_POST['Credits'];
        $q="INSERT INTO `users`(`UserName`, `Email`, `Contact`, `Credits`) VALUES ('$UserName','$Email','$Contact','$Credits')";
        $query = mysqli_query($con,$q);
        header("allusers.php");
    }
  
?>
<html><style type="text/css">
  .k{
    margin-right: 20px;
  }
</style>
   <!-- <head>
      <title>Credit Management System</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <style>
    .formbody{
      height: 50vh;
      width: 30vw;
      flex: 0.45;
      padding: 20px;
    }
    .ap{
      display: grid;
      place-items: center;
      padding: 20px;
    }
    body{
      background-image: url("1.jpg");
      background-repeat: no-repeat;
      background-attachment: fixed;  
      background-size: cover;
    }
  </style>
  </head>         
    <body>
      <div class="ap">
        <form method="post" action="insert.php" class="white formbody"  >
          <div class="input-field">
            <label htmlFor="email">Username</label>
            <input type="text"  name="UserName" required/>
          </div>
          <div class="input-field">
            <label htmlFor="Email">Email</label>
            <input type="text" name="Email" required />
          </div>
          <div class="input-field">
            <label htmlFor="Contact">Contact Number</label>
            <input type="number"  name="Contact" required  />
          </div>
          <div class="input-field">
            <label htmlFor="Credits">Credits</label>
            <input type="number" name="Credits" required  />
          </div>
          <div class="input-field">
            <button type ="submit" name="done" class="waves-effect blue btn btn-medium z-depth-2">Add User</button>  
            <a href="index.php"   style="text-decoration: none" class="waves-effect blue btn btn-medium z-depth-2">Home</a>
          </div>
        </form>
      </div>
    </body>-->
     <head>
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link rel="shortcut icon" href="favicon (6).ico" type="image/x-icon">
<link rel="icon" href="favicon (6).ico" type="image/x-icon">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    </head>

    <body class="teal lighten-2">
      
      
      <div class="container" style="margin-top:90px;">
        <div class="card-panel z-depth-5">
    <div class="row">
      <div class="col s12 m6">
      
      
    
    <h4 class="center"> Add User</h4>   
<div class="row">
  <form method="post" class="col s12 m12" action="insert.php">
    <div class="row">
      <div class="input-field col s12 m12">
        <i class="mdi-action-account-circle prefix"></i>
        <input id="email" type="text" name="UserName" required >
        <label htmlFor="email">Username</label>
      </div>
      
      <div class="input-field col s12 m12">
        <i class="mdi-communication-email prefix"></i>
        <input id="Email" type="email" name="Email" required>
        <label htmlFor="Email">Your Email</label>
      </div>
      <div class="input-field col s12 m12">
        <i class="material-icons prefix">contact_phone</i>
        <input id="Contact" type="number" name="Contact">
        <label for="Contact">contact</label>
      </div>
       <div class="input-field col s12 m12">
          <i class="material-icons prefix">credit_card</i>
          <input id="Credits" type="number" step="any" min="0" name="Credits">
          <label for="Credits">Credits</label>
        </div>
    
        
    </div><!--row-->
  
   
</div><!--row-->
<div class="input-field">
 <button type ="submit" name="done" class="waves-effect teal lighten-2 btn k btn-medium z-depth-2">Add User</button>
  <a href="index.php"   style="text-decoration: none" class="waves-effect teal lighten-2 btn btn-medium z-depth-2">Home</a>
</div></form>



</div><!--col-->





<div class="col s12 m5 offset-m1">
  <br>
  <br>
  <p>
 <br>

  </p>
  <img src="logo.png" 
  width="200" height="300"  style="border:0">
</div>



  </div><!--row-->
  </div><!--card-->
  </div><!--conatiner-->
  
      
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      
      
      
       <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-60673008-2', 'auto');
  ga('send', 'pageview');
</script>
      
      
    </body>
  </html>
</html>