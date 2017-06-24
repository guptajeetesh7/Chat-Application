<?php

	function get_msg(){

		$query = "SELECT `sender` , `message` FROM `chat` ";

		$query_run = mysql_query($query);

		$messages = array();

		while($message = mysql_fetch_assoc($query_run)){

			$messages[] = array('sender'=>$message['sender'] , 'message'=>$message['message']);
		}

		return $messages;

	}

	function send_msg($sender , $message){

		if(!empty($sender) && !empty($message)){

			$sender = mysql_real_escape_string($sender);
			$message = mysql_real_escape_string($message);

			$query = "INSERT INTO `chat` VALUES (null ,$sender, $message)";

			if($query_run = mysql_query($query)){

				return true ;

			}else{
				return false ;
			}




		}
		else{
			return false ;
		}
	}



?>