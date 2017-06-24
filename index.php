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

<div id="messages">

<?php
	
	$messages = get_msg();

	foreach( $messages as $message){

		echo '<br> <strong>  '.$message['sender'].'  Sent</strong><br />';
		echo $message['message'].'<br /><br />';
	}

?>	


</div><!--MESSAGES-->
<br>
<form action="index.php" method="post">

	<label>Enter Name :<input type="text" name="sender"> </label>
	<label>Enter Message:<input type="text" name="message"></label>
	<br><br>
	<input type="submit" name="send" value="Send Messages">
	

</form>