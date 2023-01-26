<?php 
 $usr="root";
 $pwd="root";

if(isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['password']) && !empty($_POST['password']) ){

$username=$_POST['username'];
$password=$_POST['password'];

 
			if(($username==$usr) && ($password==$pwd) ){

								echo '<br>login successfull';

				}else{

							echo '<br>login unsuccessfull';
							}
	}else{
			echo "<br>You can't Leave any field empty!";
			}
?>