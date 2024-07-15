<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Array Manipulation</title>
</head>
<style>
    div{
        background-color: whitesmoke;
        padding: 60px;
        margin: 20px;
        border: 0.1px solid whitesmoke;
        border-radius: 50px;
    }
</style>
<body>
    <div>
    <code>
<?php 
// Initialize an array with colors
$color = array("red", "blue", "green", "black", "yellow");

// Add a new color at index 5
$color[5] = "sky";

// Print the initial array
echo "<pre>";
print_r($color);
echo "</pre>";

// Sort the array in ascending order
echo "<br><strong>Sort</strong><br>";
sort($color);
foreach($color as $value) {
    echo $value . "<br>";
}

// Sort the array in descending order
echo "<br><strong>Reverse Sort</strong><br>";
rsort($color);
foreach($color as $value) {
    echo $value . "<br>";
}

// Pop the last element from the array
echo "<br><strong>Pop</strong><br>";
array_pop($color);
foreach($color as $value) {
    echo $value . "<br>";
}

// Push a new element onto the array
echo "<br><strong>Push</strong><br>";
array_push($color, "pink");
foreach($color as $value) {
    echo $value . "<br>";
}

// Shift the first element from the array
echo "<br><strong>Shift</strong><br>";
array_shift($color);
foreach($color as $value) {
    echo $value . "<br>";
}

// Unshift a new element to the beginning of the array
echo "<br><strong>Un_Shift</strong><br>";
array_unshift($color, "white");
foreach($color as $value) {
    echo $value . "<br>";
}

// Convert the array to a string
echo "<br><strong>Array to String Convert<strong>";
$res = implode("+", $color);
echo "<br>My fav color is $res.";

// Convert a string to an array
echo "<br><br><strong>String to Array Convert</string><br>";
$senapati = "I AM THE OWNER OF HELPING HANDS";
$res = explode(" ", $senapati);
echo "<pre>";
print_r($res); 
echo "</pre>";
?>
</code>
</div>

     
</body>
</html>