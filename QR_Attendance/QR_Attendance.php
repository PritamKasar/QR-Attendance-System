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

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR_Attendance</title>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/webrtc-adapter/3.3.3/adapter.min.js"></script> 
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.min.js"></script> 
    <script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
    <link rel="stylesheet" href="QR_Att_Style.css">
</head>

<body>
    <nav id="navbar">
    
        <div id="logo">
          <img src="/QR_Attendance_System-main/Logo2.png" alt="logo image is loaded">
        </div>
    
        <ul>
      <li class="item"> <a href="/QR_Attendance_System-main/Faculty_Login/FacultyLogin.php">Home</a></li>
      <li class="item"><a href="/QR_Attendance_System-main/QR_Generator/QR_Generater.php">Student Registration</a></li>
      <li class="item"><a href="/QR_Attendance_System-main/QR_Attendance/QR_Attendance.php">Take Attendance</a></li>
            <li><a href="/QR_Attendance_System-main/Faculty_Login/FacultyLogin.php">Log-Out</a></li>
        </ul>
    </nav>
    <section id="StuReg">
    </section>
    <div>
        <div class="box"><video id="show" width="100%"></video></div>
        <!-- <div class="box2"><input type="text" name="text" id="text" placeholder="scan " readonly=""></div> -->
    <div>
            <?php        
        if(isset($_POST['text']))
        {
            $input=$_POST['text'];
            $data = $input;
            list($Name, $PRN, $Email, $Mobile) = explode(":", $data);
            $insert="insert into attendance values('auto_increment','$Name', '$PRN', '$Email', '$Mobile',NOW())";
            if($connect->query($insert)===TRUE)
            {    
                // header("location: QR_Attendance.php");
        ?>
            <audio src="beep.mp3" autoplay></audio>

            <?php  
            }
        }        
        ?>

        </div>
        <br><br>
        <form class="box2" action="QR_Attendance.php" method="post">
            <input type="text" name="text" id="text" placeholder="scan " readonly="">
        </form>
        <table class="table">
            <tr>
                <th>Sr.No</th>
                <th>Name</th>
                <th>PRN</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Time</th>
            </tr>

            <?php
                $select="select sr_no,name,prn,email,mo_no,time from attendance where date(time)=curdate()";
                $check=$connect->query($select);
                while($data=$check->fetch_assoc())
                {
            ?>
            <tr>
                <td>
                    <?php echo $data['sr_no'];?>
                </td>
                <td>
                    <?php echo $data['name'];?>
                </td>
                <td>
                    <?php echo $data['prn'];?>
                </td>
                <td>
                    <?php echo $data['email'];?>
                </td>
                <td>
                    <?php echo $data['mo_no'];?>
                </td>
                <td>
                    <?php echo $data['time'];?>
                </td>
            </tr>


            <?php
        }
        ?>

        </table>
        <div class="box3">
            <input type='button' onclick='Att_Down()' value='Download Attendance'>
        </div>
    </div>
    <!-- <footer>
        <p class="bott">Svkm's Institude Of Technology Dhule</p>
    </footer> -->

</body>
<script>
    function Att_Down()
    {
        window.open("/QR_ATTENDANCE_SYSTEM-MAIN/Attendance_Download/QR_Att_Down.php")
    }
</script>
<script type="text/javascript" src="QR_Att_Script.js"> </script>

</html>