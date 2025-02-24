<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container w-50 mt-5">
    <form  method="POST">
        <fieldset class="border p-4 rounded shadow p-3 mb-5 bg-light">
            <legend class="w-auto px-6 text-primary"><b>Sign Up</b></legend>
            <br>
            
            <div class="mb-3">
                <label for="username" class="form-label"><b>Username</b></label>
                <input type="text" class="form-control" id="username" name="username" required placeholder="Enter your Username">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label"><b>Email</b></label>
                <input type="email" class="form-control" id="email"placeholder="Enter your Email" name="email" required pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$" title="Enter a valid email (e.g., user@example.com)">
            </div>

            <div class="mb-3">
                <label for="password" class="form-label"><b>Password</b></label>
                <input type="password" class="form-control" id="password" placeholder="Enter your Password" name="password" required minlength="6" title="Password must be at least 6 characters">
            </div>

            <div class="row">
                <div class="col text-center py-5">
                    <button type="submit" class="btn btn-primary w-100">Create an Account</button>
                    <p class="mt-3">Already Have an Account? <a href="index.php" class="text-primary fw-bold">Login To Account</a></p>
                </div>
            </div>


        </fieldset>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
