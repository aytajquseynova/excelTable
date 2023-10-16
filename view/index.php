<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
            <th>A</th>
            <th>B</th>
            <th>C</th>
            <th>D</th>
            <th>E</th>
            <th>F</th>
            <th>G</th>
            <th>H</th>
            <th>J</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($datas as $data):
         ?>
        <tr>
            <td><?= $data[0]?></td>
            <td><?= $data[1]?>
            </td>
            <td><?= $data[2]?></td>
            <td><?= $data[3]?></td>
            <td><?= $data[4]?></td>
            <td><?= $data[5]?></td>
            <td><?= $data[6]?></td>
            <td><?= $data[7]?></td>
            <td><?= $data[8]?></td>
        </tr>
         <?php endforeach;
         ?>
        </tbody>
    </table>
</body>
</html>