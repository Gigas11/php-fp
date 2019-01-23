<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Cabin|Nunito" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        p.groove {
            border-style: groove;
        }

    </style>
    <title>Registration Here!</title>

</head>

<body>
    <?php require_once('nav.php')
    ?>
<br><br>
    <div class="container">
        <h1 class="groove">Registration</h1>
        <form class="groove" action="assets/data/process.php" method="post" enctype="multipart/form-data">
            <label>First Name <br>
				<input type="text" name="fName" required>
			</label>
            <br>
            <label>Last Name <br>
				<input type="text" name="lName" required>
			</label>
            <br>
            <label>Email <br>
				<input type="text" name="email" required>
			</label>
            <br>
            <label>Password <br>
				<input type="password" name="pw" required>
			</label>
            <br>
            <label>Salary <br>
            <input type="text" name="sal" required>            
            </label>
            <br>

            <input type="submit" value="Register" required>
        </form>






    </div>
</body>

</html>
