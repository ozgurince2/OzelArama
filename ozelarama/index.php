<?php 
include 'head.php';
include 'DbOperations.php';

$key = $_POST['key'];

$db = new DbOperations();
$db->connect();

if ($key != "") {
	$result = $db->search($key);
	$commentResult = $db->commentSearch($key); 
	$db->view($result, $commentResult);

}
include 'footer.php';
 ?>