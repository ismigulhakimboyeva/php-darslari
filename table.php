<?php
$talabalar = [
	["name" => "Zuhra", "surmname" => "Xojanazarova", "age" => "14", "grade" => "5" ]
]
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
        
        <th>name</th>
        <th>surname</th>
        <th>age</th>
        <th>grade</th>
    </tr>
		</thead>
		<tbody>
			 
        <tr>
        <td><?php echo ++$key ?></td>
        <td><?php $item['name'] ?></td>
        <td><?php $item['surname'] ?></td>
        <td><?php $item['age'] ?></td>
        <td></td>
    </tr>
		</tbody>
</table>

</body>
</html>