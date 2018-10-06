<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #00FFFF;}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

h2 {
    color: #00FFFF;
    text-align: center;
    cursor: help;

}
button {
    background-color: #00FFFF;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 10%;
    border-radius: 50%;
}

.container {
    padding: 16px;
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
if ($_GET['uname'] == "TREDX") {
    if ($_GET['psw'] == "123") {
        header("Location: action_page.php");
    }      
}
?>

<form method="GET">
  <div class="imgcontainer">
    <img src="img/avatar.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname">USERNAME</b></label>
    <input type="text" placeholder="ENTER USERNAME" name="uname" required>

    <label for="psw"><b>PASSWORD</b></label>
    <input type="password" placeholder="ENTER PASSWORD" name="psw" required>
        
    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#00FFFF">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>
</body>
</html>