<?php
	/* init_uploaded_files.php
	 * file not to be used independently
	 * included in main.php
	 * 
	 * this scrip loads the uploaded files
	 * from the user's image directory if
	 * it exists, else no images are loaded 
	 *
	 * @author = Mubeen Ghauri 
	 *			 p17-6107
	 */

	include "connect.php";
	//session_start();

	$uploadeddir = 'C:/xampp/htdocs/task-06_DB/images/'.$_SESSION['user'].'/';

	if(file_exists($uploadeddir)) {

		/* if the folder exit then the user must have saved images */

		$qry = "SELECT img_location from user_images where user_name = '".$_SESSION['user']."'";
		//echo $qry;

		$res = $con->query($qry);
		//print_r($res);
		$result = "";

		if($res->num_rows > 0) {

			while($row = $res->fetch_assoc()) {

				$result .=	"<div class="."gallery".">";
  				$result .=	"<a target='_blank' href='".$row["img_location"]."'>";
    			$result .=		"<img src='".$row["img_location"]."' alt='Cinque Terre' width='600'  height='400'>";
  				$result .=			"</a>";
  				$result .= 		"</div>";
  				
			}
		}

		echo $result;

	} else {
		echo "<br> User has no uploaded files !!";
	}


?>