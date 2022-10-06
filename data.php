<?php
	include 'link.php';
	if(isset($_POST['uname']))
	{
		$name=$_POST['uname'];
	}else{
		$name="";
	}
	if($connection)
	{
		echo"Connection established"."<br>";
	}
	else{
		echo"error:".mysqli_error($connection)."<br>";
		}

	$query="CREATE TABLE SAMPLE(NAME VARCHAR(15));";
	if(mysqli_query($connection,$query))
	{
		echo "Table created"."<br>";
	}else{
		echo"Error:".mysqli_error($connection)."<br>"; 
		}
	$query="INSERT INTO SAMPLE VALUES($name);";
	if(mysqli_query($connection,$query))
	{
		echo "values inserted"."<br>";
	}
	else{
		echo"Error:".mysqli_error($connection)."<br>"; 
		}
?>
