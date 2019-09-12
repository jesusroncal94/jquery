<?php
include 'conexion.php';

$departamento = $_POST['departamento'];
$sql = "SELECT * FROM ubigeo2006 WHERE CodDpto = '$departamento' AND CodProv != 0 AND CodDist = 0";
$result = mysqli_query($conn, $sql);

$cadena = '';
while ($row = mysqli_fetch_row($result)) {
    $cadena=$cadena.'<option value = '.$row[1].'>'.utf8_encode($row[3]).'</option>';
}

echo $cadena;

$conn->close();

?>