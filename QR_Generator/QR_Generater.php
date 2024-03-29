<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>QR Code Generator in JavaScript</title>
  <link rel="stylesheet" href="QR_Gen_Style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
<nav id="navbar">
    
  <div id="logo">
    <img  src="/QR_Attendance_System-main/Logo2.png" alt="">

  </div>

  <ul>
    <li class="item"> <a href="/QR_Attendance_System-main/Faculty_Login/FacultyLogin.php">Home</a></li>
      <li class="item"><a href="/QR_Attendance_System-main/QR_Generator/QR_Generater.php">Student Registration</a></li>
      <!-- <li class="item"><a href="/QR_Attendance_System-main/QR_Attendance/QR_Attendance.php">Take Attendance</a></li> -->
    <li class="item"><a href="/QR_Attendance_System-main/Faculty_Login/FacultyLogin.php">Log-Out</a></li>
  </ul>
</nav>

<section id="Home">
</section>
  <div class="qr">
    <header>
      <h1>Generator QR Code </h1>
    </header>
    <div class="form">
      <div class="i1"><input class="d1" type="text" spellcheck="false" required>
        <span></span>
        <label>Enter Full Name</label>
      </div>
      <div class="i1">
        <input class="d2" type="number" required>
        <span></span>
        <label>PRN</label>
      </div>
      <div class="i1">
        <input class="d3" type="email" required>
        <span></span>
        <label>Email</label>
      </div>
      <div class="i1">
        <input class="d4" type="number" required>
        <span></span>
        <label>Mobile Number</label>
      </div>
      <button class="btn">Generate QR Code</button>
      <button class="dbtn" disabled="disabled">Download QR Code</button>
    </div>
    <div class="qr-code">
      <img src="" alt="qr-code">
    </div>
  </div>
  <footer>
    <p class="bott">Svkm's Institude Of Technology Dhule</p>

  </footer>


  <script type="text/JavaScript" src="QR_Gen_Script.js"></script>



</body>

</html>