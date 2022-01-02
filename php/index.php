

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <style>
        .container{

            margin-top: 200px;
            margin-left: 500px;
            width: 200px;
            height:200px;
            border-radius: 50px/25px;
            background:grey;
            padding: 20px;
        
        }

        </style>
</head>

<body>
    <?php   

    $name = $phone = $gender ="";
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $name = test_input($_POST["name"]);
        $phone = test_input($_POST["phone"]);
        $gender = test_input($_POST["gender"]);
    }
    
    /*
     fucntion name test_input who takes parameter data which is name, phone and gender 
     and trim funtion remove the extra whitespace from string ;
     The stripslashes() function removes backslashes added by the addslashes() function.
     Eg:
     <?php
        echo stripslashes("Who\'s Peter Griffin?");
     ?>
     output:
       Who's Peter Griffin?

     */
    function test_input($data){

        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    ?>

  

   <div class="container">
    <form method="POST" action="/php/index.php">

        <label> Name:</label>
        <input type="text" name= "name" />
        <br>
        <label> Phone Number:</label>
        <input type="number" name ="phone" />
        <br>
        <label>Gender</label>
        <input type="radio" name="gender" value="male">male
        <input type="radio" name="gender" value="female">female
        <br><br>
        <input type="submit" value="Submit">
    </form>
    <br> 

    <?php
        echo $name; // display the the name input by user when submit button is clicked
        echo"<br>";
        echo $phone;// display the the phone input by user when submit button is clicked
        echo"<br>";
        echo $gender;

    ?>
   </div>
   
</body>
</html>