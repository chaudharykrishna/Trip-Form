<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <img class="bg" src="photo.jpg"  alt="Tilottama Campus" >
    <div class="container">
        <h1> Welcome to Tilottama Trip Form </h1>
        <p style="color: yellow">Enter your details and submit this form to confirm your participation in the trip. </p> <br>
        <form action="adddata.php" method="POST">

        <label  for="firstname" style="color: black"> FirstName: </label>   
        <input type="text" name="FirstName" id="FirstName" placeholder="Enter your firstname"> <br>

        <label for="lastname" > LastName: </label>   
        <input type="text" name="LastName" id="LastName" placeholder="Enter your lastname"> <br>
        
        <label for="name" > Age: </label>
        <input type="text" name="Age" id="Age" placeholder="Enter your age"> <br>
           
        <label for="gender" > Gender: </label>
        <input type="text" name="Gender" id="Gender" placeholder="Enter your gender"> <br> 

        <label for="email" > E-mail: </label>
        <input type="email" name="Email" id="Email" placeholder="Enter your email"> <br>
        
        <label for="phone" style="color: yellow"> Phone: </label>
        <input type="phone" name="Phone" id="Phone" placeholder="Enter your phone no."> <br>

        <label for="date" style="color: white">Date of Departure:</label>
		<input type="date" id="Date_Departure" name="Date_Departure" required> <br>

        <label for="date" style="color: yellow">Date of Arrival:</label>
		<input type="date" id="Date_Arrival" name="Date_Arrival" required> <br>
        
        <label for="Place" style="color: yellow">Place to Visit:</label>
		<input type="text" id="Place" name="Place" placeholder="Enter place to visit" required> <br>

        <label for="message" style="color: yellow"> Additional Information: </label>
        <textarea name="Other" id="Other" cols="30" rows="10" placeholder="Enter any additional information here"></textarea>

        <button class="btn">Submit</button>

        </form>
    </div>

</body>
</html>