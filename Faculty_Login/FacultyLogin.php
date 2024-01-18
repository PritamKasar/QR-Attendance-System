<?php
$server="localhost";
$username="root";
$password="";
$database="scannattend";
$connect= mysqli_connect($server,$username,$password,$database);
if(!$connect)
{
  die("Error!". mysqli_connect_error());
}


$Faculty_Login=false;
$error=false;
if($_SERVER["REQUEST_METHOD"]=="POST")
{
  $username=$_POST["Username"];
  $password=$_POST["Password"];
  $query = "Select * from users where username='$username' and password='$password'";
  $result = mysqli_query($connect, $query);
  $num = mysqli_num_rows($result);
  if($num==1)
  {
    $Faculty_Login=true;
    session_start();
    $_SESSION['loggedin']=true;
    $_SESSION['Username']=$username;
    header("location:\QR_Attendance_System-main\QR_Attendance\QR_Attendance.php");
  }
  else
  {
    $error="Incorrect Username or Password";
  }

}

?>
<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Faculty Login</title>
  <link rel="stylesheet" href="F_L_Style.css">
</head>

<body>
  <nav id="navbar">
    
    <div id="logo">
      <img src="Logo2.png" alt="logo image is loaded">
    </div>

    <ul>
      <li class="item"> <a href="FacultyLogin.php">Home</a></li>
      <li class="item"><a href="\QR_Attendance_System-main\QR_Generator\QR_Generater.php">Student Registration</a></li>
      <!-- <li class="item"><a href="/QR_Attendance_System-main/QR_Attendance/QR_Attendance.html">Take Attendance</a></li> -->
      <li class="item"><a href="FacultyLogin.php">Log-Out</a></li>
    </ul>
  </nav>
  
  <section id="Home">
  </section>


  <div class="FL">
    <?php
  if($error)
  {
    echo ' <div class="alert">
    <strong>Error!</strong> '. $error.'
  </div> ';
  }
  ?>
    <h1>Faculty Login</h1>
    <form action="FacultyLogin.php" method="post">
      <div class="in">
        <input type="text" id=Username name=Username required>
        <span></span>
        <label>Username</label>
      </div>
      <div class="in">
        <input type="password" id=Password name=Password required>
        <span></span>
        <label>Password</label>
      </div>
      <input type="submit" value="Login">
      <br><br>
    </form>

  </div>
  <footer>
    <p class="bott">Svkm's Institude Of Technology Dhule</p>

  </footer>
</body>

</html>