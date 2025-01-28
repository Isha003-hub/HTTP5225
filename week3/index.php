
<!doctype html>
<html>
    <head>
        <title>PHP If Statements</title> 
    </head>
    <body>

        <h1>PHP If Statements</h1> 

        <p>Use PHP echo and variables to output the following link information, use if statements to make sure everything outputs correctly:</p>

        <?php

        // **************************************************
        // Do not edit this code

        // Generate a random number (1, 2, or 3)
        $randomNumber = ceil(rand(1,3));

        // Display the random number
        echo '<p>The random number is '.$randomNumber.'.</p>';

        // Based on the random number PHP will define four variables and fill them with information about Codecademy, W3Schools, or MDN
        
        // The random number is 1, so use Codecademy
        if ($randomNumber == 1)
        {

            $linkName = 'Codecademy';
            $linkURL = 'https://www.codecademy.com/';
            $linkImage = '';
            $linkDescription = 'Learn to code interactively, for free.';

        }

        // The random number is 2, so use W3Schools
        elseif ($randomNumber == 2)
        {

            $linkName = '';
            $linkURL = 'https://www.w3schools.com/';
            $linkImage = 'img/w3schools (1).png';
            $linkDescription = 'W3Schools is optimized for learning, testing, and training.';

        }

        // The random number is 3, so use MDN
        else
        {

            $linkName = 'Mozilla Developer Network';
            $linkURL = 'week3/img/mozilla.png';
            $linkImage = 'img/mozilla.png';
            $linkDescription = 'The Mozilla Developer Network (MDN) provides information about Open Web technologies.';

        }

        // **************************************************

        // Beginning of the exercise, place all of your PHP code here
        // Upload this page (or use your localhost) and refresh the page, the h2 below will change

        if ($linkName == '')
        {
            echo '<h2>'.$linkName.'</h2>';
            echo '<a href="' .$linkURL. '">' .$linkURL . '</a>'; 
            echo '<img src="'. $linkImage.'" height = "100" width = "100">';
            echo '<p>'.$linkDescription.'</p>';

        }
        elseif($linkImage == '')
        {
            echo '<h2>'.$linkName.'</h2>';
            echo '<a href="' .$linkURL. '">' .$linkName . '</a>';
            echo '<p>'.$linkDescription.'</p>';
        }
        else
        {
            echo '<h2>'.$linkName.'</h2>';
            echo '<a href="' .$linkURL. '">' .$linkName . '</a>';
            echo '<img src="'. $linkImage.'" height = "100" width = "100">';
            echo '<p>'.$linkDescription.'</p>';
        }
        ?>

        
        <hr>
        <h1>Challenge 1</h1>
        </hr>
        <?php 
            //$hour = date('G');
            $hour = ceil(rand(1,24));
            echo $hour;

            if($hour >= 5 && $hour <= 9 )
            {
                echo '<p>Breakfast: "Bananas, Appels and Oats</p>';
            }
            elseif($hour>= 12 && $hour <= 2)
            {
                echo '<p>Lunch: "Fish, Chicken and Vegetables</p>';
            }
            elseif($hour>= 7 && $hour <= 9)
            {
                echo '<p>Dinner: "Steack, Carrots and Broccoli</p>'; 
            }
            else
            {
                echo '<p>The animals are not being fed.</p>';
            }
        ?>

        <hr>
        <h1>Challenge 2</h1>
        </hr>

        <?php
        $randomNumber = ceil(rand(1,100));
        $check = $randomNumber%3;

        if($randomNumber % 3 == 0 && $randomNumber % 5 == 0)
            {
                echo '<p>the magic number is : FizzBuzz</p>';
            }
        elseif($randomNumber % 3 == 0)
            {
                echo '<p>the magic number is : Fizz</p>';
            }
            elseif($randomNumber % 5 == 0)
            {
                echo '<p>the magic number is : Buzz</p>'; 
            }
            else
            {
                echo '<p>the magic number is : ' .$randomNumber. '</p>';
            }

        
        ?>



    </body>
</html>
