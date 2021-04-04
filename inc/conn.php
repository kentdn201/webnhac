<?php	 
	$conn = pg_connect("host=ec2-18-204-74-74.compute-1.amazonaws.com dbname=ddcul1krvca7nt user=rrazuzxslncjlg password=bb9362cb79376fa38b5d90c020c36dfd99c0184b4eb82f4405353190588f52b9 port=5432");
	if(!$conn){echo "Lost Connect";}
	if(isset($_POST['login'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$sql= "SELECT * FROM account WHERE username ='$username' and password='$password'";
		$result = pg_query($conn, $sql);
		$check = pg_num_rows($result);
		if($check == 1){
			echo "Vao dc roi";
			header("Location:chucmung.php");
		}
		else{
			echo "Vao lai di";
		}
	}
			

 ?>