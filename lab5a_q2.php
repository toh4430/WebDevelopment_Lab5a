<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q2</title>
</head>
<body>
    <?php
    // Define the associative array
    $students = [
        ['name' => 'Alice', 'program' => 'BIP', 'age' => 21],
        ['name' => 'Bob', 'program' => 'BIS', 'age' => 20],
        ['name' => 'Raju', 'program' => 'BIT', 'age' => 22],
    ];
    ?>
    <!-- Display the array in an HTML table -->
    <table border="1" cellpadding="5">
        <tr>
            <th>Name</th>
            <th>Program</th>
            <th>Age</th>
        </tr>
        <?php foreach ($students as $student): ?>
        <tr>
            <td><?php echo $student['name']; ?></td>
            <td><?php echo $student['program']; ?></td>
            <td><?php echo $student['age']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>