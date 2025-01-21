<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week2</title>
</head>
<body>
    <?php 
        echo "<h1>Isha Shah</h1>";
        echo "<p>Get to Know Me</p>";
        echo $firstname = "Isha\n";
        echo $lastname = "Shah<br>";
        echo $favcolor = "My favourite color is Blue.<br>";
        echo $whoim = "I've completed BCA and currently doing Web Development.<br>";
        $hobbies = array('Dancing','Sketching','Sports','Cooking');
     ?>
</body>
</html>


<!---------------------------Sample.html----------------------->

<!doctype html>
<html>
  <head>
    
    <title>PHP and Creating Output</title>
    
  </head>
  <body>
  
    <h1>PHP and Creating Output</h1>
    <?php 
    echo "<h1>PHP and Creating Output.</h1>";
    echo "<p>The PHP echo command can be used to create output.</p>"; 
    ?>

    <p>When creating output using echo and PHP, quotes can often cause problems. There are several solutions to using quotes within an echo statement:</p>
    
    <ul>
        <li>Use HTML special characters</li>
        <li>Alternate between single and double quotes</li>
        <li>Use a backslash to escape quotes</li>
    </ul>
    
    <h2>More HTML to Convert</h2>

    <p>PHP says "Hello World!"</p>

    <p>Can you display a sentence with ' and "?</p>

    <img src="<?php echo './img.jpg'?>" hight ="200" width="200" alt= "<?php echo 'image'?>"><br><br>
    
    <?php
    $name = "Isha Shah";
    $lastName = "Shah";

    echo "Hello! welcome back,\n" .$name   ;
    
    //First way to describe an array 
    $person['first'] = "Isha";
    $person['last'] = "Shah";
    $person['email'] = "abc@gmail.com";
    $person['age'] = "21";
    $person['email'] = "n01706361@humber.ca";
    $person['website'] = "https://www.myntra.com/";

    //second way to describe an array

    //$person = array("Isha", "Shah", "abc@gmail.com", "21");
    //$person[0]; 

    echo  "how are you doing\n" .$person['first']; 
    ?>

    <br><br>
    <a href="mailto:<?php echo $person['email']; ?>">Mail me here</a>
    <br><br>

    <a href="<?php echo $person['website']; ?>">Want to buy something?</a>



  </body>
</html>




































