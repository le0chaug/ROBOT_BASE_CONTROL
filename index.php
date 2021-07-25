<? php


//set connection variables 
  
$db_host = 'localhost8012';
$db_user = 'root';
$db_password = '';
$db_db = 'RobotBase_database';
$db_port = 8889;


  //connection to server & database 
  $connection = mysqli_connect($db_host, $db_user, $db_password, $db_db );


  //check connection 
  if(mysqli_connect_errno()):
    printf("Connect failed miserably: %s\n", mysqli_connect_errno());
    exit();
  endif;
  


$conn= new mysqli("localhost","root","","");
if(isset($_POST['Right'])){
	 $stmt=$conn->prepare("insert into robot_base(direction) values('r')");
	 $stmt->execute();
	 echo "RIGHT";
 }
 elseif(isset($_POST['Left'])){
	 	 $stmt=$conn->prepare("insert into robot_base(direction) values('l')");
	 $stmt->execute();
	 echo"LEFT";
 }
 elseif(isset($_POST['Forward'])){
	 	 $stmt=$conn->prepare("insert into robot_base(direction) values('f')");
	 $stmt->execute();
     echo"FORWARD";
 }
 elseif (isset($_POST['Backward'])){
	 	 $stmt=$conn->prepare("insert into robot_base(direction) values('b')");
	 $stmt->execute();
     echo "BACKWARD";
 }
 elseif(isset($_POST['Stop!'])){
	 	 $stmt=$conn->prepare("insert into robot_base(direction) values('s')");
	 $stmt->execute();
	 echo "STOP";
 }
 else{ echo" try again";}

?>

