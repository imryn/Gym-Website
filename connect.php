<?php
$servername = "sql2.freesqldatabase.com";
$dbusername = "sql2209491";
$dbpassword ="yM7*mF7%";
$dbname ="sql2209491";

$id = $_POST['id'];
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$tuna = $_POST['tuna'];
$helbon = $_POST['helbon'];
$gainer = $_POST['gainer'];
$soda = $_POST['soda'];
$wather = $_POST['wather'];
$salad = $_POST['salad'];

$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

if($conn->connect_error){
		die ("connection failed:" . $conn->connect_error);
		
}

if (empty($id)){
	echo "first name missing, please add";
	die();
}
if (empty($name)){
	echo "first name missing, please add";
	die();
}

if (empty($lastname)){
	echo "last name missing, please add";
	die();
}

if (empty($email)){
	echo "Email is missing, please add";
	die();
}

if (empty($tuna)&&empty($helbon)&&empty($gainer)&&empty($soda)&&empty($wather)&&empty($salad)){
	echo "Please choose one item or more";
	die();
}


$Price = ($tuna*16+$helbon*10+$gainer*10+$soda*8+$wather*5+$salad*13) ;



$sql = "INSERT INTO tst (id, name, lastname, email, tuna, helbon, gainer, soda, wather, salad, price)
VALUES ('$id', '$name', '$lastname', '$email', '$tuna', '$helbon', '$gainer', '$soda', '$wather', '$salad', '$Price')";

if ($conn->query($sql) === TRUE) {
	    echo "The price is :";
	    echo $Price;
		echo "  order was receved please arrive to Shop to collect.";
} else {
	echo "Eroor:" . $sql . "<br>" . $conn->error;
}

$conn->close();
?>	
