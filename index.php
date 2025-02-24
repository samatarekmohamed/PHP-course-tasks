<?php
$message = ""; 

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $correct_username = "sama";
    $correct_password = "123";
    if($username !== $correct_username && $password !== $correct_password){
        $message = "<div class='alert alert-danger text-center'>Invalid username and password, please enter the correct username and password</div>";
    }elseif($username !== $correct_username){
        $message = "<div class='alert alert-danger text-center'>Invalid username, please enter the correct username</div>";
    }elseif($password !== $correct_password) {
        $message = "<div class='alert alert-danger text-center'>Invalid password, please enter the correct password</div>";
    }else {
        $message = "<div class='alert alert-success text-center'>Welcome to our site!</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container w-50 mt-5">
        
        <form action="" method="POST">
            <fieldset class="border p-4 rounded shadow bg-light shadow-lg position-relative" style="min-height: 600px;">
                
                <h1 class="text-center text-primary"><b>Welcome Back!</b></h1>
                <p class="text-center"><i>Log in to continue exploring amazing features</i></p>

                <legend class="w-auto px-6 text-primary"><h2><b>Login</b></h2></legend>

                <div class="form-group">
                    <label for="username" class="mb-2"><b>Username</b></label>
                    <input class="form-control" type="text" id="username" placeholder="Enter username or email" name="username" required>
                </div>

                <br>

                <div class="form-group">
                    <label for="password" class="mb-2"><b>Password</b></label>
                    <input class="form-control" type="password" id="password" placeholder="Enter your password" name="password" required>
                    <small><a href="password.php" class="text-primary fw-bold">Forgot Password?</a></small>
                </div>

                <br>

                <button class="btn btn-primary w-100" type="submit" name="submit">Login</button>

               
                <div class="text-center mt-3">
                    <?php if(!empty($message)): ?>
                        <p><?= $message ?></p>
                    <?php endif; ?>
                </div>
				<br>
				
				

                
                <div class="text-center pb-3">
                    Don't have an account? <a href="Registeration.php" class="text-primary fw-bold">Sign up</a>
                </div>

            </fieldset>
		</form>

    </div>








    
    
    
    <!--
	<script src="js/popper.min.js"></script>
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    
</body>
</html>