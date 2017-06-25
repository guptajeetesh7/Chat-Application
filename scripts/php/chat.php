<?php
	
require('../../includes/databases/connect.db.php');
require('../../includes/functions/chat.func.php');


	$messages = get_msg();

	

	

	foreach( $messages as $message){

		echo '<br> <strong>  '.$message['sender'].'  Sent '.str_repeat('&nbsp;', 30).date("d-m-y H:m:s").'</strong><br />';
		echo $message['message'].'<br /><br />';
	}


?>