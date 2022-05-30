<?php

    $BOOK_AUTHOR = $_POST['BOOK_AUTHOR'];
    $BOOK_NAME = $_POST['BOOK_NAME'];
    $BOOK_PUB = $_POST['BOOK_PUB'];

    // echo $BOOK_AUTHOR;
    // echo $BOOK_NAME;
    // echo $BOOK_PUB;

    $connect = mysqli_connect('localhost', 'root', '');
    mysqli_select_db($connect, 'book_db');



    mysqli_query($connect, "set session character_set_connection=utf8;");
    mysqli_query($connect, "set session character_set_results=utf8;");
    mysqli_query($connect, "set session character_set_client=utf8;");

    $sql="insert into book (BOOK_AUTHOR, BOOK_NAME, BOOK_PUB) ";
    $sql.="values('$BOOK_AUTHOR', '$BOOK_NAME', '$BOOK_PUB')";

    // echo $sql;

    mysqli_query($connect, $sql) ;
    mysqli_close($connect);

    echo"<center><h3><br><br>등록완료. 축하드립니다 <br><br><hr><br>";
    echo"이동할 화면을 선택하세요 <br><br>";
    echo"[<a href='data_input.php'>책 이름 입력</a>] &nbsp; | &nbsp; ";
    echo"[ <a href='data_output.php'>결과 화면</a> ] </h3></center>";
?>