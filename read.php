<h2>list of all available products</h2>
<table border=3 align=center>
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Price</th>
    <th>Image</th>
</tr>
<?php
require 'connection.php';
$query="SELECT * FROM `books`";
$result=mysqli_query($con,$query);
while($row=mysqli_fetch_array($result)){
    echo"<tr><td>".$row["id"]."<td>".$row["name"]."<td>".$row["price"]."<td>".$row["image"];
    echo"</tr>";
}
mysqli_close($con);
?>

</table>