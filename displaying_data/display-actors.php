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
        <h1>Actors</h1>
        <h2>Show limited number of actors in Bootstrap table.</h2>
        <table class="table table-striped table-hover">
            <tr>
           <?php

            $query = "select * from actors ORDER BY contactFirstName limit 20 ";

            $cols_array = array('first_name'=>'First Name', 
                                'last_name'=>'Last Name',
                                'last_update'=>'Last Update',
                                'photo'=>'Actor photo'
                          
                                ) ;    

            // generate col headings
            foreach($cols_array as $key  => $value ){

                // echo $key . " " . $value;

                echo '<th>'.$value  .'</th>';

            }

            ?>
                <th>Action</th>
                <th>Update</th>
            </tr>

            <?php


            if ( isset($_GET['orderby']) ) {

                $orderby = $_GET['orderby'];
                
            }
          
            
            else $orderby = 'first_name';

            // if ( !in_array( $orderby, $cols_array ))  {  // if the value for orderby is not a valid column name
            // $orderby = 'first_name';

            // }

              
            if   (!array_key_exists($orderby, $cols_array)) $orderby = 'first_name';
         

          
            $query = "SELECT *
            FROM `sakila`.`actor` ORDER BY " . $orderby . " LIMIT 0, 10";


            echo $query;

            $stmt = $db->query($query);

          
             echo '<h2>method 1 - all output via PHP...</h2>';

            //  an alternative method to get an array instead - then use foreach.
           
            // $arr = $stmt->fetchAll();

            //     echo '<pre>';
                
            //     print_r($arr);
                
            //     echo '</pre>';


                // exit;
            while  ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {


                echo '<tr>';
                    
                    echo '<td>'.htmlentities($row['first_name']).'</td>';   
                    echo '<td>'.htmlentities($row['last_name']).'</td>';   
                    echo '<td>'.htmlentities($row['last_update']).'</td>';   
                 
                 
                    // display actor photo  - if one exists


                    echo '<td>';
                    
                        if (isset(  $row['photo'] )  AND file_exists('img/'.$row['photo'])     )  {  ?>

            <img src="img/<?php echo $row['photo'];?>" alt="<?php echo $row['first_name'];?>" width="150">


            <?php }

 

                    echo '</td>';   


                    echo '<td> <a href="actor-details.php?actor_id='. $row['actor_id']  .'">View details</a></td>';   
                    echo '<td> <a href="update_actor.php?actor_id='. $row['actor_id']  .'">Update</a></td>';   
          
                echo '</tr>';

            } // end while


// echo '<td> <a href="productdetail.php?prodid='.$row['contactLastName'].'">   this is a link</a> </td>';
                    // echo '<td>'.htmlentities($row['first_name']).'</td>';       


            ?>
        </table>


        <h3>Order by</h3>
        <p> <a href="<?php echo $_SERVER['PHP_SELF'];?>?orderby=first_name">First name</a></p>
        <p> <a href="<?php echo $_SERVER['PHP_SELF'];?>?orderby=last_name">Last name</a></p>
        <p> <a href="<?php echo $_SERVER['PHP_SELF'];?>?orderby=last_update">Last update</a></p>


        <table class="table table-striped table-hover">

            <tr>
                <th>First Name</th>
                <th>Last Name</th>
            </tr>






            <?php
exit;
                $query = "select * from employees";
                $stmt = $db->query($query);



            echo '<h2>Method 2 -stop / start PHP - use HTML template</h2>';
                // 

                while  ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>


            <tr>

                <td><?php echo htmlentities($row['first_name']);?></td>
                <td><?php echo htmlentities($row['last_name']);?></td>

            </tr>

            <?php
                } // end while

                ?>
        </table>


        <pre>



            </pre>


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