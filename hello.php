<?php

$user_name = strip_tags($_REQUEST['un']);

if (!($user_name == '')) {
	echo "Hello world and especially you $username!";
} else {
	echo "Hello world!";
}

exit;

?>