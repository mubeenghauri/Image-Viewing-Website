<html>
<head>
	<title>Sign In</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        .bclr{
            background: #EEEEEE;
            margin-top: 60px;
        }
        .main-header{
            font-style: all;
            font: sans-serif;
            font-family: bold;
            background: #EEEEEEEE;
            padding-bottom: 45px;
/*            padding-top: 10px;
*/            align-content: center;
            margin-left: 680px;
        }
        

    </style>
</head>
<body class="bclr">


    <div class="main-header">
        <h1> Image Database </h1>
    </div>    

	<form action="login_try.php" method="post">
        <div class="page-header mb-5" align="center">
            <h2>Log In</h2>
        </div>
        <div class="form-group row">
            <div class="col-sm-4"></div>
            <input type="text" name="txtUser" class="form-control col-sm-4" placeholder="User Name" required>
            <div class="col-sm-4"></div>
        </div>
        
        <div class="form-group row">
            <div class="col-sm-4"></div>
                <input type="password" name="txtPass" class="form-control col-sm-4" placeholder="Password" required>
            <div class="col-sm-4"></div>
        </div>
        
        <div class="form-group row">
            <div class="col-sm-4"></div>
            <input type="submit" value="Login" class="btn btn-primary col-sm-4">
            <div class="col-sm-4"></div>
        </div>
        
        <div class="form-group row">
            <div class="col-sm-4"></div>
                <?php
                    if (isset($_GET["Message"])) {
                        echo "<div class='col-sm-4 alert alert-danger' align='center'>";
                        echo $_GET["Message"];
                        echo "</div>";
                    }
                ?>
            </div>
            <div class="col-sm-4"></div>
        </div>
	</form>
</body>
</html>