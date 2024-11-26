<?php
$students = [
    [
        "name" => "Alice",
        "program" => "BIP",
        "age" => 21
    ],
    [
        "name" => "Bob",
        "program" => "BIS",
        "age" => 20
    ],
    [
        "name" => "Raju",
        "program" => "BIT",
        "age" => 22
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 5a Question</title>
</head>
<body>
    <table border="1">
        <thead>
            <tr>
                <?php foreach($students[0] as $key => $value) { ?>
                    <th><?php echo ucfirst($key); ?></th>
                <?php } ?>
            </tr>
        </thead>
        <?php foreach($students as $student) { ?>
            <tr>
                <td><?php echo $student["name"]; ?></td>
                <td><?php echo $student["program"]; ?></td>
                <td><?php echo $student["age"]; ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>