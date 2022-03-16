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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
            <div class="container">
        <h1>Employees</h1>
        <h2>Show employees and link to each with unique database reference</h2>
        <h3>We can choose whether or not to display the id, or just have it as part of the hyperlink</h3>
        <p>Using the templating method might be easier to read / understand.</p>
       
        <table class="table table-striped table-hover">

            <tr>
                <th>First Name</th><th>Last Name</th><th>Delete?</th>
            </tr>

                <?php

                $query = "select * from employees ";
                $stmt = $db->query($query);


            echo '<h2>Method 2 -stop / start PHP - use HTML template</h2>';
                // 

                while  ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>


                    <tr>
                    <!-- add the link for each employee  -->
                    <!-- this will be the GET method -->
                        <td><a href="get_one_record.php?id=<?php echo $row['id'] ?>"><?php echo htmlentities($row['first_name']);?></a></td>
                        <td><?php echo htmlentities($row['last_name']);?></td>
                        <td><a href="delete_record.php?id=<?php echo $row['id'] ?>">Delete</a></td>
                    </tr>

                <?php
                } // end while

                ?>
            </table>



        </div><!--  container -->






      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>