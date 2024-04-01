<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Receiver Page</title>
</head>
<body>
<?php session_start(); 
$hostName = "localhost";
$userName = "root";
$password = "root";
$databaseName = "newmodeldb";
$TemCovid;
$Porcentagem;
$id = $_SESSION['last_id'];
$sql = ""; //sql para pegar os dados do banco de dados
$conn = new mysqli($hostName, $userName, $password, $databaseName);
// Check connection 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT TemCovid, Porcentagem FROM prediction WHERE idPessoa = " . $id;
$result = $conn->query($sql);

$row = mysqli_fetch_assoc($result);
if ($result->field_count > 0) {

$TemCovid = $row['TemCovid'];
$Porcentagem = $row['Porcentagem'];

} else {
    echo "0 results";
}

?>
<b>Resultados:</b>
<br> <br> 
<b> <?php echo $TemCovid; ?></b>
<br> <br> 
<b> <?php echo $Porcentagem; ?></b>

</body>
</html>