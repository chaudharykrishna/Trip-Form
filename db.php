<?PHP
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "tilottama";

    $con = mysqli_connect($host, $user, $pass, $dbname) or die();
    
    // $con = new mysqli($host, $user, $pass, $dbname) or die();
    // if (!$con) {
    //     die("Failed ". mysqli_connect_error());
    //   }
    //   echo "Connection established successfully";
    // 

 ?>