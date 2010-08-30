<?php

$user_name = strip_tags($_REQUEST['un']);

if (!($user_name == '')) {
	echo "Hello world and especially you, $user_name!";
	echo "Good-bye world and $user_name!";
} else {
	echo "Hello world!";
	echo "Good-bye world!";
}


exit;

?>