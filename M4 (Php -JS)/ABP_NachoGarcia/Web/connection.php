<?php      
        $host = "localhost";  
        $user = "root";  
        $password = '';  
        $db_name = "abp_nacho_garcia";  
          
        $con = mysqli_connect($host, $user, $password, $db_name);  
        if(mysqli_connect_errno()) {  
            die("La conexión ha fallado ". mysqli_connect_error());  
        }  
    ?>  