
        <?php
        $servername = "localhost";
        $username = "root";
        $passwd = "";
        $database = "class";
        $conn = mysqli_connect($servername,$username,$passwd,$database);
        if(mysqli_connect_error())
            print "Failed to connect to MySQL:" . mysqli_connect_error();
        else {
        print "連線成功";    
        }
        mysqli_query($conn,"SET NAMES utf8");
        ?>
