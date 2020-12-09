<?php
$response_recaptcha = $_POST['g-recaptcha-response'];
if(!$response_recaptcha){
//if(isset($response_recaptcha)&&$response_recaptcha){
    echo "por favor verifica el chaptach";
    $secret = "6LeRy_8ZAAAAAMwYvLNyyx9JGdG4r-smpyMZ7_Sm";
    $ip = $_SERVER['REMOTE_ADDR'];
    $validation_sever = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$response_recaptcha&remoteip=$ip");
    
    var_dump($validation_sever);
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

