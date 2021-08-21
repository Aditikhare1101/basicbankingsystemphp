<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project_database";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT *   FROM customer_report";
$result = $conn->query($sql);
?>
<style>
  table {
            margin: 0 auto;
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
            background-color: #E4F5D4;
            border: 2px solid black;
        }
  
        th,
        td {
            font-weight: bold;
            border: 2px solid black;
            padding: 10px;
            text-align: center;
            color: black;
        }
  
        td {
            font-weight: lighter;
        }
</style>
<u style="color: whitesmoke;"><h1>CUSTOMER DETAIL </h1></u>
<table>
            <tr>
                <th>SRNO.</th>
                <th>GENDER</th>
                <th>NAME</th>
                <th>BALANCE</th>
                <th>MOBILE NO.</th>
                <th>GMAIL ID</th>
                <th>ADDRESS</th>
                <th>TRANSCATION HISTORY</th>
                <th>DATE_TIME</th>
            </tr>
            <?php
                while($rows=$result->fetch_assoc())
                {
             ?>
            <tr>
                <td><?php echo $rows['SRNO.'];  ?></td>
                <td><?php echo $rows['GENDER'];?></td>
                <td><?php echo $rows['NAME'];  ?></td>
                <td><?php echo $rows['BALANCE'];?></td>
                <td><?php echo $rows['GMAIL ID'];?></td>
                <td><?php echo $rows['MOBILE NO.'];?></td>
                <td><?php echo $rows['ADDRESS'];?></td>
                <td><a href="transaction_history.php">Transaction History</a></td>
                <td><?php echo $rows['DATE_TIME'];?></td>

            </tr>
            <?php
                }
                $conn->close();
             ?>         
</table>

