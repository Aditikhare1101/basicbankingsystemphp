<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "project_database";
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}
	$sql = "SELECT *   FROM transcation_history ";
	$result = $conn->query($sql);
?>

<style>
body{
	background-image: url("https://images.unsplash.com/photo-1550537687-c91072c4792d?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MzV8fHNpbXBsZSUyMGJhY2tncm91bmR8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=60");
	 height: 350px;
  background-position: center;
  background-repeat: no-repeat; 
  background-size: cover;
  opacity: 7;
}
  table {
            margin: 0px auto;
            font-size: large;
            border: 4px solid black;
        }
  
        h1 {
            text-align: center;
            color: orangered;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT', 
            ' Calibri', 'Trebuchet MS', 'sans-serif';
            background-color: black;
            padding: 5px;
        }
  
        td {
            background-color: pink;
            border: 2px solid black;
        }
  
        th,
        td {
            font-weight: bold;
            border: 2px solid black;
            padding: 20px;
            text-align: center;
            color: black;
        }
  
        td {
            font-weight: lighter;
        }
        th{
        	background-color: red;
        }
</style>
<u style="color: whitesmoke;"><h1>TRANSACTION HISTORY</h1></u>

<table>
            <tr>
                <th>TO</th>
                <th>FROM</th>
                <th>BALANCE_AMOUNT</th>
            </tr>
            <?php
                while($rows=$result->fetch_assoc())
                {
             ?>
            <tr>
                <td><?php echo $rows['TOC'];?></td>
                <td><?php echo $rows['FROMC'];?></td>
                <td><?php echo $rows['MONEY TRANSFER'];?></td>
            </tr>
            <?php
                }
                $conn->close();
             ?>         
</table>

