<style>
  body{
    background-color: grey;
  }
  h1{
      text-align: center;
      color: orangered;
      background-color: black;
      padding: 10px;
  }
  form{
      text-align: center;
      margin-top: 100px;
      padding: 50px;
      background-color: orangered;
      box-shadow: 5px 5px 20px rebeccapurple;
    }
    label{
      font-size: 25px;
    }
    input{
      box-shadow: 5px 5px 10px black;
      border-radius: 8px;
      font-size: 20px;
    }
    .btn{
      font-size: 20px;
      height: 40px;
      width: 100px;
      margin-left: 100px;
      background-color: black;
      color: white;
      cursor: pointer;
    }
    .btn:hover{
      background-color: grey;
      color: black;
      box-shadow: 5px 5px 20px darkblue;
      transition: .5s;
    }
    #to{
      margin-left: 35px;
    }
    #money{
      margin-left: 0px; 
    }
    .from{
      margin-right: 10px;
    }
    .to{
      margin-right: 10px;
    }

</style>

<?php
if (isset($_POST['submit']))
{
$to=$_POST['to'];
$from=$_POST['from'];
$money=$_POST['money'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project_database";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$tors=0;
$fromrs=0;

$sql = "SELECT *   FROM customer_report where NAME = '$from'";
$result = $conn->query($sql);
 while($rows=$result->fetch_assoc()){
    $fromrs=$rows['BALANCE'];
  }

$sql = "SELECT *   FROM customer_report where NAME = '$to'";
$result = $conn->query($sql);
echo "<br>";
 while($rows=$result->fetch_assoc()){
    $tors=$rows['BALANCE'];
  }
  if($fromrs==null || $tors==null || $from==$to){
    $message='Record Does not exits';
    echo "<script>alert('$message');</script>";
    
  }
  else{
    $fromrs=$fromrs - $money;
    if($fromrs < 1000){
      echo"<script>alert('Insufficient Balance');</script>";
    }
    else{
    $tors=$tors + $money;
    $sql = "UPDATE  customer_report set BALANCE=$tors where NAME = '$to'";
    $result = $conn->query($sql);
    $sql = "UPDATE  customer_report set BALANCE=$fromrs where NAME = '$from'";
    $result = $conn->query($sql);
    $message="Successfully transferred money from: ".$from." to: ".$to." Money: ".$money;
    echo "<script> alert('$message');</script>";
    $sql = "INSERT into transcation_history VALUES('$to','$from',$money)";
    $result = $conn->query($sql);        
    }
  }

  $conn->close();
}
?>
<u style="color: whitesmoke;"><h1><b>TRANSACTION SECTION</b></h1></u>
<form  method="POST" >
  <label for="to" class="to"><b>TO:</b></label>
  <input type="text" id="to" name="to"><br><br>
  <label for="from" class="from"><b>FROM:</b></label>
  <input type="text" id="from" name="from"><br><br>
  <label for="money" class="money"><b>MONEY:</b></label>
  <input type="text" id="money" name="money"><br><br>
  <input class="btn" type="submit" name="submit" value="Submit">
</form>
