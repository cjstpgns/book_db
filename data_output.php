<?php

echo "<br><h2><center> 책 관리 </center></h2>";
echo "<hr>";

$connect = mysqli_connect('localhost', 'root', '');
mysqli_select_db($connect, 'book_db');



mysqli_query($connect, "set session character_set_connection=utf8;");
mysqli_query($connect, "set session character_set_results=utf8;");
mysqli_query($connect, "set session character_set_client=utf8;");

$sql = "select * from book";
$result = mysqli_query($connect, $sql);
$count = mysqli_num_fields($result);

echo "<B> 테이블 이름 : book</B><br><br>";

?>

<table width='600' border='1' bordercolor='blue' cellpadding='1'>
    <tr>
        <td bgcolor='#FFFF00'><B> 작가</B></td>
        <td bgcolor='#FFFF00'><B> 이름</B></td>
        <td bgcolor='#FFFF00'><B> 출판사</B></td>
    </tr>

    <?php
     while ($rows=mysqli_fetch_row($result))
     {
         echo "<tr>";
         for ($a=0; $a< $count; $a++)
         {
             echo "<td> $rows[$a]</td>";
         }
         echo "</tr>";
     }
    ?>




</table><br>

<?php
    $row_count =mysqli_num_rows($result);
    echo "전체 레코드의 수 : <B>[ {$row_count} 개 ] </B>";
    mysqli_close($connect);


?>

<html>
    <body>
        [<a href="data_input.php">주소 입력 화면</a> ]으로 이동
    </body>
</html>