<?php


if (empty($_POST)) {
  
  echo 'script cannot be called directly';
  exit;
  
}
include('pdo-connect-inc.php');

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];

$ip_address =  $_SERVER['REMOTE_ADDR'];


$sql = "INSERT INTO employees (first_name,last_name, email, gender,ip_address  ) 
        VALUES ( '" .$first_name."', '" .$last_name."', '" .$email."'  , 'm', '".$ip_address."'   )";
 
$db->query($sql);


// if (empty($_POST['first_name']))

// echo '<pre>';

// print_r($_POST);

// exit;

// if (!$_GET['id']) {

//     echo "No record to delete";
//     exit;
// }




// $id = $_GET['id'];

// $stmt = $db->prepare(  "insert from employees where id = :id" );
// $stmt->bindValue(':id', $id);
 
// $stmt->execute();

// $status =  "Rows deleted = " . $stmt->rowCount();



?>


<!doctype html>
<html lang="en">
  <head>
    <title>Insert record</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
            <div class="container">
        <h1>New record</h1>
    
     

       </div><!--  container -->



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>