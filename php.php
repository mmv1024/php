<?php
include 'connect.php';
if ($_REQUEST['act'] == 'delete') {
	$del_query='delete from Comments where Name="'.$_REQUEST['Name']
	.'" and Text="'.$_REQUEST['Text']
	.'" and Time=STR_TO_DATE("'.$_REQUEST['Time'].'", "%Y-%m-%d %H:%i:%s")'
	.';';
	$result=mysql_query($del_query) or die('Error: '.mysql_error());
	mysql_free_result($result);
}

if (isset($_REQUEST["name"]) and $_REQUEST["capcha"] != "" and $_REQUEST["capcha"]==$_SESSION['capcha']) {
	$date = date('Y-m-d H:i:s');
	$query_insert='INSERT INTO Comments(Name, Time, Text) VALUES("'.$_POST['name'].'", "'.$date.'", "'.$_POST['comment_text'].'")';
	mysql_query( $query_insert ) or die('Error: '.mysql_error());
}

$select_query='select Name, Time, Text from Comments ORDER BY Time DESC';
$result=mysql_query($select_query) or die('Error: '.mysql_error());
echo "<table class='table'>\n";
while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
	echo "\t<tr>\n";
	echo "\t\t<td class='name'>".$line['Name']."</td>\n";
	echo "\t\t<td class='date'>".$line['Time']."</td>\n";
	echo "\t</tr>\n";
	echo "\t<tr>\n";
	echo "\t\t<td class='text'>".$line['Text']."</td>\n";
	echo "\t</tr>\n";
	echo "\t<tr>\n";
	echo "\t\t<td class='delete'><input type='button' class='button' value='Удалить' onclick=\"deleteComment('act=delete&Name="
	.$line["Name"]."&Time=".$line["Time"]."&Text=".$line["Text"]."')\"/></td>\n";
	echo "\t</tr>\n";
}
echo "</table>\n";	
?>
