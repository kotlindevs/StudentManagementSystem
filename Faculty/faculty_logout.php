<?php
session_start();
if(isset($_SESSION['isFacultyLogin']) == 1){
    ?>
        <script type="text/javascript">
             alert("can't be logout")
            window.open("http://localhost/sms-main/faculty/faculty_panel.php")
        </script>
    <?php
}else{
    unset($_SESSION['email']);
    ?>
    <script type="text/javascript">
        alert('Logout successfully')
        window.open("http://localhost/sms-main/faculty/faculty_login.php")
    </script>
<?php
}
?>