<?php
session_start();
if(isset($_SESSION['isStudentLogin']) == 0){
    ?>
        <script type="text/javascript">
             alert("can't be logout")
            window.open("http://localhost/sms-main/student/student_panel.php")
        </script>
    <?php
}else{
    unset($_SESSION['email']);
    ?>
    <script type="text/javascript">
        alert('Logout successfully')
        window.open("http://localhost/sms-main/student/student_login.php")
    </script>
<?php
}
?>