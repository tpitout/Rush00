<!DOCTYPE html>
<html lang="en">
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

body {font-family: Helvetica;}
form {border: 3px solid #007fff;}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;

}

h2 {
    color: #007fff;
    text-align: center;
    cursor: help;
    font-family: Helvetica;

}
button {
    background-color: #007fff;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    font-family: Helvetica;
    font-size: 15px;
}

button:hover {
    opacity: 0.8;
}

.regbtn {
    background-color: #007fff;
    color: white;
    padding: 5px 5px;
    margin: auto;
    border: none;
    cursor: pointer;
    width: 100%;
    font-family: Helvetica;
    font-size: 15px;
    text-align: left;


}

.forbtn {
    background-color: #007fff;
    color: white;
    padding: 5px 5px;
    margin: auto;
    border: none;
    cursor: pointer;
    width: 50%;
    font-family: Helvetica;
    font-size: 15px;
    text-align: right;

}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 10%;
    border-radius: 50%;
}
label {
    color: #007fff;
}

.container {
    padding: 20px;
    text-align: center;
    width: 500px;
    margin: 0 auto;
}

span.psw {
    float: right;
    padding-top: 16px;
}

@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
</head>
<body>

<h2>RUSH.COM</h2>

<?php
$error_login = "ACCOUNT DOESN'T EXIST";
$username = trim($_GET['uname']);
$password = trim($_GET['psw']);

$success = false;

$handle = fopen("data.csv", "r");

while (($data = fgetcsv($handle)) !== FALSE) {
    if ($data[0] == $username && $data[1] == $password) {
        $success = true;
        break;
    }
}

fclose($handle);

if ($success) {
    header("location: main.php");
}
?>

<form method="GET">
  <div class="imgcontainer">
    <img src="img/avatar1.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>USERNAME</b></label>
    <input type="text" placeholder="ENTER USERNAME" name="uname" required>

    <label for="psw"><b>PASSWORD</b></label>
    <input type="password" placeholder="ENTER PASSWORD" name="psw" required>
        
    <button type="submit">LOGIN</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#007fff">
    <button type="button" class="regbtn">REGISTER</button>
  </div>
</form>
</body>
</html>