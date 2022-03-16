<?php

include('pdo-connect-inc.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="display-table-links.php" method="post"  >
name : <br>
    <input type="text" name="searchterm">
    <br>

    <input type="submit" value="sub">

    </form>
<hr>


<table>

<?php

$query = "select distinct(state) from customers ORDER BY state ";

 
echo $query;

$stmt = $db->query($query);


echo '<h2>Method 2 -stop / start PHP - use HTML template</h2>';
// 

while  ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>


    <tr>
    <!-- add the link for each employee  -->
    <!-- this will be the GET method -->



         <td><a href="display-table-links.php?state=<?php echo $row['state'];?>"> <?php echo htmlentities($row['state']);?></a></td>
      
    
    </tr>

<?php
} // end while

?>

</table>



</body>
</html>