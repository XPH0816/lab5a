<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q1</title>
</head>
<body>
    <?php 
        $name = "Lim Shi Song";
        $martic = "CI220106";
        $course = "Bachelor Degree in Computer Science (Information Security)";
        $year = 3;
        $address = "No. 12, Jalan 1, Taman Bunga Raya, 75450 Melaka";
    ?>
    <table>
        <tr>
            <td>Name</td>
            <td><?php echo "$name"; ?></td> 
        </tr>
        <tr>
            <td>Martic No</td>
            <td><?php echo "$martic"; ?></td>
        </tr>
        <tr>
            <td>Course</td>
            <td><?php echo "$course"; ?></td>
        </tr>
        <tr>
            <td>Year Of Study</td>
            <td><?php echo "$year"; ?></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><?php echo "$address"; ?></td>
        </tr>
    </table>
</body>
</html>
