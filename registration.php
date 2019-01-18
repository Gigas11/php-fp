<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
    
	<title>Registration Here!</title>
	
</head>
<body>
	<?php require_once('nav.php')
    ?>
    
    <div class="container">
		<h2>Registration</h2>
		<form action="assets/data/process.php" method="post" enctype="multipart/form-data">
			<label>First Name <br>
				<input type="text" name="fName">
			</label>
            
            <label>Last Name <br>
				<input type="text" name="lName">
			</label>
            
            <label>Email <br>
				<input type="text" name="email">
			</label>
			<br>
			<label>Password <br>
				<input type="password" name="pw">
			</label>
			<br>
            
            <label>Salary <br>
            <input type="text" name="sal">            
            </label>     
			<br>
            
			<input type="submit" value="Register">
		</form>
        
        
        
       
        
        
	</div>
    </body>
    
</html>
