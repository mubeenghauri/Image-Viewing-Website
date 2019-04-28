
<?php
	include "connect.php";
	session_start();
?>

<html>
	
	<head>
		<title> Image Database </title>
		<link href="css/bootstrap.min.css" rel="stylesheet">

		<style>
            .nav-header {
            	padding-left: 5px;
            	margin-left: 30px;
            	font-size:  30px;
            	
            }

            .navigation {
            	font: sans-serif;
            	font-family: bold;
            	background: #20c997;
            	padding-bottom: 15px;
            	padding-top: 10px;
            	align-content: center;
            }

            .nav-userID {
            	margin-left: 1150px;
            	font: sans-serif;
            	font-size: 20px;
            }

            .show-button {
            	margin-left: 600px;
            	margin-top: 20px;
            }

            .btn-primary {
            	margin-right: 30px;
            }

            .btn-secondry {
            	margin-left: 0px;
            }

            div.gallery {
                margin: 5px;
                border: 1px solid #ccc;
                float: left;
                width: 180px;
                margin-left: 10px;
                margin-right: 10px;
            }

            div.gallery:hover {
              border: 1px solid #777;
            }

            div.gallery img {
              width: 100%;
              height: auto;
            }

            .main-header {
                color: green;
                text-align: center;
                padding-bottom: 25px;
                padding-top: 20px;
            }

		</style>

	</head>

	<body>

		<div class="navigation">
			<a class="nav-header"> Image Database </a>

			<a class="nav-userID"> <?php echo "Logged In : ".$_SESSION["user"]." 	" ; ?> </a>

		</div>

		<div class="main-wrapper">
			<div class="choice-menu">
				<div class="show-button">
					
					<!-- <button  type="button" class="btn btn-secondry" >Upload</button>  -->


					<form enctype="multipart/form-data" action="upload.php" method="POST">

    					<input type="hidden" name="MAX_FILE_SIZE" value="512000" />
    						 <input name="userimg" type="file" />
    					<input class="btn btn-secondry" type="submit" value="Upload"/>
					
                    </form>

					<?php
                        if (isset($_GET["Status"])) {
                            
                            echo "<div class='col-sm-4 alert alert-danger' align='center'>";
                            echo $_GET["Status"];
                            echo "</div>";
                        }
                	?>

				</div>

                    <div class="main-header">
                        <h1 > Uploaded Files </h1>
                    </div>

			</div>

			<?php include "init_uploaded_files.php"; ?>
				
			</div>

		</div>
		
	</body>
</html>
