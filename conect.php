<?php
//1: ket noi csdl
$pdo= new PDO('mysql:host=localhost:3307; dbname=bookstore_demo','root','');
$pdo->query('set names utf8');