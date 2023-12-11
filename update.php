<h2>update an information about a product</h2>
<form action="update.php" method=post>
    <label for="">enter the id of product:</label><input type="number" name="id" ><br>
    <label for="">enter the new price:</label><input type="text" name=pr>
    <input type="submit" value="save" name=sb>
</form>

<?php
if(isset($_POST["sb"])){
require 'connection.php';
$id=$_POST["id"];
    
    $pr=$_POST["pr"];
   
$query="UPDATE `products` SET `price`='$pr' WHERE id=$id";
$result=mysqli_query($con,$query);
mysqli_close($con);
}


?>