

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
// Function to fetch user data from the JSONPlaceholder API
function getUsers() {
$url = "https://jsonplaceholder.typicode.com/users";
$data = file_get_contents($url);
return json_decode($data, true);
}

// Get the list of users
$users = getUsers();


    //user infromation

    for($i = 0; $i<count($users); $i++)
    {
    echo "Name: ". $users[$i]["name"]. "<br> ";
    echo "Username: ". $users[$i]["username"]. "<br>";
    echo "Email:". $users[$i]["email"]. "<br>";
    echo "Address:". $users[$i]["address"]["suite"]. "," . $users[$i]["address"]["street"]. "," . $users[$i]["address"]["city"]. ",". $users[$i]["address"]["zipcode"]. "<br>";
    //echo "zipcode:" . $users[$i]["address"]["zipcode"]. "<br>";
    //echo "Lat-long:" . $users[$i]["address"]["geo"]["lat"]. "<br>" . $users[$i]["address"]["geo"]["lng"]. "<br>";
    //echo "Phone number:" . $users[$i]["phone"]. "<br>";
    echo "<br>";
    } 
?>

</body>
</html>
