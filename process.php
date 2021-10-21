<?php 
    // Get valuespasse from form in login.php file
    $username = $_POST['username'];
    $password = $_POST['password'];

    // to prevent mysql injection
    $username = stripcslashes($username);
    $password = stripcslashes($password);
    $username = mysql_real_escape_string($username);
    $password = mysql_real_escape_string($password);

    // connect to the server and select database
   
    $dbhost = "sql11.freesqldatabase.com",
    $dbuser = "sql11445883",
    $dbpass = "bYQEI4DVwu",
    $dbname = "login",
    
    $conn = new mysqli($dbhost,$dbuser,$dbpass,$dbname);
   
   
    if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(firstName, lastName, gender, email, password, number) values(?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssssi", $firstName, $lastName, $gender, $email, $password, $number);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
    


?>
