<h2>insert a new product</h2>
<form method="post">
<label >enter  product's ID:</label><input type="number" name="id" required><br>
<label >enter  product's name:</label><input type="text" name=name required> <br>
<label >enter  product's price:</label><input type="number" name=pr required><br>
<label >upload  product's image:</label><input type="file" name="img" required><br>
<input type="submit" value="upload" name=sb>
<input type="reset" value="reset">
</form>

<?php
if(isset($_POST["sb"])){
    require 'connection.php';
    $id=$_POST["id"];
    $name=$_POST["name"];
    $pr=$_POST["pr"];
    $img=$_POST["img"];
    $query="INSERT INTO `products`(`id`, `name`, `price`, `image`) VALUES ('$id','$name','$pr','$img')";
if(mysqli_query($con,$query)){
    echo"the  product $id is added";
}else{
    echo"the  product $id is already exist;try another id";
}
mysqli_close($con);
}


?>