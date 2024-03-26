<?php 

function add_user($user_name,$password,$email,$phone){
    $sql = "INSERT INTO `user`(`user_name`, `password`, `email`, `phone`) VALUES ('$user_name','$password','$email','$phone')";
    pdo_execute($sql);
}
// function checkEmail($email){
//     $sql = "SELECT * FROM `user` WHERE email=".$email;
//     $check_email = pdo_query_one($sql);
//     return $check_email;
// }

function email_exist($email)
{
    $sql = "SELECT * FROM `user` WHERE `email` = '$email'";
    return pdo_query_value($sql) > 0;
}
function check_taikhoan($email,$password){
    $sql = "SELECT * FROM `user` WHERE email = '".$email."' AND password = '".$password."'";
    $check_tk = pdo_query_one($sql);
    return $check_tk;
}
function check_email($email){
    $sql = "SELECT * FROM `user` WHERE email = '".$email."'";
    $check_tk = pdo_query_one($sql);
    return $check_tk;
}
?>