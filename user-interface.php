 <?php
session_start();
include 'connection.php';
// mysql_select_db($db);
if(isset($_POST['username'])){
   
    
    $username=$_POST['username'];
    $password=$_POST['password'];

$sql="select * from userdata where username='".$username."'and password ='".$password."'limit 1 ";

$result=mysqli_query($con,$sql);


if(mysqli_num_rows($result)==1){
    echo "you have successfully logged in";
    exit();
}
else{
    echo "you hav enter the incorrect password";
    exit();
}

}



?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>user-interface</title>

</head>


<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-3"></div>
            <div class="col-lg-4 col-md-6">
                <div class="logincontainer">
                    <h1>sign in</h1>
                    <form  method="post" action="user-interface.php">
                        <div class="formgroup">
                            <div class="input-group mb-4">
                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                                <input type="text" name="username" class="form-control" placeholder="Username"
                                    aria-label="Username" aria-describedby="basic-addon1">
                            </div>

                            <!-- <i class="fas fa-user"></i>
                <input type="text" name="name" placeholder="UserName"> -->

                            <br> <br>
                            <div class="input-group mb-4">
                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-key"></i></span>
                                <input type="text" name="password" class="form-control" placeholder="password"
                                    aria-label="password" aria-describedby="basic-addon1">
                            </div>

                            <!-- <i class="fas fa-key"></i>
                <input type="text" name="name" placeholder="password"> -->

                            <br><br>

                    </form>


                    <!-- <button class="btn">submit</button> -->
                    <button type="submit" class="btn btn-primary">Log in</button>
                    <!-- <button type="button" class="btn btn-info">Submit</button> -->
                </div>
                <a href="#">Forgot password ?</a>
                <p>Don't have any account ?<a href="#"> Register Here</a></p>

            </div>


        </div>
    </div>

    <div class="col-lg-4 col-md-3"></div>
    </div>


    <script src="bootstrap/js/bootstrap.min.js"></script>



</body>

</html>