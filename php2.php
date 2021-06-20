<?php
session_start();
function generateRandomString($length = 5) { 
	$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
	$charactersLength = strlen($characters); 
	$randomString = ''; 
	for ($i = 0; $i < $length; $i++) { 
		$randomString .= $characters[rand(0, $charactersLength - 1)]; 
	} 
	return $randomString; 
}	
$_SESSION['capcha']=generateRandomString(5)
?>
<?php
	echo "<text>".$_SESSION['capcha']."</text>"
?>
