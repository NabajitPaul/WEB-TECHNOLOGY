<?php
$data = [
    ['Name' , 'Roll No.'],
    ['John ',  21300],
    ['Hari' ,  21301],
    ['Marry',  21303]
];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Simple Table</title>
</head>
<body>
    <table border="1 ">
        <?php foreach ($data as $row): ?>
            <tr>
                <?php foreach ($row as $cell): ?>
                    <td><?= $cell ?></td>
                <?php endforeach; ?>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
