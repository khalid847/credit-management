<html>
    <title>Home</title>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
    
    </head>
<style>
 header{
      background: url(4.jpg);
      background-size: cover;
      background-position: bottom;
      min-height: 100%;
    }
    @media screen and (max-width: 670px){
      header{
        min-height: 100%;
      }
    }"prepaid-credit-cards.jpg"
}
.app{
  display: grid;
  place-items: center;
  position: relative;
  top:100px;
}
.card-content{
  flex:1;
}

.navbar-brand{
  padding: 10px;
}
.navbar-brand>img{
  height: 64px;
  padding-top:  35px;
  margin-right: 10px;
  width: auto;

}
.brand-logo{
  position: relative;
  top: -20px;
}
.main-div{
 margin: 0 auto;
 width: 40%;
 position: relative;
 top: 200px;
}
.txt{
  font-weight: bold;
  font-size: 130%
}
#log{
  position: relative;
  top:-40px;
  right: -50px;

}
.k{
  padding-top: -5px;
}
.l{
  margin: 0 auto;
}
.pi{
  padding: 5px;
}
.git{
  height: 20px;
  width: 20px;
  padding-right: 4px;
}
</style>
    <!--<body> 
      <div class="app col s12 m7">
        <div class="card horizontal z-depth-0">
          <div class="row">
            <div class="card-image col s6">
              <img src="2.png">
            </div>
            <div class="card-stacked col s6">
              <div class="card-content">
                <div class="white" style="padding: 20px"><h4>Credit Management System <br> Task #2</h4></div>
              </div>
              <div class="card-action">
                <div class="center" style="text-align: center">
                  <a href="insert.php"  style="text-decoration: none" class="waves-effect blue btn btn-medium z-depth-2">Add users</a>
                  <a href="allusers.php"  style="text-decoration: none" class="waves-effect blue btn btn-medium z-depth-2">All Users</a>
                  <a href="transaction.php"  style="text-decoration: none" class="waves-effect blue  btn btn-medium  z-depth-2"> Mini Statement</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </body>-->
    <body><header>
    <nav class="#1a237e indigo darken-4">
    <div class="nav-wrapper ">
      <div class="container ">
      
      <a href="#!" class="brand-logo hide-on-small-only navbar-brand text"><img src="logo.png" >The Sparks Foundation</a>
      <a href="#!" class="brand-logo hide-on-med-and-up navbar-brand text"><img src="logo.png" ><h6 id="log">The Sparks Foundation</h6></a>

      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons ">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="insert.php">ADD USERS</a></li>
        <li><a href="allusers.php">VIEW USERS</a></li>
        <li><a href="transaction.php">TRANSACTION HISTORY</a></li>
        <li><a href="index.php">HOME</a></li>
        
      </ul>

    </div>
  </nav>
  
  <ul class="sidenav" id="mobile-demo">
    <li><a href="insert.php"><i class="material-icons prefix">person_add</i>ADD USERS</a></li>
    <li><a href="allusers.php"><i class="material-icons prefix">visibility</i>VIEW USERS</a></li>
    <li><a href="transaction.php"><i class="material-icons prefix">history</i>TRANSACTION HISTORY</a></li>
    <li><a href="index.php"><i class="material-icons prefix">
home</i>HOME</a></li>
    
  </ul></div>
  
      <div class="col s12 m8 offset-m2 l6 offset-l3 k">
        <div class="card-panel grey lighten-5 z-depth-1">
          <div class="row valign-wrapper">
            <div class="col s2">
              <img src="2.png" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
            </div>
            <div class="col s10">
              <span class="black-text">
                <h3 class="hide-on-med-and-down">Credit Management System<br>Task #2</h3>
                <h5 class="hide-on-large-only">Credit Management System<br>Task #2</h5>
              </span>
            </div>
          </div>
        </div>
      </div></header>
      <footer>
        <div class="footer-copyright pi white-text grey darken-4">
            <div class="container">
            © 2020 Internship Project
            <a class="white-text text-lighten-4 right" href="#!"><img src="images.png" class="git">Github</a>
            </div>
          </div>
      </footer>


  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('.sidenav').sidenav();
  });
  </script>
</body>
</html>