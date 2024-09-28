<?php

$DATABASE_NAME='sms';
$HOST='localhost';

$STUDENT='student';
$ADMIN='admin';
$FACULTY='faculty';

$STUDENT_ADD='student_add';
$FACULTY_ADD='faculty_add';

$STUDENT_NOTICE_ADD='student_notice_add';
$SEARCH_STUDENT='search_student_box';
$FACULTY_NOTICE_ADD='faculty_notice_add';
$SEARCH_FACULTY="search_faculty_box";

$USER='root';
$PASSWORD='';

$ADMIN_NAME='admin_name';
$ADMIN_CONTACT='admin_contact';
$ADMIN_EMAIL='admin_email';
$ADMIN_PASSWORD='admin_password';


$FACULTY_MNO='faculty_mno';
$FACULTY_NAME='faculty_name';
$FACULTY_EMAIL='faculty_email';
$FACULTY_PASSWORD='faculty_password';
$FACULTY_QUALIFICATION='faculty_qualification';

$FACULTY_NOTICE_DATE='faculty_notice_date';
$FACULTY_NOTICE_NAME='faculty_notice_name';
$FACULTY_NOTICE_DES='faculty_notice_des';


$STUDENT_MNO='student_mno';
$STUDENT_NAME='student_name';
$STUDENT_EMAIL='student_email';
$STUDENT_PASSWORD='student_password';
$STUDENT_RESULT='student_result';

$STUDENT_NOTICE_DATE='student_notice_date';
$STUDENT_NOTICE_NAME='student_notice_name';
$STUDENT_NOTICE_DES='student_notice_des';


$con=mysqli_connect($HOST,$USER,$PASSWORD,$DATABASE_NAME);
if(!$con){
    mysqli_connect_error();
}else{
    //echo "connected to database";
}

?>