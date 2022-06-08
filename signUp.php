


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css" >
    <title>Fashion site</title>
</head>
<body>

    <div class="container">

        <form id="form" class="form"  method="POST" action="./db_signup.php" >
                
            <div class="form-control">
                <label for="email">Email</label>
                <input type="text" name="email" id="email" placeholder="Enter your email address">
                <small id='emailError'> </small>
            </div>
            
            <div class="form-control">
                <label for="phoneNumber">Phone Number</label>
                <input type="text" name="phoneNumber" id="phoneNumber" placeholder="Enter your phone Number">
                <small id='phoneError'></small>
            </div>
            <div class="form-control">
                <label for ="password">Password</label>
                <input type="password" name="password" id="password" placeholder="input password">
                <small id='passwordError'></small>
            </div>
            <div class="form-control">
                <label for="password2" >Confirm Password</label>
                <input type="password" name="password2" id="password2" placeholder= "Confirm password" >
                <small id='password2Error'></small>
            </div>
            
            <small id='success'></small>
            <button type="submit" id='submitBtn' name="submit">Submit</button>

            <a href="./login.php">Already Have Account?</a>
        </form>
    </div>
    

</body>
</html>