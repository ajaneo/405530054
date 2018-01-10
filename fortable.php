<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>fortable</h1>
    <table style="border:3px #8282FF solid;padding:5px;" rules="all" cellpadding='5';">
        <tr>
<?php
$data=array(
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)   
);

for ($i=0; $i<4; $i++) {
    echo "<tr>";
    for($j=0;$j<3;$j++)
    {
        $value=$data[$i][$j];
        echo "<td>$value</td>";
    }
    echo "</tr>";
}
?>
</tr>
</table>

<h1>foreachtable</h1>
<table style="border:3px #FF7878 solid;padding:5px;" rules="all" cellpadding='5';">
        <tr>
<?php
$data=array(
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)   
);
$m=0;
foreach ($data as $value) {
    echo "<tr>";
    foreach($data[$m] as $value)
    {
        echo "<td>$value</td>";
    }
    echo "</tr>";
    $m++;
}
?>
</tr>
</table>

<h1>array_map table</h1>
<table style="border:3px #008844 solid;padding:5px;" rules="all" cellpadding='5';">
        <tr>
<?php
$data=array(
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)   
);
function jjoin($x)
{
    return $x.'</td>'; 
}
for ($r=0;$r<4;$r++) {
    echo "<tr>";
        $result=array_map("jjoin",$data[$r]);
        foreach($result as $value)
        echo "<td>".$value;
    echo "</tr>";
}
?>
</table>
</body>
</html>