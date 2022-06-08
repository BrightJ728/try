<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Login</title>
</head>
<body>
    <div class="container">
        
        <form id="form" class="form" name="form" method="POST" action="./db_login.php">

        <div class="form-control">
        <label for="email" >Email</label>
        <input type="email" id="email" name="email" class="email" >
        <small id="errorEmail"></small>
        </div>

        <div class="form-control">
        <label for="password" >Password</label>
        <input type="password" id="password" name="password" class="password" >
        <small id="errorPassword"></small>
        </div>

        <button type="submit" id="submitBtn" name="submit">Submit</button>
        </form>
    </div>
</body>
</html>