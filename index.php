<?php

require('includes/core.inc.php');

if(isset($_POST['send'])){

	if(!empty($_POST['sender']) && !empty($_POST['message'])){


		$sender = $_POST['sender'];
		$msg    = $_POST['message'];



		if(send_msg($sender,$msg)){

			echo '<br>Message Sent';

		}else{
			echo "Message Failed to sent.";
		}



	}else{
		echo "<script type='text/javascript'>alert('Please fill all feilds');</script>";
	}
}
	


?>

<!DOCTYPE html>
<html lang="en">
	<head>

		<title>Chat Application</title>

		<link rel="stylesheet" type="text/css" href="css/style.css">
		 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 		 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		
	</head>

	<body>
	<div id="input">
			<form action="index.php" method="post">

				<label>Enter Name :<input type="text" name="sender"> </label>
				<label>Enter Message:<input type="text" name="message"></label>
				<br><br>
				<input type="submit" name="send" value="Send Messages">
				

			</form>	
	</div>		
					
<div id="messages">


</div><!--MESSAGES-->
<br>

	</body>

<!--Javascript-->
<script type="text/javascript" src="scripts/js/script.js"></script>

</html>

