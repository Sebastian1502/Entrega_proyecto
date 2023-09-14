
<HTML> 

    <HEAD>
     
     <TITLE> Registrar Carro </TITLE>
     <meta chrset ="UTF-8">
     <link rel="stylesheet" href="styles.css">
    
  
    </HEAD>
    

     <BODY> 
     <?php include("libreria.php") ?>
    

      <form name = "f" action ="insertar.php">
        <h1 align =center>Agregar un Carro </h1> 
        <table border =2 align =center>
            <tr align = center> <td align =center><img src ="image.jpeg", width ="200"></td> </tr>
            <tr align = center> <td>Marca: <INPUT TYPE ="text" NAME="MARCA"><br>
            <tr align = center> <td>Modelo: <INPUT TYPE ="text" NAME="MODELO"><br>
            <tr align = center> <td>Año: <INPUT TYPE ="text" NAME="AÑO"><br>
            <tr align = center> <td>cc: <INPUT TYPE ="text" NAME="CC"><br>
            <tr align = center> <td>Precio: <INPUT TYPE ="text" NAME="PRECIO"><br>
            <tr align = center> <td>Kilometraje: <INPUT TYPE ="text" NAME="KILOMETRAJE"><br>
            <tr align = center> <td>Color: <INPUT TYPE ="text" NAME="COLOR"><br>
            <tr align = center> <td>Transmision: <INPUT TYPE ="text" NAME="TRANSMISION"><br>
            <tr align = center> <td>Tipocombustion: <INPUT TYPE ="text" NAME="TIPOCOMBUSTION"><br>
            <tr align = center> <td>Tipocarro: <INPUT TYPE ="text" NAME="TIPOCARRO"><br>
            <tr align = center> <td>Tipotrans: <INPUT TYPE ="text" NAME="TIPOTRANS"><br>
            <tr align = center> <td>Estado: <INPUT TYPE ="text" NAME="ESTADO"><br>
            <tr align = center> <td><input type="submit" value= "aceptar"    onclick= "javascript:verifica();"><input type="reset" value="limpiar"></td></tr>
            <tr align = center> <td> <a href="mostrar.php"> listar usuarios </a> </td> </tr>
            <?php verifica(); ?>
            
        </BODY>    
     
 </HTML>