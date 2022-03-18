<?php
// some error checking is essential

// if we don't have an id we don't want to continue

if(!isset($_GET['id']) or $_GET['id'] == ''  )  {

    echo 'No employee ID';
    exit;

}

else $id = $_GET['id'];

include('pdo-connect-inc.php');

?>


<!doctype html>
<html lang="en">
  <head>
    <title>Display dynamic data - one  record</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h1>Employees</h1>
        <h2>Show an individual employee by using the unique database reference</h2>
        <p>We need to change the query's where clause</p>
        <p>If no rows are return we will want to display a different message</p>
       
       

                <?php

                $query = "select * from employees where id = " . $id;
                $stmt = $db->query($query);


                echo '<h4>As we are only returning one record, we do not need a loop</42>';
                

                $row = $stmt->fetch(PDO::FETCH_ASSOC); ?>


                <h2>Employee name:   <?php echo htmlentities($row['first_name']) . ' ' . htmlentities($row['last_name']);?></h2>
                <h2>Employee email:   <?php echo htmlentities($row['email']);?></h2>

       
        </div><!--  container -->





      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>