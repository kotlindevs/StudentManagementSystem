<?php 
include 'Admin_init.php';
$EMAIL=$_GET[$FACULTY_EMAIL];

$deleteQuery=mysqli_query($con,"DELETE FROM $FACULTY_ADD WHERE $FACULTY_EMAIL='$EMAIL' ");
if($deleteQuery){
    ?>
    <script type="text/javascript">
        alert("Faculty Removed !");
        window.open("http://localhost/sms-main/Admin/admin_panel.php","_self")
        </script>
    <?php
}else{
    echo "error";
}

?>