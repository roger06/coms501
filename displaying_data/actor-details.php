<?php

include('pdo-connect-inc.php');

?>

<!doctype html>
<html lang="en">

<head>
    <title>Display dynamic data</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Actor details</h1>
        <h2>Display details for... </h2>
        <!-- <table class="table table-striped table-hover"> -->
       
           

            <?php

            $actor_id = $_GET['actor_id'];

          
            $query = "SELECT a.first_name, a.last_name, f.title, a.actor_id, f.film_id
            FROM `actor` as a 
            JOIN film_actor as fa ON a.actor_id = fa.actor_id
            
            JOIN film as f ON f.film_id = fa.film_id
            
            WHERE a.actor_id = " . $actor_id ;


            echo $query;

            
            $stmt = $db->query($query);

            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            echo '<h2>Actor name: '.$row['first_name'].' ' . $row['last_name']  .'  </h2>';


            ?>
      
 
            <h2>Films this actor has been in...</h2>

            <?php

            $stmt = $db->query($query);
          
            echo $stmt->rowCount(). '<br>';
            
            while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                
                echo $row['title'] . '<br>';

            }    
            

            ?>

 


    </div><!--  container -->




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>