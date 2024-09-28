<?php

$DATABASE_NAME='sms';
$HOST='localhost';
$STUDENT_ADD='student_add';
$ADMIN='admin';
$FACULTY='faculty';
$USER='root';
$PASSWORD='';

$FC_NOTICE_STUDENT='fc_notice_student';
$FC_STUDENT_NOTICE_DATE='fc_student_notice_date';
$FC_STUDENT_NOTICE_NAME='fc_student_notice_name';
$FC_STUDENT_NOTICE_DES='fc_student_notice_des';

$JAVA_ASSIGNMENTS='java_assignments';
$JAVA_CH='java_ch';
$JAVA_DES='java_des';

$PYTHON_ASSIGNMENTS='python_assignments';
$PYTHON_CH='python_ch';
$PYTHON_DES='python_des';

$KOTLIN_ASSIGNMENTS='kotlin_assignments';
$KOTLIN_CH='kotlin_ch';
$KOTLIN_DES='kotlin_des';

$C_ASSIGNMENTS='c_assignments';
$C_CH='c_ch';
$C_DES='c_des';

$PHP_ASSIGNMENTS='php_assignments';
$PHP_CH='php_ch';
$PHP_DES='php_des';

$CS_ASSIGNMENTS='cs_assignments';
$CS_CH='cs_ch';
$CS_DES='cs_des';

$STUDENT_NOTICE_ADD='student_notice_add';
$STUDENT_NOTICE_DATE='student_notice_date';
$STUDENT_NOTICE_NAME='student_notice_name';
$STUDENT_NOTICE_DES='student_notice_des';

$STUDENT_EMAIL='student_email';
$STUDENT_PASSWORD='student_password';


$con=mysqli_connect($HOST,$USER,$PASSWORD,$DATABASE_NAME);
if(!$con){
    mysqli_connect_error();
}else{
    //echo "connected to database";
}

?>