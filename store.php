<?php
include'./conect.php';
$m =isset($_POST['maloai'])?$_POST['maloai']:'';
$t =isset($_POST['tenloai'])?$_POST['tenloai']:'';
$sql="Insert into loai(maloai,tenloai) values('$m','$t')";
$pdo->query($sql);

header('location:index.php');