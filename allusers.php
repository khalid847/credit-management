<?php
    include 'connection.php';
/*
        $UserName = $_POST['UserName'];
        $Email = $_POST['Email'];
        $Contact = $_POST['Contact'];
        $Credits = $_POST['Credits'];
*/
        $q="select * from users";

        $query = mysqli_query($con,$q);
?>

<html>
    <head>
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    </head>

<style>
    body{
    background-image: url("images/3.jpg");
     background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
.ap{
    padding: 20px;
}
.container{
  /*display: grid;*/
  place-items: center;
padding: 20px;

}
.pad{
    margin: 3px;
}
</style>


    <body>
        <div class="ap">
        <div class="container ">
        <div >
            

            <!--<table   class="table table-striped table-hover table-bordered">
                <tr class="bg-dark text-white text-center">
                    <th>UserName</th>
                    <th>Email</th>
                    <th>Contact</th>
                    <th>Credits</th>
                    <th>Delete</th>
                    <th>Transaction</th>
                </tr>-->
                <table class=" table-hover table-bordered centered">
        <thead>
          <tr class="bg-dark text-white text-center">
                    <th>UserName</th>
                    <th>Email</th>
                    <th>Contact</th>
                    <th>Credits</th>
                    
                    <th>Transaction</th>
                </tr>
        </thead>
</div>
        

                    <?php
    include 'connection.php';

        $q="select * from users";

        $query = mysqli_query($con,$q);

        while($res = mysqli_fetch_array($query))
        {

?>
                <tr       class="text-center">
                    <td bgcolor="lightblue"> <?php echo $res['UserName'] ;?></td>
                    <td bgcolor="white"><?php echo $res['Email'] ;?></td>
                    <td bgcolor="white"><?php echo $res['Contact'] ;?></td>
                    <td bgcolor="white"><?php echo $res['Credits'] ;?></td>
                   
                    <td bgcolor="white"><a class="waves-effect blue btn btn-medium z-depth-2" href="credit.php?id= <?php echo $res['id'] ;?>">Start</a></td>
                </tr>
                <?php 
                    }
                ?>
            </table>

        </div>
        <div class="center bg-dark border " style="text-align: center" >
              <a href="index.php" class="waves-effect blue btn btn-medium z-depth-2 pad" >Home</a>
        </div>
        

    </body>
</html>