<?php 
	include("connection.php");
	$name=$_POST['name'];
	$age=$_POST['age'];
	$qualification=$_POST['qualification'];
	$marks=$_POST['marks'];
	$cel=$_POST['phno'];
	$email=$_POST['email'];
	$address=$_POST['address'];


	$myuid = uniqid('KAR22');
	mysql_select_db($dbName);

	$insert="insert into student values('$myuid','$name','$age','$qualification','$marks','$cel','$email','$address');";
	mysql_query($insert,$conn);
	 if( $insert )
	 { 
 	 	echo "<center><h1>Student registered successfully.</h1></center>";
 	 }
 	 else
 	 	echo "Not registered \n register Again";

 ?>

<?php //echo "<script>
//alert('Your registration is successful');
//window.location.href='index.html';
//</script>";
?>

