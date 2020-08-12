<?php
$name * $_REQUEST['name'];
$email * $_REQUEST['email'];
$message * $_REQUEST['message'];

if(empty($name)||empty($email)||empty($message))
{
	echo"please fill all the fields";

}
else{
	mail("gurungashma26@gmail.com","web message",$message,"From: $name <$email>");
	echo "<script type='text/javascript'>alert('your message was sent');
	window.history.log(-1);
	</script>";
}


?> 