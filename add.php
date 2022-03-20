<?php
if(isset($_POST["action"]) && $_POST["action"]=="add"){
   require_once 'connMysql.php';
    $sql_query = "INSERT INTO `students` (`cName`,`cSex`,`cBirthday`,`cEmail`,`cPhone`,`cAddr`)VALUES(";
    $sql_query .= "'".$_POST["cName"]."',";
     $sql_query .= "'".$_POST["cSex"]."',";
      $sql_query .= "'".$_POST["cBirthday"]."',";
       $sql_query .= "'".$_POST["cEmail"]."',";
        $sql_query .= "'".$_POST["cPhone"]."',";
         $sql_query .= "'".$_POST["cAddr"]."')";
         mysqli_query($conn,$sql_query);
         mysqli_close($conn);
         header("Location:data.php");
        
}
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
        <title></title>
    </head>
    <body>
        <h1 align="center">學生資料管理系統-新增資料</h1>
        
        <form action="" method="POST">
            <table border="1" align="center" cellpadding="4">
                <tr>
                    <th>欄位</th>
                    <th>資料</th>
                </tr>
                <tr>
                    <td>姓名</td>
                    <td><input type="text" name="cName"id="cName"></td>
                </tr>
                <tr>
                    <td>性別</td>
                    <td><input type="radio" name="cSex"id="radio" value="M" checked>男
                    <input type="radio" name="cSex"id="radio" value="F" checked>女</td>
                </tr>
                <tr>
                    <td>生日</td>
                    <td><input type="date" name="cBirthday"id="cBirthday"></td>
                </tr>
                <tr>
                    <td>電子郵件</td>
                    <td><input type="text" name="cEmail"id="cEmail"></td>
                </tr>
                <tr>
                    <td>電話</td>
                    <td><input type="text" name="cPhone"id="cPhone"></td>
                </tr>
                <tr>
                    <td>住址</td>
                    <td><input type="text" name="cAddr"id="cAddr" size="40"></td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input name="action" type="hidden" value="add">
                        <input type="submit"name="button"id="button"value="新增資料">
                        <input type="reset"name="button2"id="button2"value="重新填寫">
                    </td>
                </tr>
            </table>
        </form>
                
                
        <p align="center"><a href="data.php">回主畫面</a></p>
    </body>
</html>
