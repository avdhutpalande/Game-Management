<?php
    $pdo=new
    pdo('mysql:host=localhost; dbname=feedback','root','root');
    session_start();
    $name=$_POST['name1'];
    $email=$_POST['email'];
    $email=$_POST['msg'];
    $insert=$pdo->prepare("insert into info(name1,email,msg) values(:name1,:email,:msg)");
    $insert->bindParam(':name1',$name1);
    $insert->bindParam(':email',$email);
    $insert->bindParam(':msg',$msg);
    $insert->execute();
header('location:contact.html');
?>