<?php
require_once 'connMysql.php';
if (isset($_POST["action"]) && $_POST["action"]=="update"){
    //print "ok";
    $sql_query = "UPDATE `students` SET";
    $sql_query .= "`cName`='" . $_POST["cName"]."',";
    $sql_query .= "`cSex`='" . $_POST["cSex"]."',";
    $sql_query .= "`cBirthday`='" . $_POST["cBirthday"]."',";
    $sql_query .= "`cEmail`='" . $_POST["cEmail"]."',";
    $sql_query .= "`cPhone`='" . $_POST["cPhone"]."',";
    $sql_query .= "`cAddr`='" . $_POST["cAddr"]. "'";
    $sql_query .="WHERE `cID`="  . $_POST["cID"];
    //print $sql_query;
     mysqli_query($conn,$sql_query);
         mysqli_close($conn);
         header("Location:data.php");
    
}
$sql = "SELECT * FROM`students`WHERE `cID`=".$_GET["id"];
//print $sql;
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
//print_r($row);
mysqli_close($conn);

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
        <h1 align="center">學生資料管理系統-修改資料</h1>
        <p align="center"><a href="data.php">回主畫面</a>/<p>
        <form action="" method="post">
            <table border="1" align="center" cellpadding="4">
                <tr>
                    <th>欄位</th>
                    <th>資料</th>
                </tr>
                <tr>
                    <td>姓名</td>
                    <td><input type="text" name="cName"id="cName" value="<?php print $row["cName"];?>"></td>
                </tr>
                <tr>
                    <td>性別</td>
                    <td><input type="radio" name="cSex"id="radio" value="M" <?php if($row["cSex"]=="M")print "checked";?>>男
                    <input type="radio" name="cSex"id="radio" value="F" <?php if($row["cSex"]=="M")print "checked";?>>女</td>
                </tr>
                <tr>
                    <td>生日</td>
                    <td><input type="date" name="cBirthday"id="cBirthday"value="<?php print $row["cBirthday"];?>"></td>
                </tr>
                <tr>
                    <td>電子郵件</td>
                    <td><input type="text" name="cEmail"id="cEmail"value="<?php print $row["cEmail"];?>"></td>
                </tr>
                <tr>
                    <td>電話</td>
                    <td><input type="text" name="cPhone"id="cPhone"value="<?php print $row["cPhone"];?>"></td>
                </tr>
                <tr>
                    <td>住址</td>
                    <td><input type="text" name="cAddr"id="cAddr" size="40"value="<?php print $row["cAddr"];?>"></td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                      
                        <input name="cID" type="hidden" value="<?php print $row["cID"]; ?>" >
                        <input name="action" type="hidden" value="update" >
                        <input type="submit"name="button"id="button"value="新增資料">
                        <input type="reset"name="button2"id="button2"value="重新填寫">
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>
