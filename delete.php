<?php
require_once 'connMysql.php';
if (isset($_POST["action"]) && $_POST["action"]=="delete"){
 $sql_query="DELETE FROM `students` WHERE `cID`=" . $_POST["cID"];
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
        <title>學生資料管理系統</title>
        <script>
            function myFunction(){
                var r = confirm("您確定要刪除這筆資料嗎?\n刪除後無法恢復\n");
                if(r==true){
                    return true;
                }else{
                    return false;
                }
            }
            </script>
    </head>
    <body>
        <h1 align="center">學生資料管理系統-刪除資料</h1>
        <p align="center"><a href="data.php">回主畫面</a>/<p>
        <form action="" method="POST">
            <table border="1" align="center" cellpadding="4">
                <tr>
                    <th>欄位</th>
                    <th>資料</th>
                </tr>
                <tr>
                    
                    <td>姓名</td><td><?php print $row["cName"];?></td>
                </tr>
                <tr>
                    <td>性別</td>
                    <td>
                    <?php if($row["cSex"]=="M")print "男"; ?>
                    <?php if($row["cSex"]=="F")print "女"; ?>
                    </td>
                </tr>
                <tr>
                   
                     <td>生日</td><td><?php print $row["cBirthday"];?></td>
                </tr>
                <tr>
                    <td>電子郵件</td>
                    <td><?php print $row["cEmail"];?></td>
                </tr>
                <tr>
                    <td>電話</td>
                    <td><?php print $row["cPhone"];?></td>
                </tr>
                <tr>
                    <td>住址</td>
                    <td><?php print $row["cAddr"];?></td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                       
                        <input name="cID" type="hidden" value="<?php print $row["cID"]; ?>" >
                        <input name="action" type="hidden" value="delete" >
                        <!--
                        <input type="submit"name="button"id="button"value="確認刪除這筆資料嗎?">
                        -->
                        <button onclick="return myFunction();">確定刪除這筆資料嗎?</button>
                        
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>
