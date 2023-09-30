<?php 

$sname='Rana Islam';
$mobile='01928248173';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php basic class 01</title>
</head>
<body>
<table border="1" cellspacing="0">
    <tr>
    <th>Roll</th>
    <th>Name</th>
    <th>Mobile</th>
    
    </tr>
    <tr>
    <td><?php if(isset($roll)){echo $roll;} ?></td>
    <td><?php echo $sname ?></td>
    <td><?php echo $mobile ?></td>
    
    </tr>

</table>
</body>
</html>

