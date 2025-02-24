<?php
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $correct_username = "sama";
    $correct_password = "123";

    
    $is_succes= ($username === $correct_username && $password === $correct_password);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>


<body>
    <div class="container w-50 mt-5">
        <fieldset class="border p-4 rounded shadow p-3 mb-5 bg-light rounded shadow-lg" style="min-height:500px;">
            <?php if( $is_succes):?>
                 <h1 class="text-center text-primary"><b>Welcome!</b></h1>
                 <p class="text-center"><i>Your login details</i></p>
                 <p><strong>Welcome to our site,</strong> <b><?php echo ($username); ?></b><b>!</b></p>
                 <p><strong>Your Password:</strong> <b><?php echo ($password);?></b> </p>
                 <a href="index.php" class="btn btn-primary w-100">Back to Login</a>


            <?php else :?>
                <div class="row">
                    <div class=" col text-center py-5" >
                    <h4 class="text-center text-danger"><b>Incorrect Credentials!</b></h4>
                    <a href="index.php" class="btn btn-primary w-100">Try Again </a>

                    </div>
                </div>
                
           
            <?php endif; ?>

            
        </fieldset>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>