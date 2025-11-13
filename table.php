<?php
$talabalar = [
    ["name" => "Zuhra", "surname" => "Xojanazarova", "age" => "14", "grade" => "5"]
];
?>

<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <title>Talabalar Jadvali</title>
</head>
<body>

<h2>Talabalar Jadvali</h2>

<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Ism</th>
            <th>Familiya</th>
            <th>Yosh</th>
            <th>Sinf</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($talabalar as $key => $item): ?>
        <tr>
            <td><?php echo ++$key; ?></td>
            <td><?php echo $item['name']; ?></td>
            <td><?php echo $item['surname']; ?></td>
            <td><?php echo $item['age']; ?></td>
            <td><?php echo $item['grade']; ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

</body>
</html>
