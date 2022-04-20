<?php

include("connection.php");
error_reporting (0);


?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>reset password</title>
    <link rel="stylesheet" href="reset password.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</head>

<body>
    <div class="bgi">

   
    <!-- <img class="bgi" src="images/spaghetti-g00646c086_1920.jpg"> -->
    <div class="container">
        <div class="row">
            <div class="omid col-10 col-sm-10 col-md-8 col-lg-5">
                <div class="box">
                    <h2>Reset Password</h2>
                    <p>Enter Here Your Detail's</p>

                    <form>
                        <input style="margin: 10px; padding: 12px;" type="text" name="rollno" id="rollno" placeholder="rollno">
                        <input style="margin: 10px; padding: 12px;" type="text" name="firstname" id="firstname" placeholder="firstname">
                        <input style="margin: 10px; padding: 12px;" type="text" name="lastname" id="lastname " placeholder="lastname ">
                        <input style="margin: 10px; padding: 12px;" type="text" name="email " id="email " placeholder="email ">   
                        <input style="margin: 10px; padding: 12px;" type="text" name=" Password " id=" Password " placeholder=" Password "> 
                        <input style="margin: 10px; padding: 12px;" type="text" name="Confirm Password " id="Confirm Password " placeholder="Confirm Password "> 
                        <button type="button" class="btn btn-outline-success">submit</button>
                        
                      
               
                    </form>

                    <p style="color:black;">Not Register yet? Register Now</p>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

</html>

<?php

$rollno=$_GET['rollno'];
$firstname=$_GET['firstname'];
$lastname=$_GET['lastname'];
$email=$_GET['email'];
$password=$_GET['password'];
$confirmpassword=$_GET['confirm password'];

// echo "rollno";
// echo "firstname";
// echo "lastname";
// echo "email";
// echo "password";
// echo "confirm password";

$query="insert into student value ('$rollno1','$firstname','$lastname','$email','$password','$confirmpassword',)";

$data=mysqli_query($conn,$query);

if($data)
{
    echo "data inserted into database";
}

else{
    echo "failed to data inserted into database";

}

?>