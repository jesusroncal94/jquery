<?php

$conn = mysqli_connect('localhost', 'root', 'root', 'ubigeo');

$sql = "SELECT * FROM ubigeo2006 WHERE CodProv = 0 AND CodDist = 0";

$result = mysqli_query($conn, $sql);

$cadena = '';

while ($row = mysqli_fetch_row($result)) {
    $cadena=$cadena.'<option value = '.$row[0].'>'.utf8_encode($row[3]).'</option>';
}

echo $cadena;

?>