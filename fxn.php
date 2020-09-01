<?php 

$generic_user = function get_user_status(){
	if ($generic_user == "offline") {
		return true;
	}
	elseif ($generic_user == "online") {
		return false;
	}
	else{
		echo "Nothing happened";
	}
}

function is_user_capable(){
	// TODO
}


is_user_capable($user_id);
 ?>
