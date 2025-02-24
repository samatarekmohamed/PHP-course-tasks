<?php
$is_succespassword = false;
$currentpassword = "";
$correct_currentpassword = "123";
$message="";

if(isset($_POST['Save_password'])){
    $currentpassword = $_POST['current_password'];
    $newpassword = $_POST['New_password'];
    $confirmpassword=$_POST['confirm_password'];

    if ($currentpassword !== $correct_currentpassword) {
        $message = "Incorrect Current Password, please try again!";
    } elseif ($newpassword !== $confirmpassword) {
        $message = "New Password does not match!";
    } else {
        $is_succespassword = true;
        $message = "Password Changed Successfully!";
    }




    
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
   <div class="container w-50 mt-5 ">
        
        

<form  method="POST" >

        <fieldset class="border p-4 rounded shadow p-3 mb-5 bg-light rounded shadow-lg" style="min-height:500px "  >
        <legend class="w-auto px-6 text-primary"> <b>Please change your password</b> </legend>

           
            <div class="form-group">
                <label for="password1"class="mb-2"><b>Current password</b> </label>
                <input class="form-control"type="password" id="password1" placeholder="enter current password" name="current_password" required>
            </div>
            <br>

            <div class="form-group">
                <label for="password2"class="mb-2"><b>New password</b> </label>
                <input class="form-control"type="password" id="password2" placeholder="enter New password" name="New_password" required>
            </div>
            <br>

            <div class="form-group">
                <label for="password3"class="mb-2"><b>Confirm password</b> </label>
                <input class="form-control"type="password" id="password3" placeholder="confirm new password" name="confirm_password" required>
            </div>
            <br>
            <button class="btn btn-primary w-100" type="submit" name="Save_password" > Save</button>
            <?php if(isset($_POST['Save_password'])): ?>
              <p class="mt-3 alert <?= $is_succespassword ? 'alert-success' : 'alert-danger' ?>">
                 <?= $message ?></p>
             <?php endif; ?>
 

            </form>

            <br>
    











<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>