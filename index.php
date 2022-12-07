<?php
//1: ket noi csdl
    $pdo= new PDO('mysql:host=localhost:3307; dbname=bookstore_demo','root','');
    //2: viet sql
    $sql="select*from loai";
    
    //3:thuc thi sql,kq tra ve doi tuong PDOstament
    $stm=$pdo->query($sql);
    //4: xu ly kq
    //4.1:lay ra so duong
    $n=$stm->rowCount();
    //4.2: lay ra data cua sql: PDO::FETCH_ASSOC->array,PDO::FETCH_OBJ:object,...
    $data=$stm->fetchAll(PDO::FETCH_ASSOC);
    //4.3: duyet hien thi kq
    echo"<h1> Co $n loai</h1>";
    ?>
    <a href="create.html">Them</a>
    <?php
    foreach($data as $item){
        echo "<div> {$item['maloai']},{$item['tenloai']}</div>";
    }
?>