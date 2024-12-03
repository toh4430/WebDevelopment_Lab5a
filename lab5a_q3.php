<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q3</title>
</head>
<body>
    <?php
    // Define the function to calculate the area of a rectangle
    function calculateArea($length, $width) {
        return $length * $width;
    }

    // Call the function with example values
    $length = 10;
    $width = 5;
    $area = calculateArea($length, $width);
    ?>
    <h3>Rectangle Area Calculation</h3>
    <p>Length: <?php echo $length; ?></p>
    <p>Width: <?php echo $width; ?></p>
    <p>Area: <?php echo $area; ?></p>
</body>
</html>
