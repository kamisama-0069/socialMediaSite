<?php 
import 'connection.php';
$sql = "SELECT * from salve_market"
reulst = $conn->query($sql);
echo " display table";
echo "<table border = '2'>
<tr>
<th> id</th>
<th> name </th>
<th> description </th>
<th> price </th>
";
while($row = $result->fetch_assoc()){
    echo"<tr>
    <td>{$row[id]}</td>
    <td>{$row[description]}</td>
    <td>{$row[price]}</td>
    "
}
