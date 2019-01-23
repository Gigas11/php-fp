<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Cabin|Nunito" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">

    <title>User Info Page</title>
    <style>
        body {
            background-image: url(assets/images/pigkcco.jpg);
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
        }
        
        img {
            opacity: 0.1;
        }

    </style>

</head>

<body>
    <?php require_once('nav.php')?>

    <div class="clearfix"></div>


    <br><br>

    <h1>Account Information</h1>
    <div class="container">

        <?php
			$d = file_get_contents('assets/data/user.json');
			$d = json_decode($d, true);
		?>

            <table class="table">
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Password</th>
                </tr>
                <?php
				foreach($d as $k => $v){
					echo '
						<tr>
                            <td>'.$v['fName'].'</td>
                            <td>'.$v['lName'].'</td>
							<td>'.$v['email'].'</td>
							<td>'.$v['pw'].'</td>
						</tr>
					';
				};
			?>
            </table>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script>
        /* custom script here */

    </script>
</body>

</html>
