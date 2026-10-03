<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

$numbers = array(5, 7, 12, 10, -7, 11, -6, 12, 1, -7, 2, 9);

echo "<h3>2) Array Elements:</h3>";
echo implode(", ", $numbers) . "<br>";

$totalSum = array_sum($numbers);
echo "<h3>3) Total of All Elements:</h3>";
echo "Total = $totalSum<br>";

$evenTotal = 0;
$oddTotal = 0;
foreach ($numbers as $num) {
    if ($num % 2 == 0) {
        $evenTotal += $num;
    } else {
        $oddTotal += $num;
    }
}

echo "<h3>4) Total of Even Elements:</h3>";
echo "Even Total = $evenTotal<br>";

echo "<h3>5) Total of Odd Elements:</h3>";
echo "Odd Total = $oddTotal<br>";

$minVal = min($numbers);
$minPositions = array_keys($numbers, $minVal);
echo "<h3>6) Minimum Element:</h3>";
echo "Minimum Value: $minVal | Position(s): " . implode(", ", $minPositions) . "<br>";

$maxVal = max($numbers);
$maxPositions = array_keys($numbers, $maxVal);
echo "<h3>7) Maximum Element:</h3>";
echo "Maximum Value: $maxVal | Position(s): " . implode(", ", $maxPositions) . "<br>";


$colors = [
    "Light" => ["Red" => "Light Red", "Green" => "Light Green", "Blue" => "Light Blue"],
    "Normal" => ["Red" => "Normal Red", "Green" => "Normal Green", "Blue" => "Normal Blue"],
    "Dark" => ["Red" => "Dark Red", "Green" => "Dark Green", "Blue" => "Dark Blue"]
];

echo "<h3>2) Color Matrix Table</h3>";
echo "<table border='1' cellpadding='8' cellspacing='0'>";
echo "<tr><th></th><th>Red</th><th>Green</th><th>Blue</th></tr>";
foreach ($colors as $rowName => $colData) {
    echo "<tr><th>$rowName</th><td>{$colData['Red']}</td><td>{$colData['Green']}</td><td>{$colData['Blue']}</td></tr>";
}
echo "</table>";


$tableData = [
    ["ID" => "CA221", "Name" => "Mohamed Ahmed Ali", "Phone" => "0648440403", "Address" => "Laba Dhagax, Wardhiigley"],
    ["ID" => "CA223", "Name" => "Ahmed Abdi Jama", "Phone" => "0647223201", "Address" => "Taleex, Hodan"],
    ["ID" => "CA221", "Name" => "Amina Nur Adan", "Phone" => "0646990276", "Address" => "Macmacaanka, Dharkeynley"]
];

echo "<h3>3) Student Information Table</h3>";
echo "<table border='1' cellpadding='8' cellspacing='0'>";
echo "<tr><th></th><th>Name</th><th>Phone</th><th>Address</th></tr>";
foreach ($tableData as $row) {
    echo "<tr><th>{$row['ID']}</th><td>{$row['Name']}</td><td>{$row['Phone']}</td><td>{$row['Address']}</td></tr>";
}
echo "</table>";
?>
</body>
</html>