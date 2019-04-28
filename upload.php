<?php
	
	/* upload.php
	 * file not to be used independently
	 * included in main.php
	 * 
	 * this script recieves $_FILES from main.php
	 * firstly, the upload-directory is checked, if
	 * it exist, the file is save in the user's folder and
	 * an entry in the database is made
	 * else the directory does not exit, one is created,
	 * rest is the same procedure as described above. 
	 *
	 * @uthour : Mubeen Ghauri
	 *			 P17-6107
	 */	


	include "connect.php";
	session_start();

	$uploaddir = 'C:/xampp/htdocs/task-06_DB/images/'.$_SESSION['user'].'/';
	$uploadfile = $uploaddir . basename($_FILES['userimg']['name']);
	$stat = "";

	if(file_exists($uploaddir)) {
		echo "<br>";
		echo "Folder exists !";
		echo "<br>";
	} else {
		echo "<br>";
		echo "Creating file !";
		if(mkdir($uploaddir)) {
			echo "File created !";
		} else {
			echo "Error in creating file";
		}
	}

	echo "<p>";
	print_r($_FILES);
	echo $uploadfile;

	if (move_uploaded_file($_FILES['userimg']['tmp_name'], $uploadfile)) {
	  	
	  	$file_location = "./images/".$_SESSION['user']."/".$_FILES['userimg']['name'];

	  	echo $file_location;

		$qry = "INSERT INTO user_images values('".$_SESSION['user']."','".$file_location."')";
		echo $qry;

	  	if($con->query($qry)) {
	  		$stat = "File is saved into database , and was successfully uploaded.\n";
		} else {
			$stat = "File is not save in database but is uploaded ! ";
		}
	
	} 
	else {
	   $stat = "upload failed"."  -  ".$uploadfile;
	}

	// echo "</p>";
	// echo '<pre>';
	// echo 'Here is some more debugging info:';
	// print_r($_FILES);
	// print "</pre>";

	echo "<br>";
	echo $stat;
	//header("Location:main.php?Status=$stat")

?> 