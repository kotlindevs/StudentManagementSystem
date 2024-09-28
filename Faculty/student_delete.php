<?php 
include 'Faculty_init.php';
$EMAIL=$_GET[$STUDENT_EMAIL];

$deleteQuery=mysqli_query($con,"DELETE FROM $STUDENT_ADD WHERE $STUDENT_EMAIL='$EMAIL' ");
if($deleteQuery){
    ?>
    <script type="text/javascript">
        alert("Student Removed !");
        window.open("http://localhost/sms-main/Faculty/faculty_panel.php","_self")
        </script>
    <?php
}else{
    echo "error";
}

?>