
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Records</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
  <style>
    html,
    body {
      display: flex;
      justify-content: center;
      font-family: Roboto, Arial, sans-serif;
      font-size: 15px;
    }

    form {
      border: 5px solid #f1f1f1;
    }

    input[type=text],
    input[type=password] {
      width: 100%;
      padding: 16px 8px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
    }

    .icon {
      font-size: 110px;
      display: flex;
      justify-content: center;
      color: #4286f4;
    }

    button {
      background-color: #4286f4;
      color: white;
      padding: 14px 0;
      margin: 10px 0;
      border: none;
      cursor: grab;
      width: 48%;
    }

    h1 {
      text-align: center;
      font-size: 18;
    }

    button:hover {
      opacity: 0.8;
    }

    .formcontainer {
      text-align: center;
      margin: 24px 50px 12px;
    }

    .container {
      padding: 16px 0;
      text-align: left;
    }

    span.psw {
      float: right;
      padding-top: 0;
      padding-right: 15px;
    }

    /* Change styles for span on extra small screens */
    @media screen and (max-width: 300px) {
      span.psw {
        display: block;
        float: none;
      }
    }
  </style>
</head>
<body>
<h1> DATABASE RECORDS </h1>

<table border="1" cellspacing="0" cellpadding="5px" style="margin: 110px -351px;">
  <tr>
    <td>ID</td>
    <td>Firstname</td>
    <td>Email</td>
    <td>Password</td>
    <td>Gender</td>
    <td>Hobbies</td>
    <td>Image</td>
    <td>Actions</td>

  </tr>
  <?php

if(!empty($user_arr))
      {
        foreach($user_arr as $user){
     

            // echo $user->user_image;
        

?>
  <tr>
   <td><?php echo $user->id;?></td>
    <td><?php echo $user->uname;?></td>
    <td><?php echo $user->uemail;?></td>
    <td><?php echo $user->password;?></td>
    <td><?php echo $user->gender;?></td>
    <td><?php echo $user->hobby;?></td>
    <td><?php echo $user->images;?></td>
    <td>
            <a  href="/Tops%20Assignments/Practise%20folder/Advance%20PHP/MVC/updateuser?update_data=<?php echo $user->id; ?>">
            <i class="fa fa-pencil-square" aria-hidden="true"></i>
        </a>
        
        <a  href="/Tops%20Assignments/Practise%20folder/Advance%20PHP/MVC/deleteuser?delete_data=<?php echo $user->id; ?>">
          <i class="fa fa-trash" aria-hidden="true"></i>
        </td>
        

  </tr>
  <?php }}?>

  </table>

  