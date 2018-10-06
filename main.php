<!DOCTYPE html>
<html>
<head>
<style>
ul {
    list-style-type: none;
    margin: auto;
    padding: 0;
    overflow: hidden;
    background-color: #007fff;
}

li {
    float: left;
}

li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: white;
    color: black;
}

li.dropdown {
    display: inline-block;
}
.container {
    padding: 20px;
    text-align: center;
    width: 500px;
    margin: 0 auto;
}

.container1 {
    padding: 20px;
    text-align: center;
    width: auto;
    margin: 0 auto;
}

.dropdown-content {
    display: none;
    position: absolute;
    color: black;
    background-color: white;
    min-width: 160px;
    box-shadow: 0px 0px 30px 0px #000000;
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
    background-color: #007fff;
    color: white;
}

.dropdown:hover .dropdown-content {
    display: block;
}
p2 {
    color: white;
    font-family: helvetica;
}
</style>
</head>
<body>

<div class="container1" style="background-color:#007fff"></div>

<ul>
  <li><a href="main.php"><b>HOME</b></a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn"><b>MEN</b></a>
    <div class="dropdown-content">
      <a href="#">Link 1</a>
      <a href="#">Link 2</a>
      <a href="#">Link 3</a>
    </div>
  </li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn"><b>MEN</b></a>
    <div class="dropdown-content">
      <a href="#">Link 1</a>
      <a href="#">Link 2</a>
      <a href="#">Link 3</a>
    </div>
  </li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn"><b>MEN</b></a>
    <div class="dropdown-content">
      <a href="#">Link 1</a>
      <a href="#">Link 2</a>
      <a href="#">Link 3</a>
    </div>
  </li>
</ul>
<form>
    <div>
        <h1>APPLE</h1>
        <h1>SAMSUNG</h1>
        <h1>HUAWEI</h1>
</div>

</form>
<div class="container1" style="background-color:#007fff">
  <p2>&#169 created by tpitout | mtshisw</p2>
  </div>
</body>
</html>