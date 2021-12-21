<?php 

$server= 'localhost';
$user='root';
$password='';
$db='covidtracker_db';

$con= mysqli_connect($server, $user ,$password, $db);
if($con){
	?>
	<script>
		alert("connection successful");
	</script>
	<?php
}else{
	?>
	<script>
		alert("connection NOT successful");
	</script>
	<?php
}







?>