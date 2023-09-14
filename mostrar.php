<HTML>
<head>
<link rel="stylesheet" href="styles2.css">

</head>
<body>
<div>
    
    <?php 
$conex = mysqli_connect("localhost","root","","base");

if($conex)
{
$consulta = "SELECT * FROM dataset_1";
$resultado = mysqli_query($conex,$consulta);
if ($resultado)
{
?>

 <table border ="2" align=center>
 <tr>
<td>ID </td>
<td> MARCA</td>
<td> MODELO</td>
<td> AÑO</td>
<td>CC </td>
<td> PRECIO</td>
<td> KILOMETRAJE</td>
<td>COLOR </td>
<td> TRANSMISION</td>
<td> TIPOCOMBUSTION</td>
<td>TIPOCARRO </td>
<td> TIPOTRANS</td>
<td> ESTADO</td>

</tr>

<?php


while ($row=$resultado->fetch_array())
{

$id =$row['ID'];
$MARCA=$row['MARCA'];
$MODELO=$row['MODELO'];
$AÑO =$row['AÑO'];
$CC =$row['CC'];
$PRECIO =$row['PRECIO'];
$KILOMETRAJE =$row['KILOMETRAJE'];
$COLOR =$row['COLOR'];
$TRANSMISION =$row['TRANSMISION'];
$TIPOCOMBUSTION =$row['TIPOCOMBUSTION'];
$TIPOCARRO =$row['TIPOCARRO'];
$TIPOTRANS =$row['TIPOTRANS'];
$ESTADO =$row['ESTADO'];
?>
<tr> 
<td> <?php echo $id; ?> </td>
<td> <?php echo $MARCA; ?></td>
<td> <?php echo $MODELO; ?></td>
<td> <?php echo $AÑO; ?></td>
<td> <?php echo $CC; ?></td>
<td> <?php echo $PRECIO; ?> </td>
<td> <?php echo $KILOMETRAJE; ?></td>
<td> <?php echo $COLOR; ?></td>
<td> <?php echo $TRANSMISION; ?> </td>
<td> <?php echo $TIPOCOMBUSTION; ?></td>
<td> <?php echo $TIPOCARRO; ?></td>
<td> <?php echo $TIPOTRANS; ?> </td>
<td> <?php echo $ESTADO; ?></td>

</tr>
<br>

<?php  


}
}

}
else
{
echo 'No se conecto a la base de datos';
}
?>
<a href="index.php">Volver</a>
</div>
</body>

</html>

