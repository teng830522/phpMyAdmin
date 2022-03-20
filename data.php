<?php
require_once 'connMysql.php';
$sql = "SELECT *FROM `students`";
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>學生資料管理系統</title>
    </head>
    <body>
        <?php
       if($result = mysqli_query($conn,$sql)){
           $totoal_records = mysqli_num_rows($result);
       
        ?>
        <h1 align="center">學生資料管理系統</h1>
        <p align="center">目前資料筆數:<?php print $totoal_records; ?>，<a href="add.php">新增學生資料</a></p>
        <table border="1" align="center">
            <tr>
                <th>座號</th>
                <th>姓名</th>
                <th>性別</th>
                <th>生日</th>
                <th>電子郵件</th>
                <th>電話</th>
                <th>住址</th>
                <th>功能</th>
                
            </tr>
        
        <?php
       while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
           print "<tr>";
           print "<td>".$row["cID"]."</td>";
           print "<td>".$row["cName"]."</td>";
           print "<td>".$row["cSex"]."</td>";
           print "<td>".$row["cBirthday"]."</td>";
           print "<td>".$row["cEmail"]."</td>";
           print "<td>".$row["cPhone"]."</td>";
           print "<td>".$row["cAddr"]."</td>";
           print "<td><a href='update.php?id=".$row["cID"]."'>修改  </a>";
           print "<a href='delete.php?id=".$row["cID"]."'> 刪除</a></td>";
           print "</tr>";
       }
        
       }
       ?>
            </table>
    </body>
</html>
<?php
mysqli_free_result($result);
mysqli_close($conn);
?>
