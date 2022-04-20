<?php
include("connection.php");
$qurey="select * users";
// $data =mysqli_query($conn,$qurey); 
// echo "$data";
// $sql ="select *user" 
// $users=mysqli_query($qurey);
// $result =mysqli_fetch_assoc($data);

$data =mysqli_query($conn,$sql);

// echo $result['id'];
// echo $result['name'];
// echo $result['username'];
// echo $result['email'];
// echo $result['phon_number'];

  ?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="user.css">
    <style>
        * {
            margin: 0;
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

        }
    </style>
</head>

<body>
    <table>
        <h2>user table</h2>
        <tr>
            <td>s.no</td>
            <td>name</td>
            <td>username</td>
            <td>e-mail</td>
            <td>ph.no</td>
            <td>is verified</td>
        </tr>
        <?php
        
        while($rows=mysql_fetch_assoc($users))
        {
            ?>
            <tr>
                <td><?php echo $rows['s.no']?></td>
                <td><?php echo $rows['name']?></td>
                <td><?php echo $rows['username']?></td>
                <td><?php echo $rows['e-mail']?></td>
                <td><?php echo $rows['ph.no']?></td>
                <td><?php echo $rows['is verified']?></td>
            </tr>
            <?php
            }
            ?>
    </table>
</body>

</html>