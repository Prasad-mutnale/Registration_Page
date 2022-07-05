<html>
    <head>
    <style>
    <?php include 'table.css'; ?>
    </style>
    </head>
    <body>
        
    
<?php
$conn=mysql_connect("localhost","root","");
if(!$conn)
die('coundnt connect'.mysql_error());

mysql_select_db("registration");

$ret2="select * from student";

$dbrt=mysql_query($ret2,$conn);

?>


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
    //if($dbrt->num_rows>0)
         while ($arr = mysql_fetch_assoc($dbrt))
    {
?>
        <tr>
            <td><?php echo $arr['regId']; ?></td>
            <td><?php echo $arr['name']; ?></td>
            <td><?php echo $arr['age']; ?></td>
            <td><?php echo $arr['qualification']; ?></td>
            <td><?php echo $arr['marks']; ?></td>
            <td><?php echo $arr['contact']; ?></td>
            <td><?php echo $arr['email']; ?></td>
            <td><?php echo $arr['address']; ?></td>
        </tr>
<?php
    }
    ?>
        </table>
        </body>
    </html>
    
