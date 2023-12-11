<?php
session_start();session_destroy();
session_start();
if($_POST["regname"] && $_POST["regemail"] && $_POST["regpass1"] && $_POST["regpass2"])
{
    if($_POST["regpass1"]==$_POST["regpass2"])
    {
        $servername="localhost";
        $username="root";
        $conn=  mysqli_connect($servername,$username,"","cocacola")or die(mysql_error());
    
        $sql="insert into login (username,email,password)values('$_POST[regname]','$_POST[regemail]','$_POST[regpass1]')";
        $result=mysqli_query($conn,$sql) or die(mysql_error());		
        print "<h1>you have registered sucessfully</h1>";
       
        print "<a href='index.php'>go to login page</a>";
    }else{
    echo "Password doesnt match";
    }
}
else echo"Invalid Input Data";
?>