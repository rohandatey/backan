<html>
  <head>
    <title>select</title>
  </head>
  <style>
        * {
            /* margin: 0px auto; */
            margin:0;
            padding: 0;
            box-sizing: border-box;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
           
        }

        .table tr,
        table td {
            margin: 10px 12px;
            padding: 10px 15px;
            border: 2px solid black;
            text-align: center;
            font-size: 1.2rem;
            /* background-color: yellow;
            color: aliceblue; */
            

        }
        /* h2{
          text-align: center;
        } */
    </style>
<h2>User Table</h2>
  <body>
    <table border="2">
  <tr>
    <th>S.No</th>
    <th>Name</th>
    <th>UserName</th>
    <th>E-mail</th>
    <th>phone_verified_at</th>
  </tr>

<?php

include 'connection.php';
$sql = "select name,username,email,phone_verified_at  from users";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row


  $sno=1;



 

  

//  echo $sno;

  while($row = mysqli_fetch_assoc($result)) 
  
  //  if(is_null($row['phone_verified_at']))
  //  {
  //    echo "";

  //  }
    

    
  

 
  


  
  {

    echo"

    <tr>
    <td>".$sno++."</td>
    <td>".$row['name']."</td>
  <td>".$row['username']."</td>
  <td>".$row['email']."</td>
  <td>".$row['phone_verified_at']."
  
 
  </td>
  </tr>
  ";




  }
} else {
  echo "0 results";
}

mysqli_close($con);
  
?>
</table>
</body>
</html>