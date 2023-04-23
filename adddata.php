    <html>
    <h2>YOUR INFORMTION:</h2>

    <?php
    $FirstName = $_POST['FirstName'];
    $LastName = $_POST['LastName'];
    $Age = $_POST['Age'];
    $Gender = $_POST['Gender'];
    $Email = $_POST['Email'];
    $Phone = $_POST['Phone'];
    $Date_Departure = $_POST['Date_Departure'];
    $Date_Arrival = $_POST['Date_Arrival'];
    $Place = $_POST['Place'];
    $Other = $_POST['Other'];

    include 'db.php';

    $sql = "INSERT INTO kc(FirstName, LastName, Age, Gender, Email, Phone, Date_Departure, Date_Arrival, Place, Other) 
    VALUES ('$FirstName','$LastName', '$Age', '$Gender', '$Email', '$Phone', '$Date_Departure', '$Date_Arrival', '$Place', '$Other');";

    if($con->query($sql) == true){
        echo "FirstName-------------->".$FirstName. "<br>";
        echo "LastName--------------->".$LastName. "<br>";
        echo "Age-------------------->".$Age. "<br>";
        echo "Gender----------------->".$Gender. "<br>";
        echo "Email------------------>".$Email. "<br>";
        echo "Phone------------------>".$Phone. "<br>";
        echo "Date of Departure------>".$Date_Departure. "<br>";
        echo "Date of Arrival-------->".$Date_Arrival. "<br>";
        echo "Place to Visit--------->".$Place. "<br>";
        echo "Additional Information->".$Other; 
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }
    $con->close();  
    ?>

    <br> <br>
    <a href="https://www.tilottama.edu.np/">Click me to know more about Tilottama Campus.</a>
    </html>