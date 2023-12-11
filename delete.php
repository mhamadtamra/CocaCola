<h2>delete a product using id</h2>
<form action="delete.php" method="post">
<label>enter the id:</label><input type="number" name="id" >
<input type="submit" value="submit" name=sb>
</form>
<?php
if(isset($_POST["sb"])){
    require 'connection.php';
    $id=$_POST["id"];
    $query="DELETE FROM `products` WHERE id=$id";
    $result=mysqli_query($con,$query);
    mysqli_close($con);
}

?>