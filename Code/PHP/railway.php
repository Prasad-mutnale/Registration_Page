
<html>
<head>
	<title> Records</title>

	<style>
    <?php include 'table.css'; ?>
    </style>
</head>
<body>
	<center><h1>Railway Exam shortlist</h1>
	<table border=1px solid black><tr>
	    <th>ID</th>
        <th>Name</th>
        <th>Age</th>
        <th>Qualification</th>
        <th>Marks</th>
        <th>Contact</th>
        <th>Mail id</th>
        <th>Address</th></tr>
    

	<?php 
		include("connection.php");
		mysql_select_db($dbName);
		$quary="select * from student where marks>=80";
		$data=mysql_query($quary,$conn);
		$total=mysql_num_rows($data);
		
		if($total!=0)
		{
			while($array=mysql_fetch_assoc($data))
			{
				print "<tr> <td>";
				echo $array['regId']; 
        		print "</td> <td>";
        		echo $array['name']; 
        		print "</td> <td>";
       		 	echo $array['age']; 
        		print "</td> <td>";
        		echo $array['qualification']; 
        		print "</td> <td>";
        		echo $array['marks']; 
        		print "</td> <td>";
        		echo $array['contact']; 
        		print "</td> <td>";
        		echo $array['email']; 
        		print "</td> <td>";
        		echo $array['address']; 
        		print "</td> </tr>";
			}
		}
		else
			echo "No Records Found";
		?>
	</table>
</center>

</body>
</html>