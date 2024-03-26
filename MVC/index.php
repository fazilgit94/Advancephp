<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html>
<title>Simple Sign up from</title>

<head>
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
  <style>
    html,
    body {
      display: flex;
      background: antiquewhite;
      justify-content: center;
      font-family: Roboto, Arial, sans-serif;
      font-size: 15px;
    }

    form {
      width: 70%;
      border: 5px solid #f1f1f1;
      background: bisque;
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
  <form action="" method="post" enctype="multipart/form-data">
    <h1>SIGN UP</h1>
    <div class="icon">
      <i class="fas fa-user-circle"></i>
    </div>
    <div class="formcontainer">
      <div class="container">
        <label for="uname"><strong>Username</strong></label>
        <input type="text" placeholder="Enter Username" name="uname" id="uname">

        <label for="mail"><strong>E-mail</strong></label>
        <input type="text" placeholder="Enter E-mail" name="mail" id="mail">

        <label for="psw"><strong>Password</strong></label>
        <input type="password" placeholder="Enter Password" name="psw" id="psw">

        <label for="cpsw"><strong>Confirm Password</strong></label>
        <input type="password" placeholder="Enter Password" name="cpsw" id="cpsw">

        <label for="gender"><strong>Gender</strong></label><br>
        <input type="radio" name="gen" id="m" value="male">Male
        <input type="radio" name="gen" id="f" value="female">Female
        <br>
        <label for="hobby"><strong>Hobbys</strong></label><br>
        <input type="checkbox" name="hob[]" value="Music"> Music
        <input type="checkbox" name="hob[]" value="Cricket"> Cricket
        <input type="checkbox" name="hob[]" value="Travel"> Travel
        <br> 
        <label for="image"><strong>Files</strong></label>
        <input type="file" name="files" id="files">

      </div>
      <button type="submit" name="btn" id="btn" onclick="return validate()"><strong>SIGN UP</strong></a></button>
      <div class="container" style="background-color:#eee">
        <label style="padding-left: 15px">
          <input type="checkbox" checked="checked" name="remember"> Remember me
        </label>
        <span class="psw"><a href="">Forgot password?</a></span>
      </div>
  </form>

  
    
    
    
</body>
<!-- <script>
  nam = document.getElementById('uname');
  mail = document.getElementById('mail');
  paas = document.getElementById('psw');
  cpass = document.getElementById('cpsw');
  gend = document.getElementsByName('gen');
  hobb = document.getElementById('hob');
  image = document.getElementById('files');


// console.log(nam)
  /* console.log(nam.value);
  console.log(mail.value);
  console.log(paas.value); */





  function validate() {
    if (nam.value == "") {
      alert("please insert your nam");
      return false;
    }
    if (mail.value == "") {
      alert("please insert your email");
      return false;
    }

    if (paas.value == "") {
      alert("please insert your passwrd");
      return false;
    }
    if (paas.value !== cpass.value) {
      alert("please insert correct password");
      return false;
    }
    if (image.value == "") {
      alert("please insert at least one file");
      return false;
    }
  }
</script> -->

</html>

</body>
</html>