<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgotten password Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container w-50 mt-5">
    <form action="CodeVerification.php" method="POST">
        <fieldset class="border p-4 rounded shadow p-3 mb-5 bg-light">
            <legend class="w-auto px-6 text-primary"><b>Reset password</b></legend>
            <p>Enter your registered email address, and we will send you a
            verification code to reset your password.
            Check your inbox and enter the code on the next page to complete the process.</p>
             <br>
            <div class="mb-3">
                <label for="username" class="form-label"><b>Email</b></label>
                <input type="email" class="form-control" id="email" placeholder="Enter your email" name="email" required pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$" title="Enter a valid email (e.g., user@example.com)">
            </div>

            <div class="row">
                    <div class="col text-center py-5 " >
                        
                    <button type="submit" class="btn btn-primary w-100">Send Reset Code </button>
                    <a href="index.php"class="text-primary fw-bold">Back to Login </a>
                        
                        
                        

                    </div>
                    
                </div>
            
        </fieldset>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
