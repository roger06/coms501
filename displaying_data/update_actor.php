<?php

include('pdo-connect-inc.php');

if (isset($_GET['actor_id'])) {
  $actor_id = $_GET['actor_id'];
  $querytype = 'update';

  $stmt = $db->prepare("select * from actor where actor_id = :actor_id ");
  $stmt->bindParam('actor_id', $actor_id);

  $stmt->execute();

  $row = $stmt->fetch();


  $actor_id =  $row['actor_id'];
  $first_name =  $row['first_name'];

  $last_name =  $row['last_name'];

} 



else $querytype = 'insert'

?>


<!doctype html>
<html lang="en">
  <head>
    <title>Get user data</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
            <div class="container">
        <h1>Get user data</h1>
        <h2>Please fill out the form below.</h2>

        <form action="<?php if($querytype == 'insert') echo 'insert_actor.php';
        else echo 'update_record.php';?>" method="post" name="userform">
        
        
        <p>First name:<br>
            <input type="text" name="first_name" value="<?php if (isset($first_name))  echo $first_name;?>">
        </p>   
        <p>Last name:<br>
            <input type="text" name="last_name" value="<?php if (isset($last_name))  echo $last_name;?>">
        </p> 
        
       

      
            
        </p>
         <?php
      if ($querytype == 'update' ) {   ?>

        <input type="hidden" name="actor_id" value="<?php echo $actor_id;?>">
      <?php
      }
      ?>

        <p><input type="submit"></p>
        
        </form>


        </div><!--  container -->






      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>